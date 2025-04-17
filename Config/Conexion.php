<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "viento_del_norte";

    $conexion = new mysqli($host, $user, $pass, $db);

    if(!$conexion){
        echo 'conexion fallida';

    }

?>