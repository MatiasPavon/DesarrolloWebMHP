<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "conexion.php";
        $consulta = "SELECT * FROM libros INNER JOIN editoriales ON libros.ideditorial = editoriales.id INNER JOIN usuarios ON libros.idusuario = usuarios.id INNER JOIN carreras ON libros.idcarrera = carreras.id";
        $result = mysqli_query($conn, $consulta);
    ?>
    
    <table border="1">
        <tr>
            <th>Imagen</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Editorial</th>
            <th>Año</th>
            <th>Usuario</th>
            <th>Carrera</th>
        </tr>
    
        <?php while($fila = mysqli_fetch_array($result)){?>
            <tr>
                <td><img src="images/<?php echo $fila['imagen'];?>" alt=""></td>
                <td><?php echo $fila['titulo']; ?></td>
                <td><?php echo $fila['autor']; ?></td>
                <td><?php echo $fila['editorial']; ?></td>
                <td><?php echo $fila['anio']; ?></td>
                <td><?php echo $fila['usuario']; ?></td>
                <td><?php echo $fila['carrera']; ?></td>
            </tr>
        <?php } ?>        
    </table>
</body>
</html>