<?php
    require_once("Conexion.MySQL.php");

    //Se declaran las variables que almacenarán la info de los input
    //Para la tabla Torero
    $DNI_Torero = $_POST["DNI_Torero"];
    $FKApoderado = $_POST["FKNombre_Apoderado"];
    $FKPadrino = $_POST["FKNombre_Padrino"];
    $Nombre_Torero = $_POST["Nombre_Torero"];
    $Apellido_Torero= $_POST["Apellido_Torero"];
    $Apodo_Torero = $_POST["Apodo_Torero"];
    $Edad_Torero = $_POST["Edad_Torero"];
    $Sexo_Torero = $_POST["Sexo_Torero"];
    $Direccion_Torero = $_POST["Direccion_Torero"];
    $FechaA_Torero = $_POST["FechaA_Torero"];
    $PuertaG_Torero = $_POST["PuertaG_Torero"];

    //Consulta y Verificacion para la tabla Torero
    $Consulta_Torero = mysqli_query($conn, "SELECT* FROM Torero WHERE DNI_Torero = '$DNI_Torero'");
    $Verificar_Torero = mysqli_num_rows($Consulta_Torero);

    //Validar si la llave primaria está repetida o no
    if($Verificar_Torero > 0){//en el caso que exista 
        ?> <script language = 'javascript'>
            alert("Lo siento, ya existe una dato con el mismo ID regitrado!!! Por favor intente de nuevo...");
            window.location = '/AMIGOS-DE-LA-FIESTA/RegistroTorero.php';
            </script> '; <?php
    }
    else{//en el caso que no exista insertamos datos
        //Para la tabla Torero
        $insert_torero = "INSERT INTO Torero(
            DNI_Torero,
            DNI_Apoderado,
            DNI_Padrino,
            Nombre_Torero,
            Apellido_Torero,
            Apodo_Torero,
            Edad_Torero,
            Sexo_Torero,
            Direccion_Torero,
            Fecha_Alternativa,
            Puerta_Grande)
        VALUES(
            '$DNI_Torero',
            '$FKApoderado',
            '$FKPadrino',
            '$Nombre_Torero',
            '$Apellido_Torero',
            '$Apodo_Torero',
            $Edad_Torero,
            '$Sexo_Torero',
            '$Direccion_Torero',
            '$FechaA_Torero',
            '$PuertaG_Torero')";

        //Verificamos si los datos fueron insertados en ambas tablas
        if($conn -> query($insert_torero)===TRUE){
            ?> <script language = 'javascript'>
                alert("Los registros se han guardado correctamente");
                window.location = '/AMIGOS-DE-LA-FIESTA/RegistroTorero2.php';
                </script> '; <?php
        }
        else{
            ?> <script language = 'javascript'>
            alert("Lo siento, ha ocurrido un error durante el proceso. Por favor intente de nuevo...");
            window.location = '/AMIGOS-DE-LA-FIESTA/RegistroTorero.php';
            </script> '; <?php
        }
    }
?>