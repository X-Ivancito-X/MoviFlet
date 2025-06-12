<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/crear.css">
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <div class="FondoImagen"></div>
    
    <header class="Encabezado">
        <div class="LogoContenedor">
            <div class="Empresa" id="logoMenu">
                <img src="../views/img/empresa.png" alt="Logo de la empresa">
            </div>
            <nav class="MenuDesplegable" id="menuDesplegable">
                <a href="#">Servicios</a>
                <a href="#">Nosotros</a>
                <a href="#">Contacto</a>
            </nav>
        </div>
        <nav class="Menu">
            <a href="../index.php">Inicio</a>
            <a href="login.php">Iniciar Sesión</a>
        </nav>
    </header>
    
    <div class="ContenedorPrincipal">
        <div class="ContenedorCrear">
            <div class="FormularioCrear">
                <h1>Crear Cuenta</h1>
                <form id="crearForm" method="post" action="" enctype="multipart/form-data">
                    <div class="FilaFormulario">
                        <div class="GrupoFormulario">
                            <label for="nombre" class="Texto">Nombre</label>
                            <input type="text" id="nombre" name="Nombre" maxlength="50">
                            <div class="Error" id="nombre-error">Por favor ingresa tu nombre</div>
                        </div>
                        <div class="GrupoFormulario">
                            <label for="apellido" class="Texto">Apellido</label>
                            <input type="text" id="apellido" name="Apellido" maxlength="60">
                            <div class="Error" id="apellido-error">Por favor ingresa tu apellido</div>
                        </div>
                    </div>
                    
                    <div class="GrupoFormulario">
                        <label for="dni" class="Texto">DNI</label>
                        <input type="text" id="dni" name="DNI" maxlength="12">
                        <div class="Error" id="dni-error">Por favor ingresa un DNI válido</div>
                    </div>
                    
                    <div class="GrupoFormulario">
                        <label for="correo" class="Texto">Correo Electrónico</label>
                        <input type="email" id="correo" name="Email" maxlength="100">
                        <div class="Error" id="correo-error">Por favor ingresa un correo electrónico válido</div>
                    </div>
                    
                    <div class="FilaFormulario">
                        <div class="GrupoFormulario">
                            <label for="telefono" class="Texto">Teléfono Móvil</label>
                            <input type="tel" id="telefono" name="Telefono" maxlength="27">
                            <div class="Error" id="telefono-error">Por favor ingresa un número de teléfono válido</div>
                        </div>
                        <div class="GrupoFormulario">
                            <label for="id_tipo" class="Texto">Tipo de Usuario</label>
                            <select id="id_tipo" name="ID_TIPO">
                                <option value="">Selecciona un tipo</option>
                                <option value="1">Cliente</option>
                                <option value="2">Conductor</option>
                                <option value="3">Administrador</option>
                            </select>
                            <div class="Error" id="id_tipo-error">Por favor selecciona un tipo de usuario</div>
                        </div>
                    </div>
                    
                    <div class="GrupoFormulario">
                        <label for="direccion" class="Texto">Dirección</label>
                        <input type="text" id="direccion" name="Direccion" maxlength="200">
                        <div class="Error" id="direccion-error">Por favor ingresa tu dirección</div>
                    </div>
                    
                    <div class="GrupoFormulario">
                        <label for="licencia" class="Texto">Licencia De Conducir (Imagen)</label>
                        <input type="file" id="licencia" name="Licencia" accept="image/*" class="InputArchivo">
                        <div class="Error" id="licencia-error">Por favor sube una imagen de tu licencia</div>
                    </div>
                    
                    <div class="GrupoFormulario">
                        <label for="fecha_vencimiento" class="Texto">Fecha De Vencimiento De Licencia</label>
                        <input type="date" id="fecha_vencimiento" name="FechaVencimiento">
                        <div class="Error" id="fecha_vencimiento-error">Por favor ingresa la fecha de vencimiento</div>
                    </div>
                    
                    <div class="FilaFormulario">
                        <div class="GrupoFormulario">
                            <label for="usuario" class="Texto">Nombre de Usuario</label>
                            <input type="text" id="usuario" name="Usuario" maxlength="35">
                            <div class="Error" id="usuario-error">Por favor ingresa un nombre de usuario</div>
                        </div>
                        <div class="GrupoFormulario">
                            <label for="password" class="Texto">Contraseña</label>
                            <input type="password" id="password" name="Contraseña" maxlength="30">
                            <div class="Error" id="password-error">Por favor ingresa una contraseña</div>
                        </div>
                    </div>
                    
                    <div class="GrupoFormulario">
                        <label for="confirmar" class="Texto">Confirmar Contraseña</label>
                        <input type="password" id="confirmar" name="Confirmar" maxlength="30">
                        <div class="Error" id="confirmar-error">Las contraseñas no coinciden</div>
                    </div>
                    
                    <div class="GrupoFormulario CheckboxGroup">
                        <input type="checkbox" id="terminos" name="Terminos">
                        <label for="terminos" class="TextoCheck">Acepto los <a href="#" class="EnlaceTerminos">términos y condiciones</a></label>
                        <div class="Error" id="terminos-error">Debes aceptar los términos y condiciones</div>
                    </div>
                    
                    <div class="GrupoFormulario">
                        <button type="submit" name="Registro" value="Crear" class="BotonPrimario">Crear Cuenta</button>
                    </div>
                    
                    <?php
                    // Aquí iría la lógica de procesamiento del formulario
                    if (isset($_POST['Registro'])) {
                        // Procesar el formulario
                    }
                    ?>
                    
                    <div class="GrupoFormulario TextoCentrado">
                        <p class="TextoSecundario">¿Ya tienes una cuenta? <a href="login.php" class="EnlaceLogin">Iniciar Sesión</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="../js/crear.js"></script>
</body>
</html>