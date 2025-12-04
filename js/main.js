/**
 * PIXEL TERMO - Main JavaScript
 * Manejo del menú móvil y formulario de contacto
 */

document.addEventListener('DOMContentLoaded', () => {
	// ========== MENÚ MÓVIL ==========
	const menuToggle = document.getElementById('mobile-menu-toggle');
	const nav = document.querySelector('header nav');
	const navLinks = document.querySelectorAll('header nav a');

	// Alternar menú móvil
	menuToggle.addEventListener('click', () => {
		nav.classList.toggle('active');
	});

	// Cerrar menú al hacer clic en un enlace
	navLinks.forEach(link => {
		link.addEventListener('click', () => {
			nav.classList.remove('active');
		});
	});

	// ========== FORMULARIO DE CONTACTO ==========
	const contactForm = document.getElementById('contact-form');
	const formMessage = document.getElementById('form-message');

	contactForm.addEventListener('submit', async (e) => {
		e.preventDefault();

		// Obtener el token de Turnstile de forma segura
		let turnstileResponse = null;

		// Método 1: Usar el objeto turnstile si está disponible
		if (typeof turnstile !== 'undefined') {
			turnstileResponse = turnstile.getResponse();
		}
		// Método 2: Buscar el input hidden que crea Turnstile
		else {
			const turnstileInput = document.querySelector('[name="cf-turnstile-response"]');
			if (turnstileInput) {
				turnstileResponse = turnstileInput.value;
			}
		}

		if (!turnstileResponse) {
			showMessage('Por favor, completa la verificación de humanidad.', 'error');
			return;
		}

		// Obtener datos del formulario
		const formData = {
			name: document.getElementById('name').value,
			email: document.getElementById('email').value,
			phone: document.getElementById('phone').value,
			message: document.getElementById('message').value,
			'cf-turnstile-response': turnstileResponse
		};

		// Deshabilitar botón mientras se envía
		const submitBtn = contactForm.querySelector('.btn-submit');
		submitBtn.disabled = true;
		submitBtn.textContent = 'Enviando...';

		try {
			// Enviar al endpoint PHP
			const response = await fetch('contact.php', {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json',
				},
				body: JSON.stringify(formData)
			});

			// Obtener respuesta como texto primero
			const responseText = await response.text();
			console.log('Respuesta del servidor:', responseText);

			let result;
			try {
				result = JSON.parse(responseText);
			} catch (e) {
				console.error('Error parseando JSON:', e);
				console.error('Respuesta raw:', responseText);
				throw new Error('Respuesta inválida del servidor. Ver consola para detalles.');
			}

			if (response.ok && result.success) {
				showMessage(result.message || '¡Mensaje enviado! Te contactaremos pronto.', 'success');
				contactForm.reset();
				// Resetear Turnstile si está disponible
				if (typeof turnstile !== 'undefined') {
					turnstile.reset();
				}
			} else {
				showMessage(result.message || 'Error al enviar el mensaje. Intenta nuevamente.', 'error');
				if (result.debug) {
					console.error('Debug info:', result.debug);
				}
			}
		} catch (error) {
			console.error('Error de conexión:', error);
			showMessage('Error de conexión. Por favor intenta nuevamente.', 'error');
		} finally {
			submitBtn.disabled = false;
			submitBtn.textContent = 'Enviar Mensaje';
		}
	});

	/**
	 * Muestra mensaje de éxito o error
	 */
	function showMessage(text, type) {
		formMessage.textContent = text;
		formMessage.className = `form-message ${type} show`;

		setTimeout(() => {
			formMessage.classList.remove('show');
		}, 5000);
	}
});
