<?php
    require_once("Conexion.MySQL.php");

    //Se declaran las variables que almacenarán la info de los input
    //Para el cambio de contraseña
    $DPI = $_POST["DPI_Usuario"];
    $Usuario = $_POST["Usuario"];
    $ContraNueva = $_POST["ContraseñaNueva"];
    $RepContraNueva = $_POST["RepContraseñaNueva"];

    //Consulta y Verificacion para la tabla Usuario
    $Consulta_Usuario = mysqli_query($conn, "SELECT* FROM Usuario WHERE DPI_Usuario = '$DPI' && Usuario = '$Usuario'");
    $Verificar_Usuario = mysqli_num_rows($Consulta_Usuario);

    if($Verificar_Usuario == TRUE){
        if($ContraNueva == $RepContraNueva){
            $update_usuario = "UPDATE Usuario SET Contraseña = '$ContraNueva' WHERE DPI_Usuario = '$DPI' && Usuario = '$Usuario'";
            
            //Verificamos si los datos fueron insertados
            if($conn -> query($update_usuario)===TRUE){
                ?> <script language = 'javascript'>
                    alert("La contraseña se ha modificado con éxito.");
                    window.location = '/AMIGOS-DE-LA-FIESTA/loading2.html';
                    </script> '; <?php
            }
            else{
                ?> <script language = 'javascript'>
                    alert("Lo siento, ha ocurrido un error durante el proceso. Por favor intente de nuevo...");
                    window.location = '/AMIGOS-DE-LA-FIESTA/RegistroCambioContraseña.php';
                    </script> '; <?php
            }
        }
        else{
            ?> <script language = 'javascript'>
                alert("Lo siento, las contraseñas no coinciden. Por favor intente de nuevo...");
                window.location = '/AMIGOS-DE-LA-FIESTA/RegistroCambioContraseña.php';
                </script> '; <?php
        }
    }
    else{
        ?> <script language = 'javascript'>
            alert("Lo siento, DPI/Usuario incorrectos. Por favor intente de nuevo...");
            window.location = '/AMIGOS-DE-LA-FIESTA/RegistroCambioContraseña.php';
            </script> '; <?php
    }
?>