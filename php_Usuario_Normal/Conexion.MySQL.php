<?php
    //conexion de MySQL
    $servername = "localhost";              //por defecto a menos que no use un servidor local
    $username = "root";                     //por defecto a menos que haya cambiado el usuario
    $password = "";                         //por defecto a menos que haya cambidado la contraseña
    $dbname = "ProyectoFinalBD1";           //nombre de la base de datos creada en MySQL (phpmyadmin)

    //creando la conexion
    $conn = new mysqli($servername, $username, $password, $dbname);
     
    //checando la conexion
    if($conn->connect_error){
         die("Ha ocurrido un error al conectar la base de datos");
    }
?>