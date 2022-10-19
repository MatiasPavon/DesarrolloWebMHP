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
    $n=$_GET['n'];
    include("funciones.php");
    echo "El fibonacci de ".$n."=".fibonacci($n)
    ?>
</body>
</html>