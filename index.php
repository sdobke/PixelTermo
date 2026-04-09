
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <!-- Meta tags básicos -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- SEO Meta Tags -->
	<title>PIXEL TERMO - Marketing Digital con Alma | Agencia en Argentina</title>
	<meta name="description" content="Agencia de marketing digital en Argentina. Fusionamos estrategia digital con cercanía humana. Servicios de CMO, gestión KAM y publicidad digital que convierten.">
	<meta name="keywords" content="marketing digital, agencia marketing argentina, CMO, gestión KAM, publicidad digital, redes sociales, diseño web, pixel termo">
	<meta name="author" content="PIXEL TERMO">
	<meta name="robots" content="index, follow">
	<meta name="language" content="Spanish">
	<meta name="revisit-after" content="7 days">

	<!-- Canonical URL -->
	<link rel="canonical" href="https://www.pixeltermo.com.ar/">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://www.pixeltermo.com.ar/">
	<meta property="og:title" content="PIXEL TERMO - Marketing con alma">
	<meta property="og:description" content="Agencia de marketing digital en Argentina. Fusionamos estrategia digital con cercanía humana.">
	<meta property="og:image" content="https://www.pixeltermo.com.ar/img/og-image.jpg">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">
	<meta property="og:locale" content="es_AR">
	<meta property="og:site_name" content="PIXEL TERMO">

	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:url" content="https://www.pixeltermo.com.ar/">
	<meta name="twitter:title" content="PIXEL TERMO - Marketing con alma">
	<meta name="twitter:description" content="Agencia de marketing digital en Argentina. Fusionamos estrategia digital con cercanía humana.">
	<meta name="twitter:image" content="https://www.pixeltermo.com.ar/img/og-image.jpg">
	<meta name="twitter:site" content="@pixeltermo">
	<meta name="twitter:creator" content="@pixeltermo">

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="/favicon/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/svg+xml" href="/favicon/favicon.svg" />
	<link rel="shortcut icon" href="/favicon/favicon.ico" />
	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png" />
	<meta name="apple-mobile-web-app-title" content="PixelTermo" />
	<link rel="manifest" href="/favicon/site.webmanifest" />

	<!-- DNS Prefetch / Preconnect -->
	<link rel="dns-prefetch" href="https://fonts.googleapis.com">
	<link rel="dns-prefetch" href="https://challenges.cloudflare.com">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Helvetica World:wght@300;400;600;800;900&display=swap" rel="stylesheet">
    <!-- Font Awesome para Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Montserrat', 'sans-serif'],
                    },
                    colors: {
                        pixel: {
                            dark: '#121212',
                            gray: '#1e1e1e',
                            orange: '#F97316', /* Naranja característico */
                            light: '#f3f4f6'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
        }
        
        /* Efecto de texto con degradado naranja */
        .text-gradient {
            background: linear-gradient(90deg, #F97316, #fb923c);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Capa oscura para legibilidad sobre imágenes/videos */
        .overlay {
            background: linear-gradient(to bottom, rgba(18,18,18,0.3) 0%, rgba(18,18,18,0.9) 100%);
        }

        .img-hover-zoom {
            transition: transform 0.5s ease;
        }
        .img-hover-zoom:hover {
            transform: scale(1.05);
        }
        .py-30{padding-top:30px; padding-bottom:30px}
    </style>
</head>
<body class="antialiased selection:bg-pixel-orange selection:text-white">

    <!-- Navegación Sticky -->
    <nav class="fixed w-full z-50 bg-pixel-white/90 backdrop-blur-md border-b border-white/10 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0 flex items-center gap-3 cursor-pointer" onclick="window.scrollTo(0,0)">
                    <!-- Logo simulado (Termo + Mate) -->
                    <div class="w-10 h-10 bg-pixel-transparent rounded flex items-center justify-center text-black font-bold text-xl">
						<img src="https://www.pixeltermo.com.ar/iconos/pixel y termo transparente.png" width="200" height="100" alt="Pixeltermo" <i class="fa-solid fa-mug-hot"></i>
                    </div>
                    <span class="font-black text-2xl tracking-tighter">PIXELTERMO</span>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#stands" class="text-sm font-semibold hover:text-pixel-orange transition-colors">STANDS</a>
                    <a href="#catering" class="text-sm font-semibold hover:text-pixel-orange transition-colors">CATERING</a>
                    <a href="#merch" class="text-sm font-semibold hover:text-pixel-orange transition-colors">MERCH</a>
                    <a href="#eventos" class="text-sm font-semibold hover:text-pixel-orange transition-colors">EVENTOS</a>
                    <a href="#digital" class="text-sm font-semibold hover:text-pixel-orange transition-colors">DIGITAL</a>
                    <a href="#contacto" class="text-sm font-bold text-pixel-orange border border-pixel-orange px-4 py-1 rounded hover:bg-pixel-orange hover:text-white transition-all">HABLEMOS</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION (Página 1) con Video de fondo -->
    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <!-- Reemplazar el src del video con tu propio video mp4 -->
        <video autoplay loop muted playsinline class="absolute z-0 w-auto min-w-full min-h-full max-w-none object-cover opacity-40">
            <source src="https://www.pixeltermo.com.ar/videos/fondo_home_web.mp4" type="video/mp4">
        </video>
        <div class="absolute inset-0 overlay z-10"></div>
        
        <div class="relative z-20 text-center px-4">
            <div class="mb-6 inline-block">
                <img src="/assets/images/isologo-pixeltermo.webp">
            </div>
            <h1 class="text-6xl md:text-8xl font-black mb-4 tracking-tighter">PIXELTERMO</h1>
            <h2 class="text-2xl md:text-4xl font-light tracking-widest mb-2">AGENCIA <span class="font-bold text-gradient">360°</span></h2>
            <p class="text-xl md:text-2xl font-semibold mt-6 tracking-[0.2em] text-gray-300">MARKETING CON ALMA</p>
        </div>
        
        <!-- Flecha hacia abajo -->
        <a href="#stands" class="absolute bottom-10 z-20 animate-bounce text-white/50 hover:text-pixel-orange transition-colors">
            <i class="fa-solid fa-chevron-down text-3xl"></i>
        </a>
    </section>

    <!-- DISEÑO DE STANDS (Páginas 2 y 3) -->
    <section id="stands" class="py-24 bg-pixel-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black mb-4">Diseño de<span class="text-pixel-orange"> Stands</span></h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">El impacto digital se encuentra con la presencia física.</p>
			</div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-24">
                
                <div class="shadow-2xl shadow-pixel-orange/20">
                    <!-- Imagen de Stand Gigante (Cámara) -->
                    <img src="https://www.pixeltermo.com.ar/img/stands.gif" width="2732" height="1536" alt="" Stands" class="w-full h-auto object-cover img-hover-zoom aspect-[4/3]" />
                </div>
				<div>
                    <h3 class="text-3xl font-bold mb-6">15 años creando impacto</h3>
                    <ul class="space-y-4 text-gray-300 text-lg mb-8">
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-pixel-orange"></i> Armado y Arquitectura de Stands.</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-pixel-orange"></i> Gestión de Exposiciones.</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-pixel-orange"></i> Diseño Conceptual 3D.</li>
                    </ul>
					<div class="order-2 lg:order-1">
                    <p class="text-gray-300 text-lg mb-6 leading-relaxed">
                        Diseñamos y armamos estructuras que dominan cualquier exposición. Hacemos que tu marca no solo esté presente, sino que sea la protagonista.
                    </p>
                </div>
                    <div class="flex flex-wrap gap-4 items-center">
                        <span class="text-sm font-bold text-gray-500">CONFIAN EN NOSOTROS:</span>
                        <span class="px-3 py-1 bg-white text-black rounded font-bold text-xs">LA NACIÓN</span>
                        <span class="px-3 py-1 bg-white text-black rounded font-bold text-xs">Living</span>
						<span class="px-3 py-1 bg-white text-black rounded font-bold text-xs">EQA</span>
						<span class="px-3 py-1 bg-white text-black rounded font-bold text-xs">GREIF</span>
						<span class="px-3 py-1 bg-white text-black rounded font-bold text-xs">NOSSO</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CATERING (Página 4) -->
    <section id="catering" class="py-24 bg-pixel-gray">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-4xl md:text-5xl font-black mb-6">Servicio de <span class="text-pixel-orange">Catering</span></h2>
                    <h3 class="text-2xl font-bold mb-4">El Sabor de tu Marca.</h3>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">
                        Personalización total del menú y la puesta en escena. Entendemos que un evento es una experiencia sensorial completa. Ofrecemos servicios de catering que acompañan la identidad de tu empresa.
                    </p>
                </div>
                
                <!-- Grilla de 4 imágenes como en el PDF -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="overflow-hidden">
                        <img src="https://www.pixeltermo.com.ar/img/catering%204.png" alt="Postres" class="w-full h-48 object-cover img-hover-zoom">
                    </div>
                    <div class="overflow-hidden">
                        <img src="https://www.pixeltermo.com.ar/img/catering%203.png" alt="Mesa Dulce" class="w-full h-48 object-cover img-hover-zoom">
                    </div>
                    <div class="overflow-hidden">
                        <img src="https://www.pixeltermo.com.ar/img/catering%202.png" alt="Desayuno" class="w-full h-48 object-cover img-hover-zoom">
                    </div>
                    <div class="overflow-hidden">
                        <img src="https://www.pixeltermo.com.ar/img/catering%201.png" alt="Sandwiches" class="w-full h-48 object-cover img-hover-zoom">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MERCHANDISING (Página 5) -->
    <section id="merch" class="py-24 bg-pixel-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1 relative overflow-hidden group">
                    <img src="https://www.pixeltermo.com.ar/img/merch1.gif" alt="Merchandising" class="w-full h-auto object-cover img-hover-zoom aspect-square md:aspect-[4/3]">
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="flex gap-6">
                       </div>
                    </div>
                </div>
                <div class="order-1 lg:order-2">
                    <h2 class="text-4xl md:text-5xl font-black mb-6">Merchandising <span class="text-pixel-orange">& Regalos</span> Personalizados</h2>
                    <h3 class="text-2xl font-bold mb-4">Tu marca, presente</h3>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">
                        Que tu marca los acompañe siempre. Desarrollamos regalos corporativos y piezas premium con la identidad de tu marca.
                        Desde tecnología hasta los clásicos de toda la vida, le ponemos alma a cada detalle.
                    </p>
                    <div class="flex flex-wrap gap-4 mt-8">
                        <span class="text-sm font-bold text-gray-500">CONFIAN EN NOSOTROS:</span>
                        <span class="px-4 py-2 border border-white/20 rounded font-bold text-sm">AWS</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- EVENTOS (Páginas 6 y 7) -->
     <section id="eventos" class="relative mt32 bg-fixed bg-center bg-cover overflow-hidden py-24"  style="background-video: url('https://www.pixeltermo.com.ar/videos/eventos.mp4=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
	<video autoplay loop muted playsinline class="absolute z-0 w-auto min-w-full min-h-full max-w-none object-cover opacity-40">
            <source src="https://www.pixeltermo.com.ar/videos/eventos.mp4" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-black/70"></div> <!-- Overlay oscuro -->
        <div class="relative z-10 max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-5xl md:text-7xl font-black mb-6 text-pixel-orange">Eventos</h2>
            <h3 class="text-3xl md:text-4xl font-bold mb-8 text-white">Experiencias de marca que dejan huella.</h3>
            
            <div class="bg-pixel-dark/80 backdrop-blur-sm p-8 md:p-12 rounded-2xl border border-white/10">
                <p class="text-xl md:text-2xl text-gray-200 mb-6 font-light">
                    Tus eventos, con nuestra impronta.
                </p>
                <p class="text-lg md:text-xl text-gray-300 mb-6 leading-relaxed">
                    Creamos experiencias inolvidables diseñadas a la medida de lo que buscás. 
                    Porque si es a medida, se nota; <span class="font-bold text-pixel-orange">y si tiene alma, no se olvida.</span>
                </p>
                <p class="text-lg text-gray-400 italic">
                    Nos adaptamos a tu necesidad para que el resultado sea, simplemente, inolvidable.
                </p>
            </div>
        </div>
	</section>
	<section id="eventos">
	</section>

    <!-- MUNDO DIGITAL & WEB (Página 8) -->
    <section id="digital" class="py-24 bg-pixel-gray">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black mb-4">Mundo <span class="text-pixel-orange">Digital</span></h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">Ayudamos a empresas y emprendedores a llegar a sus metas de negocios mediante el uso de la tecnología.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- WEB -->
                <div class="bg-pixel-dark p-8 rounded-2xl border border-white/5 hover:border-pixel-orange/50 transition-colors">
                    <i class="fa-solid fa-code text-4xl text-pixel-orange mb-6"></i>
                    <h3 class="text-2xl font-bold mb-4">Web</h3>
                    <ul class="text-gray-400 text-sm space-y-3">
                        <li>Instalación de WP y plugins.</li>
                        <li>WooCommerce / Carritos.</li>
                        <li>Desarrollo a medida.</li>
                        <li>Optimización de hosting.</li>
                    </ul>
                </div>
                
                <!-- RRSS -->
                <div class="bg-pixel-dark p-8 rounded-2xl border border-white/5 hover:border-pixel-orange/50 transition-colors">
                    <i class="fa-solid fa-hashtag text-4xl text-pixel-orange mb-6"></i>
                    <h3 class="text-2xl font-bold mb-4">RRSS</h3>
                    <ul class="text-gray-400 text-sm space-y-3">
                        <li>Social Media Specialist.</li>
                        <li>Gestión de comunidades.</li>
                        <li>Construcción de relaciones.</li>
                        <li>Moderación y atención.</li>
                    </ul>

                </div>

                <!-- SEO -->
                <div class="bg-pixel-dark p-8 rounded-2xl border border-white/5 hover:border-pixel-orange/50 transition-colors">
                    <i class="fa-solid fa-magnifying-glass-chart text-4xl text-pixel-orange mb-6"></i>
                    <h3 class="text-2xl font-bold mb-4">SEO</h3>
                    <ul class="text-gray-400 text-sm space-y-3">
                        <li>Posicionamiento orgánico.</li>
                        <li>Análisis de métricas.</li>
                        <li>Optimización de contenidos.</li>
                    </ul>
                </div>

                <!-- IA -->
                <div class="bg-pixel-dark p-8 rounded-2xl border border-white/5 hover:border-pixel-orange/50 transition-colors">
                    <i class="fa-solid fa-robot text-4xl text-pixel-orange mb-6"></i>
                    <h3 class="text-2xl font-bold mb-4">IA</h3>
                    <ul class="text-gray-400 text-sm space-y-3">
                        <li>AI Specialist.</li>
                        <li>Creación de campañas.</li>
                        <li>Interacción con leads.</li>
                        <li>Automatización inteligente.</li>
                    </ul>
                </div>
            </div>
            
            <!-- Banner tipo anuncio (Referencia al Combo de la Maga del PDF) -->
            <div class="mt-16 bg-gradient-to-r from-pixel-orange to-red-600 rounded-2xl p-8 flex flex-col md:flex-row items-center justify-between shadow-2xl">
                <div class="mb-6 md:mb-0">
                    <h4 class="text-3xl font-black text-white mb-2">Estrategias a Medida</h4>
                    <p class="text-white/90">Desde landing pages hasta tiendas completas. Soluciones integrales.</p>
                </div>
                <a href="#contacto" class="px-8 py-3 bg-white text-pixel-orange font-bold rounded-full hover:scale-105 transition-transform">
                    Solicitar Presupuesto
                </a>
            </div>
        </div>
    </section>

    <!-- CONTACTO (Página 9) -->
    <section id="contacto" class="py-32 bg-pixel-dark relative overflow-hidden">
        <!-- Decoración de fondo -->
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-pixel-orange opacity-10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-pixel-orange opacity-10 rounded-full blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-[15vw] md:text-[180px] font-black leading-none text-gradient mb-12 select-none">
                GRACIAS
            </h2>
            
            <h3 class="text-3xl font-bold mb-12">Hablemos:</h3>
            
            <div class="flex flex-col md:flex-row justify-center items-center gap-8 md:gap-16">
                <!-- WhatsApp -->
                <a href="https://wa.me/5491161503194" target="_blank" class="group flex flex-col items-center gap-4 hover:scale-110 transition-transform">
                    <div class="w-16 h-16 bg-[#25D366] rounded-full flex items-center justify-center shadow-lg shadow-[#25D366]/20">
                        <i class="fa-brands fa-whatsapp text-3xl text-white"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400 font-bold uppercase tracking-wider mb-1">Contacto WP</p>
                        <p class="text-xl font-semibold group-hover:text-pixel-orange transition-colors">+54 9 11 61503194</p>
                    </div>
                </a>

                <!-- Email -->
                <a href="/cdn-cgi/l/email-protection#5f363139301f2f36273a332b3a2d3230713c3032713e2d" class="group flex flex-col items-center gap-4 hover:scale-110 transition-transform">
                    <div class="w-16 h-16 bg-pixel-orange rounded-full flex items-center justify-center shadow-lg shadow-pixel-orange/20">
                        <i class="fa-regular fa-envelope text-3xl text-white"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400 font-bold uppercase tracking-wider mb-1">Mail</p>
                        <p class="text-xl font-semibold group-hover:text-pixel-orange transition-colors"><span class="__cf_email__" data-cfemail="89e0e7efe6c9f9e0f1ece5fdecfbe4e6a7eae6e4a7e8fb">[email&#160;protected]</span></p>
                    </div>
                </a>

                <!-- Instagram -->
                <a href="https://instagram.com/pixeltermo" target="_blank" class="group flex flex-col items-center gap-4 hover:scale-110 transition-transform">
                    <div class="w-16 h-16 bg-gradient-to-tr from-[#f09433] via-[#e6683c] to-[#bc1888] rounded-full flex items-center justify-center shadow-lg shadow-[#bc1888]/20">
                        <i class="fa-brands fa-instagram text-3xl text-white"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400 font-bold uppercase tracking-wider mb-1">Ig</p>
                        <p class="text-xl font-semibold group-hover:text-pixel-orange transition-colors">@pixeltermo</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#0a0a0a] py-8 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-gray-500 text-sm">
                &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear())</script> PIXELTERMO Agencia 360°. Todos los derechos reservados.
            </p>
        </div>
    </footer>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8c78df7c7c0f484497ecbca7046644da1771523124516" integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg==" data-cf-beacon='{"version":"2024.11.0","token":"5e03cda4db48467f877f8b7d37f9aeb3","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>
</html>
