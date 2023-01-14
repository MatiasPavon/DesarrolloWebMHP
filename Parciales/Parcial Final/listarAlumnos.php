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
    $n = $_GET['n'];
    $materia = $_GET['asignatura'];
    include("conexion.php");
    $sql= " SELECT * FROM alumnos WHERE materia = '$materia'";
    if (isset($_GET['orden'])) {
        $sql .= " ORDER BY " . $_GET['orden'];
    }
    $resultado = $conn->query($sql);
?>

<table border="1" cellspacing="0">
    <tr>
        <th>Imagen</th>
        <th>Nombres</th>
        <?php
        for($i=1; $i<=$n; $i++){ ?>
            <th>Cuadro <?php echo $i; ?></th>
        <?php } ?>
    </tr> 
    <?php
	while ($fila=$resultado->fetch_assoc()){ ?>
        <tr>
            <td><?php echo '<img src="images/' . $fila['fotografia']. '" alt="">';?></td>
            <td><?php echo $fila['nombres_apellidos'];?> </td>
            <?php for($i=0; $i<$n; $i++){ ?>
                <th><?php echo "&nbsp"; ?></th>
            <?php } ?>
    <?php } ?>
    </tr>
</table>
    
</body>
</html>

