<?php
    include("../../Controller/ConBD.php");
    if(!empty($_POST["Ingresar"])){
        $Email = $_POST["EmailUsuario"];
        $Usuario = $_POST["EmailUsuario"];
        $Contraseña = $_POST["Contraseña"];

        $Login = "SELECT * FROM login where Email = ? or Usuario = ? and Contraseña = ?";

        $QueryPreparada = $ConBD->prepare($Login);
        $QueryPreparada->bind_param('sss', $Email, $Usuario, $Contraseña);
        $QueryPreparada->execute();
        $RST = $QueryPreparada->get_result();

        $Rows = mysqli_fetch_array($RST);

        if($Rows["Tipo"]== "Administrador_General"){
            header("location:../Pages/Personal.php");
        
        }
        if($Rows["Tipo"]== "Administrador"){
            header("location:../Pages/Personal.php");
        
        }
        if($Rows ["Tipo"]=="Cliente"){
            header("location:../../Index.php");

        }
        else{     
            echo '
            <script>
            alert("Usuario no encontrado, introduzca datos verificados");
            window.location = "../../Index.php";
            </script>';
            
        }
    }
