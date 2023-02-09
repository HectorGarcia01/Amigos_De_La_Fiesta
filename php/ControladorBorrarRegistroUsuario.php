<?php
    require_once("Conexion.MySQL.php");

    //Se declaran las variables que almacenarán la info de los input
    //Para la tabla Usuario
    $DPI_Usuario_Borrar = $_POST["DPI_Borrar"];

    //Consulta y Verificacion para la tabla Feria
    $Consulta_Usuario = mysqli_query($conn, "SELECT* FROM Usuario WHERE DPI_Usuario = '$DPI_Usuario_Borrar'");
    $Verificar_Usuario = mysqli_num_rows($Consulta_Usuario);

    if($Verificar_Usuario == TRUE){
        $delate_usuario = "DELETE FROM Usuario WHERE DPI_Usuario = '$DPI_Usuario_Borrar'";
        //Verificamos si los datos fueron borrados de la tabla
        if($conn -> query($delate_usuario)===TRUE){
            ?> <script language = 'javascript'>
                alert("El registro se ha borrado correctamente");
                window.location = '/AMIGOS-DE-LA-FIESTA/php/VistaBorrarRegistroUsuario.php';
                </script> '; <?php
        }
        else{
            ?> <script language = 'javascript'>
                alert("Lo siento, ha ocurrido un error durante el proceso. Por favor intente de nuevo...");
                window.location = '/AMIGOS-DE-LA-FIESTA/php/VistaBorrarRegistroUsuario.php';
            </script> '; <?php
        }
    }
    else{
        ?> <script language = 'javascript'>
            alert("Lo siento, no hay ningun registro con ese DPI. Intente de nuevo...");
            window.location = '/AMIGOS-DE-LA-FIESTA/php/VistaBorrarRegistroUsuario.php';
        </script> '; <?php
    }
?>