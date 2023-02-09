<?php
    require_once("Conexion.MySQL.php");

    //Se declaran las variables que almacenarán la info de los input

    //Para la tabla Regalo
    $ID_Regalo = $_POST["ID_Regalo"];
    $NOreja_Regalo = $_POST["NOreja_Regalo"];
    $NRabo_Regalo = $_POST["NRabo_Regalo"];
    $FKTorero = $_POST["FKNombre_Torero"];
    $FKApoderado = $_POST["FKNombre_Apoderado"];
    $FKPadrino = $_POST["FKNombre_Padrino"];

    //Para la tabla Corrida
    $NOrden_Corrida = $_POST["NOrden_Corrida"];
    $Cantidad_Toreros = $_POST["Cantidad_Toreros"];
    $FKFeria = $_POST["FKNombre_Feria"];
    $FKTorero = $_POST["FKNombre_Torero"];
    $FKApoderado = $_POST["FKNombre_Apoderado"];
    $FKPadrino = $_POST["FKNombre_Padrino"];
    $FKPlaza = $_POST["FKNombre_Plaza"];

    //Consulta y Verificacion para la tabla Regalo
    $Consulta_Regalo = mysqli_query($conn, "SELECT* FROM Regalo WHERE ID_Regalo = '$ID_Regalo'");
    $Verificar_Regalo = mysqli_num_rows($Consulta_Regalo);

    //Consulta y Verificacion para la tabla Corrida
    $Consulta_Corrida = mysqli_query($conn, "SELECT* FROM Corrida WHERE No_Orden_Corrida = '$NOrden_Corrida'");
    $Verificar_Corrida = mysqli_num_rows($Consulta_Corrida);

    //Validar si la llave primaria está repetida o no para ambas tablas
    if($Verificar_Regalo > 0 || $Verificar_Corrida > 0){//en el caso que exista 
        ?> <script language = 'javascript'>
            alert("Lo siento, ya existe una dato con el mismo ID regitrado!!! Por favor intente de nuevo...");
            window.location = '/AMIGOS-DE-LA-FIESTA/RegistroTorero2.php';
            </script> '; <?php
    }
    else{//en el caso que no exista insertamos datos    
        //Para la tabla Regalo
        $insert_regalo = "INSERT INTO Regalo(
            ID_Regalo,
            DNI_Torero,
            DNI_Apoderado,
            DNI_Padrino,
            No_Orejas,
            No_Rabos)
        VALUES(
            '$ID_Regalo',
            '$FKTorero',
            '$FKApoderado',
            '$FKPadrino',
            $NOreja_Regalo,
            $NRabo_Regalo)";

        //Para la tabla Corrida
        $insert_corrida = "INSERT INTO Corrida(
            No_Orden_Corrida,
            ID_Feria,
            DNI_Torero,
            DNI_Apoderado,
            DNI_Padrino,
            ID_Plaza,
            Cantidad_Toreros)
        VALUES(
            '$NOrden_Corrida',
            '$FKFeria',
            '$FKTorero',
            '$FKApoderado',
            '$FKPadrino',
            '$FKPlaza',
            $Cantidad_Toreros)";

        //Verificamos si los datos fueron insertados en ambas tablas
        if($conn -> query($insert_regalo)===TRUE && $conn -> query($insert_corrida)===TRUE){
            ?> <script language = 'javascript'>
                alert("Los registros se han guardado correctamente");
                window.location = '/AMIGOS-DE-LA-FIESTA/loading.html';
                </script> '; <?php
        }
        else{
            ?> <script language = 'javascript'>
            alert("Lo siento, ha ocurrido un error durante el proceso. Por favor intente de nuevo...");
            window.location = '/AMIGOS-DE-LA-FIESTA/RegistroTorero2.php';
            </script> '; <?php
        }
    }
?>