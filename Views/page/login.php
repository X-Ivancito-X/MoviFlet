

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
<div class="FondoImagen"></div>
    <header class="Encabezado">
        <div class="LogoContenedor">
            <div class="Empresa" id="logoMenu">
                <img src="../views/img/fer.png" alt="Logo de la empresa">
            </div>
            <nav class="MenuDesplegable" id="menuDesplegable">
                <a href="#">Servicios</a>
                <a href="#">Nosotros</a>
                <a href="#">Contacto</a>
            </nav>
        </div>
        <nav class="Menu">
            <a href="../index.php">Volver</a>
        </nav>
    </header>
    
    <div class="ContenedorPrincipal">
        <div class="ContenedorLogin">
            <div class="FormularioLogin">
                <h1>Iniciar Sesión</h1>
                <form id="loginForm" method="post" action="">
                    <div class="GrupoFormulario">
                        <label for="usuario" class="Texto">Nombre de Usuario o Gmail:</label>
                        <input type="text" id="usuario" name="Usuario">
                        <div class="Error" id="usuario-error">Por favor ingresa tu nombre de usuario o gmail</div>
                    </div>
                    <div class="GrupoFormulario">
                        <label for="password" class="Texto">Contraseña:</label>
                        <input type="password" id="password" name="Contraseña">
                        <div class="Error" id="password-error">Por favor ingresa tu contraseña</div>
                    </div>
                    <div class="GrupoFormulario">
                        <button type="submit" name="Ingreso" value="Iniciar" class="BotonPrimario">Iniciar Sesión</button>
                    </div>
                    
                    <?php
                       include ("../../Controller/ConBD.php");
                       include("../../Model/LogIn/LogIn.php");
                    ?>
                    
                    <div class="GrupoFormulario">
                        <a href="crear.php" class="BotonSecundario">Crear Cuenta</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="../js/script.js"></script>
</body>
</html>