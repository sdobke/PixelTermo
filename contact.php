<?php
/**
 * PIXEL TERMO - Contact Form Handler
 * Procesa el formulario de contacto y envía emails con verificación Turnstile
 */

// Configuración de errores para debugging (desactivar en producción)
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);

// Headers para CORS y JSON
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Solo aceptar POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Método no permitido']);
    exit;
}

// Cargar configuración
require_once __DIR__ . '/config.php';

// Obtener datos del POST
$input = json_decode(file_get_contents('php://input'), true);

// Validar datos requeridos
if (empty($input['name']) || empty($input['email']) || empty($input['message']) || empty($input['cf-turnstile-response'])) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Faltan campos requeridos']);
    exit;
}

// Sanitizar datos
$name = htmlspecialchars(trim($input['name']), ENT_QUOTES, 'UTF-8');
$email = filter_var(trim($input['email']), FILTER_SANITIZE_EMAIL);
$phone = htmlspecialchars(trim($input['phone'] ?? ''), ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars(trim($input['message']), ENT_QUOTES, 'UTF-8');
$turnstileToken = $input['cf-turnstile-response'];

// Validar email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Email inválido']);
    exit;
}

// Verificar Turnstile con Cloudflare
$turnstileVerified = verifyTurnstile($turnstileToken, TURNSTILE_SECRET_KEY);

if (!$turnstileVerified) {
    http_response_code(403);
    error_log("Turnstile verification failed. Token: " . substr($turnstileToken, 0, 20) . "...");
    echo json_encode([
        'success' => false,
        'message' => 'Verificación de humanidad fallida',
        'debug' => [
            'token_received' => !empty($turnstileToken),
            'token_length' => strlen($turnstileToken),
            'secret_key_configured' => defined('TURNSTILE_SECRET_KEY') && !empty(TURNSTILE_SECRET_KEY)
        ]
    ]);
    exit;
}

// Enviar email
$emailSent = sendContactEmail($name, $email, $phone, $message);

if ($emailSent === true) {
    http_response_code(200);
    echo json_encode(['success' => true, 'message' => '¡Mensaje enviado correctamente!']);
} else {
    http_response_code(500);
    $errorDetails = is_array($emailSent) ? $emailSent : ['error' => 'Error desconocido'];
    echo json_encode([
        'success' => false,
        'message' => 'Error al enviar el mensaje. Revisa la consola para detalles.',
        'debug' => $errorDetails
    ]);
}

/**
 * Verifica el token de Turnstile con la API de Cloudflare
 */
function verifyTurnstile($token, $secretKey) {
    $url = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';

    $data = [
        'secret' => $secretKey,
        'response' => $token,
        'remoteip' => $_SERVER['REMOTE_ADDR'] ?? ''
    ];

    // Intentar con cURL primero (más confiable)
    if (function_exists('curl_init')) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);

        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curlError = curl_error($ch);
        curl_close($ch);

        if ($result === false) {
            error_log("Turnstile cURL error: " . $curlError);
            return false;
        }

        if ($httpCode !== 200) {
            error_log("Turnstile HTTP error: " . $httpCode);
            return false;
        }
    }
    // Fallback a file_get_contents
    else {
        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            ]
        ];

        $context = stream_context_create($options);
        $result = @file_get_contents($url, false, $context);

        if ($result === false) {
            error_log("Turnstile: Failed to contact Cloudflare API with file_get_contents");
            return false;
        }
    }

    $resultJson = json_decode($result, true);
    error_log("Turnstile response: " . json_encode($resultJson));

    if (!isset($resultJson['success'])) {
        error_log("Turnstile: Invalid response format");
        return false;
    }

    if ($resultJson['success'] !== true && isset($resultJson['error-codes'])) {
        error_log("Turnstile errors: " . implode(', ', $resultJson['error-codes']));
    }

    return $resultJson['success'] === true;
}

/**
 * Envía el email de contacto usando PHPMailer
 */
