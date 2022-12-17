<?php
    include "conexion.php";
    //$imagen = $_FILES['imagen']['name'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editorial = $_POST['editorial'];
    $anio = $_POST['anio'];
    $usuario = $_POST['usuario'];
    $carrera = $_POST['carrera'];
    $sql = "INSERT INTO libros (titulo, autor, ideditorial, anio, idusuario, idcarrera) VALUES ('$titulo', '$autor', '$editorial', '$anio', '$usuario', '$carrera')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Libro insertado correctamente";
    }else{
        echo "Error al insertar libro";
    }