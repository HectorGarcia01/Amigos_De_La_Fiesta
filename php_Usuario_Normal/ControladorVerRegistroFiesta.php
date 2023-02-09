<?php
    require_once("Conexion.MySQL.php");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Datos de la Feria</title>
        <link rel="stylesheet" href="/AMIGOS-DE-LA-FIESTA/css/Tablas.css">
    </head>
    <body>
        <div class="fondoIMG">
            <br><br><br>
            <table border="1" align="center">
                <caption class="titulos">DATOS DE LA FERIA</caption>
                <tr valign="center" align="center">
                    <td width="120px" height="30px">ID Feria</td>
                    <td width="160px">Nombre Feria</td>
                    <td width="160px">Fecha Celebración</td>
                    <td width="160px">Número Corrida</td>
                    <td width="160px">Cantidad Toros</td>
                </tr>
                <?php
                    $sqlF = mysqli_query($conn, "SELECT* FROM Feria");

                    while($MostrarF = mysqli_fetch_array($sqlF)){
                ?>
                <tr valign="center" align="center">
                    <td height="30px"><?php echo $MostrarF['ID_Feria']?></td> 
                    <td><?php echo $MostrarF['Nombre_Feria']?></td> 
                    <td><?php echo $MostrarF['Fecha_Celebracion']?></td> 
                    <td><?php echo $MostrarF['No_Corrida']?></td> 
                    <td><?php echo $MostrarF['Cantidad_Toros']?></td> 
                </tr>
                <?php
                    }
                ?>
            </table>

            <br><br><br><br><br><br>
            <table border="1" align="center">
                <caption class="titulos">DATOS DE LA PLAZA</caption>
                <tr valign="center" align="center">
                    <td width="120px" height="30px">ID Plaza</td>
                    <td width="160px">Nombre Plaza</td>
                    <td width="160px">Localidad Plaza</td>
                    <td width="160px">Direccion Plaza</td>
                    <td width="160px">Aforo Plaza</td>
                </tr>
                <?php
                    $sqlP = mysqli_query($conn, "SELECT* FROM Plaza");

                    while($MostrarP = mysqli_fetch_array($sqlP)){
                ?>
                <tr valign="center" align="center">
                    <td height="30px"><?php echo $MostrarP['ID_Plaza']?></td> 
                    <td><?php echo $MostrarP['Nombre_Plaza']?></td> 
                    <td><?php echo $MostrarP['Localidad_Plaza']?></td> 
                    <td><?php echo $MostrarP['Direccion_Plaza']?></td> 
                    <td><?php echo $MostrarP['Aforo_Plaza']?></td> 
                </tr>
                <?php
                    }
                ?>
            </table>
            <div class="botones">
                <a class="button" href="/AMIGOS-DE-LA-FIESTA/Perfil2.html">Regresar</a>
            </div>
        </div>
    </body>
</html>