function sendContactEmail($name, $email, $phone, $message) {
    // Verificar si PHPMailer está disponible
    if (!file_exists(__DIR__ . '/vendor/autoload.php')) {
        // Fallback: usar función mail() de PHP
        return sendEmailWithPHPMail($name, $email, $phone, $message);
    }

    require __DIR__ . '/vendor/autoload.php';

    $mail = new \PHPMailer\PHPMailer\PHPMailer(true);

    try {
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host       = SMTP_HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = SMTP_USERNAME;
        $mail->Password   = SMTP_PASSWORD;
        // Detectar tipo de encriptación según el puerto
        $mail->SMTPSecure = (SMTP_PORT == 465) ? \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS : \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = SMTP_PORT;
        $mail->CharSet    = 'UTF-8';
        $mail->Timeout    = 30; // Timeout de 30 segundos

        // Debugging activado
        $mail->SMTPDebug = 2; // 0=off, 1=client, 2=server
        $mail->Debugoutput = function($str, $level) {
            error_log("PHPMailer [$level]: $str");
        };

        // Destinatarios
        $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
        $mail->addAddress(CONTACT_EMAIL_TO);
        $mail->addReplyTo($email, $name);

        // Contenido del email
        $mail->isHTML(true);
        $mail->Subject = 'Nuevo mensaje de contacto - PIXEL TERMO';

        $mail->Body = "
            <html>
            <head>
                <style>
                    body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                    .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                    .header { background: #1a1a1a; color: #FF6600; padding: 20px; text-align: center; }
                    .content { background: #f4f4f4; padding: 20px; }
                    .field { margin-bottom: 15px; }
                    .label { font-weight: bold; color: #33CC33; }
                    .value { margin-top: 5px; }
                </style>
            </head>
            <body>
                <div class='container'>
                    <div class='header'>
                        <h2>PIXEL TERMO - Nuevo Mensaje de Contacto</h2>
                    </div>
                    <div class='content'>
                        <div class='field'>
                            <div class='label'>Nombre:</div>
                            <div class='value'>{$name}</div>
                        </div>
                        <div class='field'>
                            <div class='label'>Email:</div>
                            <div class='value'>{$email}</div>
                        </div>
                        <div class='field'>
                            <div class='label'>Teléfono:</div>
                            <div class='value'>" . ($phone ?: 'No proporcionado') . "</div>
                        </div>
                        <div class='field'>
                            <div class='label'>Mensaje:</div>
                            <div class='value'>" . nl2br($message) . "</div>
                        </div>
                    </div>
                </div>
            </body>
            </html>
        ";

        $mail->AltBody = "PIXEL TERMO - Nuevo Mensaje de Contacto\n\n"
                       . "Nombre: {$name}\n"
                       . "Email: {$email}\n"
                       . "Teléfono: " . ($phone ?: 'No proporcionado') . "\n"
                       . "Mensaje: {$message}\n";

        $mail->send();
        error_log("Email enviado exitosamente a: " . CONTACT_EMAIL_TO);
        return true;
    } catch (\PHPMailer\PHPMailer\Exception $e) {
        error_log("Error PHPMailer: {$mail->ErrorInfo}");
        error_log("Exception: {$e->getMessage()}");
        return ['success' => false, 'error' => $mail->ErrorInfo, 'exception' => $e->getMessage()];
    } catch (\Exception $e) {
        error_log("Error General: {$e->getMessage()}");
        return ['success' => false, 'error' => 'Error general', 'exception' => $e->getMessage()];
    }
}

/**
 * Fallback: envía email usando la función mail() de PHP
 */
function sendEmailWithPHPMail($name, $email, $phone, $message) {
    $to = CONTACT_EMAIL_TO;
    $subject = 'Nuevo mensaje de contacto - PIXEL TERMO';

    $headers = "From: " . SMTP_FROM_EMAIL . "\r\n";
    $headers .= "Reply-To: {$email}\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $body = "
        <html>
        <body>
            <h2>PIXEL TERMO - Nuevo Mensaje de Contacto</h2>
            <p><strong>Nombre:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Teléfono:</strong> " . ($phone ?: 'No proporcionado') . "</p>
            <p><strong>Mensaje:</strong><br>" . nl2br($message) . "</p>
        </body>
        </html>
    ";

    return mail($to, $subject, $body, $headers);
}
