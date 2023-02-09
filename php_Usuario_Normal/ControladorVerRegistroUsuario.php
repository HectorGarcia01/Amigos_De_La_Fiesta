<?php
    require_once("Conexion.MySQL.php");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Datos del Usuario</title>
        <link rel="stylesheet" href="/AMIGOS-DE-LA-FIESTA/css/Tablas.css">
    </head>
    <body>
        <div class="fondoIMG">
            <br><br><br>
            <table border="1" align="center">
                <caption class="titulos">DATOS DEL USUARIO</caption>
                <tr valign="center" align="center">
                    <td width="120px" height="30px">DPI Usuario</td>
                    <td width="160px">Nombre Usuario</td>
                    <td width="160px">Apellido Usuario</td>
                    <td width="160px">Fecha Nacimiento</td>
                    <td width="160px">Sexo Usuario</td>
                    <td width="160px">Telefono Usuario</td>
                    <td width="160px">Direccion Usuario</td>
                    <td width="160px">Correo Usuario</td>
                    <td width="160px">Usuario</td>
                    <td width="160px">Contraseña</td>
                    <td width="160px">Tipo Usuario</td>
                </tr>
                <?php
                    $sqlU = mysqli_query($conn, "SELECT* FROM Usuario");

                    while($MostrarU = mysqli_fetch_array($sqlU)){
                        $ContraseñaEncriptada = md5('Contraseña');
                ?>
                <tr valign="center" align="center">
                    <td height="30px"><?php echo $MostrarU['DPI_Usuario']?></td> 
                    <td><?php echo $MostrarU['Nombre_Usuario']?></td> 
                    <td><?php echo $MostrarU['Apellid_Usuario']?></td> 
                    <td><?php echo $MostrarU['Fecha_NacimientoU']?></td> 
                    <td><?php echo $MostrarU['Sexo_Usuario']?></td>
                    <td><?php echo $MostrarU['Telefono_Usuario']?></td> 
                    <td><?php echo $MostrarU['Direccion_Usuario']?></td> 
                    <td><?php echo $MostrarU['Correo_Usuario']?></td> 
                    <td><?php echo $MostrarU['Usuario']?></td> 
                    <td><?php echo $ContraseñaEncriptada?></td> 
                    <td><?php echo $MostrarU['Tipo_Usuario']?></td>  
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