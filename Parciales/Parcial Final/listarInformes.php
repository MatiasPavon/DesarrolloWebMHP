<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estiloz.css">
</head>
<body>
<?php 
    include("conexion.php");
    $materia = $_GET['asignatura'];
    $sql= " SELECT * FROM informes WHERE materia = '$materia'";
    if (isset($_GET['orden'])) {
        $sql .= " ORDER BY " . $_GET['orden'];
    }
    $resultado = $conn->query($sql);
?>



<table border="1" cellspacing="0">
    <tr>
        <th>Materia</th>
        <th>Mes</th>
        <th>Porcentaje</th>
    </tr> 
    <?php
	while ($fila=$resultado->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $fila['materia'];?> </td>
            <td><?php echo $fila['mes'];?> </td>
            <td><?php echo $fila['porcentaje'];?> </td>
    <?php } ?>
    </tr>
</table>
</body>
</html>
