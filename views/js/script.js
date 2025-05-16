// Funcionalidad para el menú desplegable del logo
document.addEventListener('DOMContentLoaded', function() {
    const logoMenu = document.getElementById('logoMenu');
    const menuDesplegable = document.getElementById('menuDesplegable');
    
    if (logoMenu && menuDesplegable) {
        // Mostrar/ocultar menú al hacer clic en el logo
        logoMenu.addEventListener('click', function(e) {
            e.stopPropagation(); // Evitar que el clic se propague al documento
            logoMenu.classList.toggle('Activo');
            menuDesplegable.classList.toggle('Mostrar');
        });
        
        // Cerrar menú al hacer clic fuera
        document.addEventListener('click', function(e) {
            if (!logoMenu.contains(e.target) && !menuDesplegable.contains(e.target)) {
                logoMenu.classList.remove('Activo');
                menuDesplegable.classList.remove('Mostrar');
            }
        });
        
        // Evitar que los clics dentro del menú desplegable cierren el menú
        menuDesplegable.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    }
    
    // Animación de aparición para las tarjetas
    const tarjetas = document.querySelectorAll('.Tarjeta');
    
    const observador = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });
    
    tarjetas.forEach(tarjeta => {
        tarjeta.style.opacity = 0;
        tarjeta.style.transform = 'translateY(20px)';
        tarjeta.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observador.observe(tarjeta);
    });
    
    // Animación para la sección CTA
    const cta = document.querySelector('.ContenedorCTA');
    if (cta) {
        cta.style.opacity = 0;
        cta.style.transform = 'translateY(20px)';
        cta.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
        
        const ctaObservador = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });
        
        ctaObservador.observe(cta);
    }
});