<?php
/**
 * PIXEL TERMO - Configuración de Ejemplo
 *
 * INSTRUCCIONES:
 * 1. Copia este archivo como config.php
 * 2. Edita config.php con tus credenciales reales
 * 3. NO subas config.php a Git (ya está en .gitignore)
 */

// ==================== CONFIGURACIÓN TURNSTILE ====================
// Secret Key de Cloudflare Turnstile
// Obtén tu Secret Key en: https://dash.cloudflare.com/
define('TURNSTILE_SECRET_KEY', 'TU_SECRET_KEY_AQUI');

// ==================== CONFIGURACIÓN DE EMAIL ====================
// Email donde se recibirán los mensajes de contacto
define('CONTACT_EMAIL_TO', 'tu-email@pixeltermo.com.ar');

// ==================== CONFIGURACIÓN SMTP ====================
define('SMTP_HOST', 'smtp.gmail.com');        // Servidor SMTP
define('SMTP_PORT', 587);                     // Puerto (587 para TLS, 465 para SSL)
define('SMTP_USERNAME', 'tu-email@gmail.com'); // Tu email completo
define('SMTP_PASSWORD', 'tu-password-aqui');   // Tu contraseña o App Password
define('SMTP_FROM_EMAIL', 'noreply@pixeltermo.com.ar');
define('SMTP_FROM_NAME', 'PIXEL TERMO - Formulario de Contacto');
