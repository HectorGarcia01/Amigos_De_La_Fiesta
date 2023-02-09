<?php
    require_once("Conexion.MySQL.php");

    //Se declaran las variables que almacenarán la info de los input
    
    //Para la tabla Ganaderia
    $Codigo_Ganaderia = $_POST["Codigo_Ganaderia"];
    $Nombre_Ganaderia = $_POST["Nombre_Ganaderia"];
    $Localidad_Ganaderia = $_POST["Localidad_Ganaderia"];
    $Procedencia_Ganaderia = $_POST["Procedencia_Ganaderia"];
    $Fecha_FundacionG = $_POST["Fecha_FundacionG"];

    //Consulta y Verificacion para la tabla Ganaderia
    $Consulta_Ganaderia = mysqli_query($conn, "SELECT* FROM Ganaderia WHERE Codigo_Ganaderia = '$Codigo_Ganaderia'");
    $Verificar_Ganaderia = mysqli_num_rows($Consulta_Ganaderia);

    //Validar si la llave primaria está repetida o no
    if($Verificar_Ganaderia > 0){//en el caso que exista 
        ?> <script language = 'javascript'>
            alert("Lo siento, ya existe un dato con el mismo ID regitrado!!! Por favor intente de nuevo...");
            window.location = '/AMIGOS-DE-LA-FIESTA/RegistroToros.php';
            </script> '; <?php
    }
    else{//en el caso que no exista insertamos datos
        //Para la tabla Ganaderia
        $insert_ganaderia = "INSERT INTO Ganaderia(
            Codigo_Ganaderia,
            Nombre_Ganaderia,
            Localidad_Ganaderia,
            Procedencia_Ganaderia,
            Fecha_Creacion_Ganaderia)
        VALUES(
            '$Codigo_Ganaderia',
            '$Nombre_Ganaderia',
            '$Localidad_Ganaderia',
            '$Procedencia_Ganaderia',
            '$Fecha_FundacionG')";

        //Verificamos si los datos fueron insertados
        if($conn -> query($insert_ganaderia)===TRUE){
            ?> <script language = 'javascript'>
                alert("Los registros se han guardado correctamente");
                window.location = '/AMIGOS-DE-LA-FIESTA/RegistroToros2.php';
                </script> '; <?php
        }
        else{
            ?> <script language = 'javascript'>
            alert("Lo siento, ha ocurrido un error durante el proceso. Por favor intente de nuevo...");
            window.location = '/AMIGOS-DE-LA-FIESTA/RegistroToros.php';
            </script> '; <?php
        }
    }
?>