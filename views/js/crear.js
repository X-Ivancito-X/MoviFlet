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
    
    // Validación del formulario
    const crearForm = document.getElementById('crearForm');
    if (crearForm) {
        crearForm.addEventListener('submit', function(event) {
            let isValid = true;
            
            // Obtener todos los campos
            const nombre = document.getElementById('nombre');
            const apellido = document.getElementById('apellido');
            const dni = document.getElementById('dni');
            const correo = document.getElementById('correo');
            const telefono = document.getElementById('telefono');
            const direccion = document.getElementById('direccion');
            const licencia = document.getElementById('licencia');
            const fechaVencimiento = document.getElementById('fecha_vencimiento');
            const idTipo = document.getElementById('id_tipo');
            const usuario = document.getElementById('usuario');
            const password = document.getElementById('password');
            const confirmar = document.getElementById('confirmar');
            const terminos = document.getElementById('terminos');
            
            // Restablecer errores anteriores
            const errorElements = document.querySelectorAll('.Error');
            errorElements.forEach(el => {
                el.style.display = 'none';
            });
            
            const inputElements = document.querySelectorAll('input, select');
            inputElements.forEach(el => {
                el.classList.remove('ErrorEntrada');
            });
            
            // Validar nombre
            if (nombre.value.trim() === '') {
                document.getElementById('nombre-error').style.display = 'block';
                nombre.classList.add('ErrorEntrada');
                isValid = false;
            }
            
            // Validar apellido
            if (apellido.value.trim() === '') {
                document.getElementById('apellido-error').style.display = 'block';
                apellido.classList.add('ErrorEntrada');
                isValid = false;
            }
            
            // Validar DNI
            if (dni.value.trim() === '') {
                document.getElementById('dni-error').style.display = 'block';
                dni.classList.add('ErrorEntrada');
                isValid = false;
            }
            
            // Validar email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(correo.value.trim())) {
                document.getElementById('correo-error').style.display = 'block';
                correo.classList.add('ErrorEntrada');
                isValid = false;
            }
            
            // Validar teléfono
            if (telefono.value.trim() === '') {
                document.getElementById('telefono-error').style.display = 'block';
                telefono.classList.add('ErrorEntrada');
                isValid = false;
            }
            
            // Validar dirección
            if (direccion.value.trim() === '') {
                document.getElementById('direccion-error').style.display = 'block';
                direccion.classList.add('ErrorEntrada');
                isValid = false;
            }
            
            // Validar tipo de usuario
            if (idTipo.value === '') {
                document.getElementById('id_tipo-error').style.display = 'block';
                idTipo.classList.add('ErrorEntrada');
                isValid = false;
            }
            
            // Validar licencia (solo si el tipo de usuario es conductor)
            if (idTipo.value === '2' && licencia.files.length === 0) {
                document.getElementById('licencia-error').style.display = 'block';
                licencia.classList.add('ErrorEntrada');
                isValid = false;
            }
            
            // Validar fecha de vencimiento (solo si el tipo de usuario es conductor)
            if (idTipo.value === '2' && fechaVencimiento.value === '') {
                document.getElementById('fecha_vencimiento-error').style.display = 'block';
                fechaVencimiento.classList.add('ErrorEntrada');
                isValid = false;
            }
            
            // Validar usuario
            if (usuario.value.trim() === '') {
                document.getElementById('usuario-error').style.display = 'block';
                usuario.classList.add('ErrorEntrada');
                isValid = false;
            }
            
            // Validar contraseña
            if (password.value === '') {
                document.getElementById('password-error').style.display = 'block';
                password.classList.add('ErrorEntrada');
                isValid = false;
            }
            
            // Validar confirmación de contraseña
            if (password.value !== confirmar.value) {
                document.getElementById('confirmar-error').style.display = 'block';
                confirmar.classList.add('ErrorEntrada');
                isValid = false;
            }
            
            // Validar términos y condiciones
            if (!terminos.checked) {
                document.getElementById('terminos-error').style.display = 'block';
                isValid = false;
            }
            
            if (!isValid) {
                event.preventDefault();
            }
        });
        
        // Mostrar/ocultar campos según el tipo de usuario
        const idTipo = document.getElementById('id_tipo');
        const licenciaGroup = document.getElementById('licencia').closest('.GrupoFormulario');
        const fechaVencimientoGroup = document.getElementById('fecha_vencimiento').closest('.GrupoFormulario');
        
        // Ocultar campos de licencia inicialmente
        licenciaGroup.style.display = 'none';
        fechaVencimientoGroup.style.display = 'none';
        
        idTipo.addEventListener('change', function() {
            if (this.value === '2') { // Si es conductor
                licenciaGroup.style.display = 'block';
                fechaVencimientoGroup.style.display = 'block';
            } else {
                licenciaGroup.style.display = 'none';
                fechaVencimientoGroup.style.display = 'none';
            }
        });
    }

    // Añadir efectos de enfoque a los campos
    const inputs = document.querySelectorAll('input:not([type="checkbox"]):not([type="file"]), select');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('FocusGroup');
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.classList.remove('FocusGroup');
        });
    });
});