<?php
    require_once("Conexion.MySQL.php");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Datos del Torero</title>
        <link rel="stylesheet" href="/AMIGOS-DE-LA-FIESTA/css/Tablas.css">
    </head>
    <body>
        <div class="fondoIMG">
            <br><br><br>
            <table border="1" align="center">
                <caption class="titulos">DATOS DEL TORERO</caption>
                <tr valign="center" align="center">
                    <td width="120px" height="30px">DNI Torero</td>
                    <td width="160px">DNI Apoderado</td>
                    <td width="160px">DNI Padrino</td>
                    <td width="160px">Nombre Torero</td>
                    <td width="160px">Apellido Torero</td>
                    <td width="160px">Apodo Torero</td>
                    <td width="160px">Edad Torero</td>
                    <td width="160px">Sexo Torero</td>
                    <td width="160px">Direccion Torero</td>
                    <td width="160px">Fecha Alternativa</td>
                    <td width="160px">Puerta Grande</td>
                </tr>
                <?php
                    $sqlT = mysqli_query($conn, "SELECT* FROM Torero");

                    while($MostrarT = mysqli_fetch_array($sqlT)){
                ?>
                <tr valign="center" align="center">
                    <td height="30px"><?php echo $MostrarT['DNI_Torero']?></td> 
                    <td><?php echo $MostrarT['DNI_Apoderado']?></td> 
                    <td><?php echo $MostrarT['DNI_Padrino']?></td> 
                    <td><?php echo $MostrarT['Nombre_Torero']?></td> 
                    <td><?php echo $MostrarT['Apellido_Torero']?></td>
                    <td><?php echo $MostrarT['Apodo_Torero']?></td> 
                    <td><?php echo $MostrarT['Edad_Torero']?></td> 
                    <td><?php echo $MostrarT['Sexo_Torero']?></td> 
                    <td><?php echo $MostrarT['Direccion_Torero']?></td> 
                    <td><?php echo $MostrarT['Fecha_Alternativa']?></td> 
                    <td><?php echo $MostrarT['Puerta_Grande']?></td>  
                </tr>
                <?php
                    }
                ?>
            </table>

            <br><br><br><br><br><br>
            <table border="1" align="center">
                <caption class="titulos">DATOS DEL REGALO</caption>
                <tr valign="center" align="center">
                    <td width="120px" height="30px">ID Regalo</td>
                    <td width="160px">DNI Torero</td>
                    <td width="160px">DNI Apoderado</td>
                    <td width="160px">DNI Padrino</td>
                    <td width="160px">Número de Orejas</td>
                    <td width="160px">Número de Rabos</td>
                </tr>
                <?php
                    $sqlR = mysqli_query($conn, "SELECT* FROM Regalo");

                    while($MostrarR = mysqli_fetch_array($sqlR)){
                ?>
                <tr valign="center" align="center">
                    <td height="30px"><?php echo $MostrarR['ID_Regalo']?></td> 
                    <td><?php echo $MostrarR['DNI_Torero']?></td> 
                    <td><?php echo $MostrarR['DNI_Apoderado']?></td> 
                    <td><?php echo $MostrarR['DNI_Padrino']?></td> 
                    <td><?php echo $MostrarR['No_Orejas']?></td> 
                    <td><?php echo $MostrarR['No_Rabos']?></td> 
                </tr>
                <?php
                    }
                ?>
            </table>

            <br><br><br><br><br><br>
            <table border="1" align="center">
                <caption class="titulos">DATOS DE LA CORRIDA</caption>
                <tr valign="center" align="center">
                    <td width="120px" height="30px">Número de Orden Corrida</td>
                    <td width="160px">ID Feria</td>
                    <td width="160px">DNI Torero</td>
                    <td width="160px">DNI Apoderado</td>
                    <td width="160px">DNI Padrino</td>
                    <td width="160px">ID Plaza</td>
                    <td width="160px">Cantidad Toreros</td>
                </tr>
                <?php
                    $sqlC = mysqli_query($conn, "SELECT* FROM Corrida");

                    while($MostrarC = mysqli_fetch_array($sqlC)){
                ?>
                <tr valign="center" align="center">
                    <td height="30px"><?php echo $MostrarC['No_Orden_Corrida']?></td> 
                    <td><?php echo $MostrarC['ID_Feria']?></td> 
                    <td><?php echo $MostrarC['DNI_Torero']?></td> 
                    <td><?php echo $MostrarC['DNI_Apoderado']?></td> 
                    <td><?php echo $MostrarC['DNI_Padrino']?></td> 
                    <td><?php echo $MostrarC['ID_Plaza']?></td> 
                    <td><?php echo $MostrarC['Cantidad_Toreros']?></td> 
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