<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/app.js"></script>
    <title>Document</title>
</head>
<body>
    <?php
        include "conexion.php";
        $sql = "SELECT * FROM editoriales";
        $ejecutada = mysqli_query($conn, $sql);
    ?>
    <form action="javascript:ingresarLibro()" method="post">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" id="titulo">
        <label for="autor">Autor:</label>
        <input type="text" name="autor" id="autor">
        <br>
        <label for="editorial">Editorial:</label>
        <select name="editorial" id="editorial">
            <?php while($datos = mysqli_fetch_array($ejecutada)){
                    echo "<option value='".$datos['id']."'>".$datos['editorial']."</option>";
            } ?>
        </select>
        <label for="anio">Año: </label>
        <input type="text" name="anio" id="anio">
        <br>
        <label for="usuario">Usuario</label>
        <select name="usuario" id="usuario">
            <?php
                $sql = "SELECT * FROM usuarios";
                $ejecutada = mysqli_query($conn, $sql);
                while($datos = mysqli_fetch_array($ejecutada)){
                    echo "<option value='".$datos['id']."'>".$datos['usuario']."</option>";
                }
            ?>
        </select>
        <label for="carrera">Carrera</label>
        <select name="carrera" id="carrera">
            <?php
                $sql = "SELECT * FROM carreras";
                $ejecutada = mysqli_query($conn, $sql);
                while($datos = mysqli_fetch_array($ejecutada)){
                    echo "<option value='".$datos['id']."'>".$datos['carrera']."</option>";
                }
            ?>
        </select>
        <br>
        
        <input type="submit" value="Insertar">
    </form>
</body>
</html>