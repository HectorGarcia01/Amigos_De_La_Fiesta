<?php
    require_once("Conexion.MySQL.php");

    //Se declaran las variables que almacenarán la info de los input
    
    //Para la tabla Padrino
    $DNI_Padrino = $_POST["DNI_Padrino"];
    $Nombre_Padrino = $_POST["Nombre_Padrino"];
    $Apellido_Padrino= $_POST["Apellido_Padrino"];
    $Edad_Padrino = $_POST["Edad_Padrino"];
    $Sexo_Padrino = $_POST["Sexo_Padrino"];
    $Direccion_Padrino = $_POST["Direccion_Padrino"];
    $Telefono_Padrino = $_POST["Telefono_Padrino"];

    //Para la tabla Apoderado
    $DNI_Apoderado = $_POST["DNI_Apoderado"];
    $Nombre_Apoderado = $_POST["Nombre_Apoderado"];
    $Apellido_Apoderado = $_POST["Apellido_Apoderado"];
    $Edad_Apoderado = $_POST["Edad_Apoderado"];
    $Sexo_Apoderado = $_POST["Sexo_Apoderado"];
    $Telefono_Apoderado = $_POST["Telefono_Apoderado"];
    $Direccion_Apoderado = $_POST["Direccion_Apoderado"];

    //Consulta y Verificacion para la tabla Padrino
    $Consulta_Padrino = mysqli_query($conn, "SELECT* FROM Padrino WHERE DNI_Padrino = '$DNI_Padrino'");
    $Verificar_Padrino = mysqli_num_rows($Consulta_Padrino);

    //Consulta y Verificacion para la tabla Apoderado
    $Consulta_Apoderado = mysqli_query($conn, "SELECT* FROM Apoderado WHERE DNI_Apoderado = '$DNI_Apoderado'");
    $Verificar_Apoderado = mysqli_num_rows($Consulta_Apoderado);

    //Validar si la llave primaria está repetida o no para ambas tablas
    if($Verificar_Padrino > 0 || $Verificar_Apoderado > 0){//en el caso que exista 
        ?> <script language = 'javascript'>
            alert("Lo siento, ya existe una persona con el mismo ID regitrado!!! Por favor intente de nuevo...");
            window.location = '/AMIGOS-DE-LA-FIESTA/RegistroPadrino.php';
            </script> '; <?php
    }
    else{//en el caso que no exista insertamos datos
        //Para la tabla Padrino
        $insert_padrino = "INSERT INTO Padrino(
            DNI_Padrino,
            Nombre_Padrino,
            Apellido_Padrino,
            Edad_Padrino,
            Sexo_Padrino,
            Direccion_Padrino,
            Telefono_Padrino)
        VALUES(
            '$DNI_Padrino',
            '$Nombre_Padrino',
            '$Apellido_Padrino',
            $Edad_Padrino,
            '$Sexo_Padrino',
            '$Direccion_Padrino',
            '$Telefono_Padrino')";
        
        //Para la tabla Apoderado
        $insert_apoderado = "INSERT INTO Apoderado(
            DNI_Apoderado,
            Nombre_Apodrado,
            Apellido_Apoderado,
            Edad_Apoderado,
            Sexo_Apoderado,
            Telefono_Apoderado,
            Direccion_Apoderado)
        VALUES(
            '$DNI_Apoderado',
            '$Nombre_Apoderado',
            '$Apellido_Apoderado',
            $Edad_Apoderado,
            '$Sexo_Apoderado',
            '$Telefono_Apoderado',
            '$Direccion_Apoderado')";

        //Verificamos si los datos fueron insertados en ambas tablas
        if($conn -> query($insert_padrino)===TRUE && $conn -> query($insert_apoderado)===TRUE){
            ?> <script language = 'javascript'>
                alert("Los registros se han guardado correctamente");
                window.location = '/AMIGOS-DE-LA-FIESTA/RegistroTorero.php';
                </script> '; <?php
        }
        else{
            ?> <script language = 'javascript'>
            alert("Lo siento, ha ocurrido un error durante el proceso. Por favor intente de nuevo...");
            window.location = '/AMIGOS-DE-LA-FIESTA/RegistroPadrino.php';
            </script> '; <?php
        }
    }
?>