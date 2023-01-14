<?php
    $conn = new mysqli("localhost", "root", "", "academica");

    if($conn->connect_errno){
        echo "Error al conectar a la base de datos";
        exit();
    }
?>