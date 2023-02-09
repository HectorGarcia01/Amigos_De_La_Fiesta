<?php
    require_once("Conexion.MySQL.php");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Datos del Toro</title>
        <link rel="stylesheet" href="/AMIGOS-DE-LA-FIESTA/css/Tablas.css">
    </head>
    <body>
        <div class="fondoIMG">
            <br><br><br>
            <table border="1" align="center">
                <caption class="titulos">DATOS DE LA GANADERÍA</caption>
                <tr valign="center" align="center">
                    <td width="120px" height="30px">Codigo Ganadería</td>
                    <td width="160px">Nombre Ganadería</td>
                    <td width="160px">Localidad Ganadería</td>
                    <td width="160px">Procedencia Ganadería</td>
                    <td width="160px">Fecha Creacion Ganadería</td>
                </tr>
                <?php
                    $sqlG = mysqli_query($conn, "SELECT* FROM Ganaderia");

                    while($MostrarG = mysqli_fetch_array($sqlG)){
                ?>
                <tr valign="center" align="center">
                    <td height="30px"><?php echo $MostrarG['Codigo_Ganaderia']?></td> 
                    <td><?php echo $MostrarG['Nombre_Ganaderia']?></td> 
                    <td><?php echo $MostrarG['Localidad_Ganaderia']?></td> 
                    <td><?php echo $MostrarG['Procedencia_Ganaderia']?></td> 
                    <td><?php echo $MostrarG['Fecha_Creacion_Ganaderia']?></td> 
                </tr>
                <?php
                    }
                ?>
            </table>

            <br><br><br><br><br><br>
            <table border="1" align="center">
                <caption class="titulos">DATOS DEL TORO</caption>
                <tr valign="center" align="center">
                    <td width="120px" height="30px">ID Toro</td>
                    <td width="160px">Codigo Ganaderia</td>
                    <td width="160px">DNI Torero</td>
                    <td width="160px">DNI Apoderado</td>
                    <td width="160px">DNI Padrino</td>
                    <td width="160px">Nombre Toro</td>
                    <td width="160px">Color Toro</td>
                    <td width="160px">Orden Toreado</td>
                    <td width="160px">Fecha Nacimiento</td>
                </tr>
                <?php
                    $sqlT = mysqli_query($conn, "SELECT* FROM Toro");

                    while($MostrarT = mysqli_fetch_array($sqlT)){
                ?>
                <tr valign="center" align="center">
                    <td height="30px"><?php echo $MostrarT['ID_Toro']?></td> 
                    <td><?php echo $MostrarT['Codigo_Ganaderia']?></td> 
                    <td><?php echo $MostrarT['DNI_Torero']?></td> 
                    <td><?php echo $MostrarT['DNI_Apoderado']?></td> 
                    <td><?php echo $MostrarT['DNI_Padrino']?></td> 
                    <td><?php echo $MostrarT['Nombre_Toro']?></td> 
                    <td><?php echo $MostrarT['Color_Toro']?></td> 
                    <td><?php echo $MostrarT['Orden_Toreado']?></td> 
                    <td><?php echo $MostrarT['Fecha_Nacimiento']?></td> 
                </tr>
                <?php
                    }
                ?>
            </table>
            <div class="botones">
                <a class="button" href="/AMIGOS-DE-LA-FIESTA/VerRegistros.html">Regresar</a>
            </div>
        </div>
    </body>
</html>