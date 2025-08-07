<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Experience</title>
    <link rel="stylesheet" href="views/css/style.css">
    <link rel="stylesheet" href="views/css/index.css">
</head>
<body>
    <div class="FondoImagen"></div>
    
    <header class="Encabezado">
        <div class="LogoContenedor">
            <div class="Empresa" id="logoMenu">
                <img src="views/img/fer.png" alt="Logo de la empresa">
            </div>
            <nav class="MenuDesplegable" id="menuDesplegable">
                <a href="#">Servicios</a>
                <a href="#">Nosotros</a>
                <a href="#">Contacto</a>
            </nav>
        </div>
        <nav class="MenuPrincipal">
            <a href="index.php" class="Activo">Inicio</a>
            <a href="pag/login.php" class="BotonAcceso">Acceder</a>
        </nav>
    </header>
    
    <main>
        <section class="Hero">
            <div class="ContenedorHero">
                <h1>Experiencia de Lujo Incomparable</h1>
                <p class="Subtitulo">Descubre un mundo de exclusividad y elegancia a tu alcance</p>
                <div class="BotonesHero">
                    <a href="Views/page/login.php" class="BotonPrimario">Iniciar Sesión</a>
                    <a href="Views/page/crear.php" class="BotonSecundario">Crear Cuenta</a>
                </div>
            </div>
        </section>
        
        <section class="Caracteristicas">
            <div class="ContenedorCaracteristicas">
                <h2>Nuestros Servicios Premium</h2>
                
                <div class="TarjetasCaracteristicas">
                    <div class="Tarjeta">
                        <div class="IconoTarjeta">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="m16 8-8 8"></path><path d="m8 8 8 8"></path></svg>
                        </div>
                        <h3>Exclusividad</h3>
                        <p>Acceso a eventos y servicios exclusivos diseñados para nuestros miembros más distinguidos.</p>
                    </div>
                    
                    <div class="Tarjeta">
                        <div class="IconoTarjeta">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></svg>
                        </div>
                        <h3>Personalización</h3>
                        <p>Servicios adaptados a tus preferencias y necesidades específicas para una experiencia única.</p>
                    </div>
                    
                    <div class="Tarjeta">
                        <div class="IconoTarjeta">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"></path></svg>
                        </div>
                        <h3>Seguridad</h3>
                        <p>Máxima protección y confidencialidad en todos nuestros servicios y transacciones.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="CTA">
            <div class="ContenedorCTA">
                <h2>Únete a Nuestra Comunidad Exclusiva</h2>
                <p>Descubre los beneficios de formar parte de nuestra selecta comunidad de miembros.</p>
                <a href="crear.php" class="BotonPrimario">Crear Cuenta</a>
            </div>
        </section>
    </main>
    
    <footer class="PiePagina">
        <div class="ContenedorPie">
            <div class="InfoEmpresa">
                <img src="../views/img/empresa.png" alt="Logo de la empresa" class="LogoPie">
                <p></p>
            </div>
            
            <div class="Enlaces">
                <div class="GrupoEnlaces">
                    <h4>Empresa</h4>
                    <a href="#">Sobre Nosotros</a>
                    <a href="#">Nuestro Equipo</a>
                    <a href="#">Testimonios</a>
                </div>
                
                <div class="GrupoEnlaces">
                    <h4>Servicios</h4>
                    <a href="#">Membresías</a>
                    <a href="#">Eventos Exclusivos</a>
                    <a href="#">Concierge</a>
                </div>
                
                <div class="GrupoEnlaces">
                    <h4>Legal</h4>
                    <a href="#">Términos de Servicio</a>
                    <a href="#">Política de Privacidad</a>
                    <a href="#">Contacto</a>
                </div>
            </div>
        </div>
        
        <div class="Derechos">
            <p>&copy; 2023 </p>
        </div>
    </footer>

    <script src="views/js/index.js"></script>
</body>
</html>