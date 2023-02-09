<?php
    require_once("Conexion.MySQL.php");

    //Se declaran las variables que almacenarán la info de los input
    //Para la tabla Feria
    $ID_Feria = $_POST["ID_Feria"];
    $Nombre_Feria = $_POST["Nombre_Feria"];
    $Año_Cele = $_POST["Año_Cele"];
    $No_Corrida = $_POST["No_Corrida"];
    $Cant_Toros = $_POST["Cant_Toros"];

    //Para la tabla Plaza
    $ID_Plaza = $_POST["ID_Plaza"];
    $Nombre_Plaza = $_POST["Nombre_Plaza"];
    $Localidad_Plaza = $_POST["Localidad_Plaza"];
    $Direccion_Plaza = $_POST["Direccion_Plaza"];
    $Aforo_Plaza = $_POST["Aforo_Plaza"];

    //Consulta y Verificacion para la tabla Feria
    $Consulta_Feria = mysqli_query($conn, "SELECT* FROM Feria WHERE ID_Feria = '$ID_Feria'");
    $Verificar_Feria = mysqli_num_rows($Consulta_Feria);

    //Consulta y Verificacion para la tabla Plaza
    $Consulta_Plaza = mysqli_query($conn, "SELECT* FROM Plaza WHERE ID_Plaza = '$ID_Plaza'");
    $Verificar_Plaza = mysqli_num_rows($Consulta_Plaza);

    //Validar si la llave primaria está repetida o no para ambas tablas
    if($Verificar_Feria > 0 || $Verificar_Plaza > 0){//en el caso que exista 
        ?> <script language = 'javascript'>
            alert("Lo siento, ya existe un dato con el mismo ID regitrado!!! Por favor intente de nuevo...");
            window.location = '/AMIGOS-DE-LA-FIESTA/RegistroFiestas.php';
            </script> '; <?php
    }
    else{//en el caso que no exista insertamos datos
        //Para la tabla Feria
        $insert_feria = "INSERT INTO Feria(
            ID_Feria,
            Nombre_Feria,
            Fecha_Celebracion,
            No_Corrida,
            Cantidad_Toros)
        VALUES(
            '$ID_Feria',
            '$Nombre_Feria',
            '$Año_Cele',
            '$No_Corrida',
            $Cant_Toros)";

        //Para la tabla Plaza
        $insert_plaza = "INSERT INTO Plaza(
            ID_Plaza,
            Nombre_Plaza,
            Localidad_Plaza,
            Direccion_Plaza,
            Aforo_Plaza)
        VALUES(
            '$ID_Plaza',
            '$Nombre_Plaza',
            '$Localidad_Plaza',
            '$Direccion_Plaza',
            '$Aforo_Plaza')";

        //Verificamos si los datos fueron insertados en ambas tablas
        if($conn -> query($insert_feria)===TRUE && $conn -> query($insert_plaza)===TRUE){
            ?> <script language = 'javascript'>
                alert("Los registros se han guardado correctamente");
                window.location = '/AMIGOS-DE-LA-FIESTA/loading.html';
                </script> '; <?php
        }
        else{
            ?> <script language = 'javascript'>
            alert("Lo siento, ha ocurrido un error durante el proceso. Por favor intente de nuevo...");
            window.location = '/AMIGOS-DE-LA-FIESTA/RegistroFiestas.php';
            </script> '; <?php
        }
    }
?>