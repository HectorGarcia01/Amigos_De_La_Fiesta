<?php
    require_once("Conexion.MySQL.php");

    //Se declaran las variables que almacenarán la info de los input
    //Para la tabla Usuario
    $DPI_Usuario = $_POST["DPI_Usuario"];
    $Nombre_Usuario = $_POST["Nombre_Usuario"];
    $Apellido_Usuario = $_POST["Apellido_Usuario"];
    $FechaNac_Usuario = $_POST["Fecha_Nacimiento"];
    $Sexo_Usuario = $_POST["Sexo_Usuario"];
    $Telefono_Usuario = $_POST["Telefono_Usuario"];
    $Direccion_Usuario = $_POST["Direccion_Usuario"];
    $Correo_Usuario = $_POST["Correo_Usuario"];
    $Usuario = $_POST["Usuario"];
    $Contraseña = $_POST["Contraseña"];
    $ContraseñaRep = $_POST["RepContraseña"];
    $TipoUsuario = $_POST["TipoUsuario"];

    //Consulta y Verificacion para la tabla Feria
    $Consulta_Usuario = mysqli_query($conn, "SELECT* FROM Usuario WHERE DPI_Usuario = '$DPI_Usuario'");
    $Verificar_Usuario = mysqli_num_rows($Consulta_Usuario);
    $Consulta_Usuario2 = mysqli_query($conn, "SELECT* FROM Usuario WHERE Usuario = '$Usuario'");
    $Verificar_Usuario2 = mysqli_num_rows($Consulta_Usuario2);

    //Validar si la llave primaria está repetida o no
    if($Verificar_Usuario> 0){//en el caso que exista 
        ?> <script language = 'javascript'>
            alert("Lo siento, ya existe un dato con el mismo ID regitrado!!! Por favor intente de nuevo...");
            window.location = '/AMIGOS-DE-LA-FIESTA/RegistroUsuario.php';
            </script> '; <?php
    }
    else if($Verificar_Usuario2> 0){
        ?> <script language = 'javascript'>
        alert("Lo siento, ya existe ese nombre de usuario!!! Por favor intente ingresar otro...");
        window.location = '/AMIGOS-DE-LA-FIESTA/RegistroUsuario.php';
        </script> '; <?php
    }
    else{//en el caso que no exista insertamos datos
        //antes verificamos si ambas contraseñas coinciden
        if($Contraseña == $ContraseñaRep){//si coinciden verificamos si seleccionó tipo de usuario
            if($TipoUsuario == 'DBA' || $TipoUsuario == 'Usuario'){//si hay tipo de usuario insertamos datos
                //Para la tabla Usuario
                $insert_usuario = "INSERT INTO Usuario(
                    DPI_Usuario,
                    Nombre_Usuario,
                    Apellid_Usuario,
                    Fecha_NacimientoU,
                    Sexo_Usuario,
                    Telefono_Usuario,
                    Direccion_Usuario,
                    Correo_Usuario,
                    Usuario,
                    Contraseña,
                    Tipo_Usuario)
                VALUES(
                    '$DPI_Usuario',
                    '$Nombre_Usuario',
                    '$Apellido_Usuario',
                    '$FechaNac_Usuario',
                    '$Sexo_Usuario',
                    '$Telefono_Usuario',
                    '$Direccion_Usuario',
                    '$Correo_Usuario',
                    '$Usuario',
                    '$Contraseña',
                    '$TipoUsuario')";

                //Verificamos si los datos fueron insertados en ambas tablas
                if($conn -> query($insert_usuario)===TRUE){
                    ?> <script language = 'javascript'>
                        alert("Los registros se han guardado correctamente");
                        window.location = '/AMIGOS-DE-LA-FIESTA/loading2.html';
                        </script> '; <?php
                }
                else{
                    ?> <script language = 'javascript'>
                        alert("Lo siento, ha ocurrido un error durante el proceso. Por favor intente de nuevo...");
                        window.location = '/AMIGOS-DE-LA-FIESTA/RegistroUsuario.php';
                    </script> '; <?php
                }
            }
            else{
                ?> <script language = 'javascript'>
                    alert("Lo siento, no puede crear un usuario sin especificar sus privilegios!!!");
                    window.location = '/AMIGOS-DE-LA-FIESTA/RegistroUsuario.php';
                    </script> '; <?php
            }
        }
        else{
            ?> <script language = 'javascript'>
                alert("Lo siento, las contraseñas no coinciden. Por favor intente de nuevo...");
                window.location = '/AMIGOS-DE-LA-FIESTA/RegistroUsuario.php';
                </script> '; <?php
        }
    }
?>