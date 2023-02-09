<?php
    require_once("Conexion.MySQL.php");

    //Se declaran las variables que almacenarán la info de los input

    //Para la tabla Toro
    $ID_Toro = $_POST["ID_Toro"];
    $Nombre_Toro = $_POST["Nombre_Toro"];
    $Color_Toro = $_POST["Color_Toro"];
    $Orden_Toreado = $_POST["Orden_Toreado"];
    $Fecha_NacT = $_POST["Fecha_NacT"];
    $FK_Ganaderia = $_POST["FKNombre_Ganaderia"];
    $FKTorero = $_POST["FKNombre_Torero"];
    $FKApoderado = $_POST["FKNombre_Apoderado"];
    $FKPadrino = $_POST["FKNombre_Padrino"];

    //Consulta y Verificacion para la tabla Toro
    $Consulta_Toro = mysqli_query($conn, "SELECT* FROM Toro WHERE ID_Toro = '$ID_Toro'");
    $Verificar_Toro = mysqli_num_rows($Consulta_Toro);

    //Validar si la llave primaria está repetida o no 
    if($Verificar_Toro > 0){//en el caso que exista 
        ?> <script language = 'javascript'>
            alert("Lo siento, ya existe un dato con el mismo ID regitrado!!! Por favor intente de nuevo...");
            window.location = '/AMIGOS-DE-LA-FIESTA/RegistroToros2.php';
            </script> '; <?php
    }
    else{//en el caso que no exista insertamos datos
        //Para la tabla Toro
        $insert_toro = "INSERT INTO Toro(
            ID_Toro,
            Codigo_Ganaderia,
            DNI_Torero,
            DNI_Apoderado,
            DNI_Padrino,
            Nombre_Toro,
            Color_Toro,
            Orden_Toreado,
            Fecha_Nacimiento)
        VALUES(
            '$ID_Toro',
            '$FK_Ganaderia',
            '$FKTorero',
            '$FKApoderado',
            '$FKPadrino',
            '$Nombre_Toro',
            '$Color_Toro',
            '$Orden_Toreado',
            '$Fecha_NacT')";

        //Verificamos si los datos fueron insertados 
        if($conn -> query($insert_toro)===TRUE){
            ?> <script language = 'javascript'>
                alert("Los registros se han guardado correctamente");
                window.location = '/AMIGOS-DE-LA-FIESTA/loading.html';
                </script> '; <?php
        }
        else{
            ?> <script language = 'javascript'>
            alert("Lo siento, ha ocurrido un error durante el proceso. Por favor intente de nuevo...");
            //window.location = '/AMIGOS-DE-LA-FIESTA/RegistroToros2.php'
            </script> '; <?php
        }
    }
?>