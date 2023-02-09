<?php
    require_once("Conexion.MySQL.php");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Datos del Padrino y Apoderado</title>
        <link rel="stylesheet" href="/AMIGOS-DE-LA-FIESTA/css/Tablas.css">
    </head>
    <body>
        <div class="fondoIMG">
            <br><br><br>
            <table border="1" align="center">
                <caption class="titulos">DATOS DEL PADRINO</caption>
                <tr valign="center" align="center">
                    <td width="120px" height="30px">DNI Padrino</td>
                    <td width="160px">Nombre Padrino</td>
                    <td width="160px">Apellido Padrino</td>
                    <td width="160px">Edad Padrino</td>
                    <td width="160px">Sexo Padrino</td>
                    <td width="160px">Direccion Padrino</td>
                    <td width="160px">Telefono Padrino</td>
                </tr>
                <?php
                    $sqlP = mysqli_query($conn, "SELECT* FROM Padrino");

                    while($MostrarP = mysqli_fetch_array($sqlP)){
                ?>
                <tr valign="center" align="center">
                    <td height="30px"><?php echo $MostrarP['DNI_Padrino']?></td> 
                    <td><?php echo $MostrarP['Nombre_Padrino']?></td> 
                    <td><?php echo $MostrarP['Apellido_Padrino']?></td> 
                    <td><?php echo $MostrarP['Edad_Padrino']?></td> 
                    <td><?php echo $MostrarP['Sexo_Padrino']?></td> 
                    <td><?php echo $MostrarP['Direccion_Padrino']?></td> 
                    <td><?php echo $MostrarP['Telefono_Padrino']?></td> 
                </tr>
                <?php
                    }
                ?>
            </table>

            <br><br><br><br><br><br>
            <table border="1" align="center">
                <caption class="titulos">DATOS DEL APODERADO</caption>
                <tr valign="center" align="center">
                    <td width="120px" height="30px">DNI Apoderado</td>
                    <td width="160px">Nombre Apoderado</td>
                    <td width="160px">Apellido Apoderado</td>
                    <td width="160px">Edad Apoderado</td>
                    <td width="160px">Sexo Apoderado</td>
                    <td width="160px">Telefono Apoderado</td>
                    <td width="160px">Direccion Apoderado</td>
                </tr>
                <?php
                    $sqlA = mysqli_query($conn, "SELECT* FROM Apoderado");

                    while($MostrarA = mysqli_fetch_array($sqlA)){
                ?>
                <tr valign="center" align="center">
                    <td height="30px"><?php echo $MostrarA['DNI_Apoderado']?></td> 
                    <td><?php echo $MostrarA['Nombre_Apodrado']?></td> 
                    <td><?php echo $MostrarA['Apellido_Apoderado']?></td> 
                    <td><?php echo $MostrarA['Edad_Apoderado']?></td> 
                    <td><?php echo $MostrarA['Sexo_Apoderado']?></td> 
                    <td><?php echo $MostrarA['Telefono_Apoderado']?></td> 
                    <td><?php echo $MostrarA['Direccion_Apoderado']?></td> 
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