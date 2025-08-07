<?php
    if(!empty($_POST["CrearCuenta"])){

        $Email = $_POST["Email"];
        $Usuario = $_POST["Usuario"];
        $Contraseña = $_POST["Contraseña"];

        $CrearCuenta = $ConBD ->query ("INSERT INTO login(Email, Usuario, Contraseña) VALUES ('$Email','$Usuario', '$Contraseña')");

        if($CrearCuenta){
            echo 'Cuenta creada con exito';
        }
        else{
            echo 'No se pudo crear la cuenta';
        }

        $Nombre = $_POST["Nombre"];
        $Apellido = $_POST["Apellio"];
        $DNI = $_POST["DNI"];
        $Celular = $_POST["Celular"];
        $Calle = $_POST["Calle"];
        $Altura = $_POST["Altura"];
        $CodPostal = $_POST["CodPostal"];
        $Localidad = $_POST["Localidad"];
        $Provincia = $_POST["Provincia"];
        $Licencia = $_POST["Licencia"];
        $FechaVencimiento = $_POST["FechaVencimiento"];

        $GuardarDatos = $ConBD ->query ("");

    }

?>
