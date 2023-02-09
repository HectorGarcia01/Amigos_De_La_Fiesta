<?php
    require_once("Conexion.MySQL.php");

    $fechaActual = date("Ymd-His");
    $archivo_sql = 'Backup_Caliente_'.$fechaActual.'.sql';
    $direccion_sql = 'C:/xampp/htdocs/AMIGOS-DE-LA-FIESTA/BACKUP_CALIENTE/'.$archivo_sql;

    $dump = "mysqldump -h$servername -u$username -p$password --opt $dbname > $direccion_sql";
    
    system($dump, $output);

    $zip = new ZipArchive();

    $archivo_zip = 'Backup_Caliente_'.$fechaActual.'.zip';
    $direccion_zip = 'C:/xampp/htdocs/AMIGOS-DE-LA-FIESTA/BACKUP_CALIENTE/'.$archivo_zip;

    if($zip->open($direccion_zip, ZIPARCHIVE::CREATE) === TRUE){
        $zip->addFile($direccion_sql);
        $zip->close();
        unlink($direccion_sql);

        ?> <script language = 'javascript'>
            alert("El backup se ha creado con éxito...");
            window.location = '/AMIGOS-DE-LA-FIESTA/Perfil.html';
        </script> '; <?php
    }
    else{
        ?> <script language = 'javascript'>
            alert("Lo siento, ha ocurrido un error durante el proceso. Por favor intente de nuevo...");
            window.location = '/AMIGOS-DE-LA-FIESTA/Perfil.html';
        </script> '; <?php
    }
?>