<?php
    if(isset($_POST['InicioSesion'])){
        require_once("Conexion.MySQL.php");

        //Se declaran las variables que almacenarán la info de los input

        //Para el login
        $UsuarioIngresado = $_POST["Usuario"];
        $ContraseñaIngresada = $_POST["Contraseña"];

        //Consulta y Verificacion para la tabla Usuario
        $Consulta_Usuario = mysqli_query($conn, "SELECT* FROM Usuario WHERE Usuario = '$UsuarioIngresado' && Contraseña = '$ContraseñaIngresada'");
        $Verificar_Usuario = mysqli_num_rows($Consulta_Usuario);

        if($Verificar_Usuario == TRUE){
            while($DatosUsuario = mysqli_fetch_array($Consulta_Usuario)){
                echo '<script language="javascript">alert("Iniciando sesión como: '.$DatosUsuario['Nombre_Usuario'].'");</script>';
                if($DatosUsuario['Tipo_Usuario'] == 'DBA'){
                    ?> <script language = 'javascript'>
                        window.location = '/AMIGOS-DE-LA-FIESTA/Perfil.html';
                        </script> '; <?php
                }
                else{
                    ?> <script language = 'javascript'>
                        window.location = '/AMIGOS-DE-LA-FIESTA/Perfil2.html';
                        </script> '; <?php
                }
            }
        }
        else{
            ?> <script language = 'javascript'>
            alert("Lo siento, usuario/contraseña incorrectos. Por favor intente de nuevo...");
            window.location = '/AMIGOS-DE-LA-FIESTA/index.html';
            </script> '; <?php
        }
    }
?>