<?php
    $conn = new mysqli("localhost", "root", "", "biblioteca");

    if($conn->connect_error){
        echo "Error al conectar a la base de datos";
        exit();
    }
?>