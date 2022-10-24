<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
        setcookie('a',$_GET['num1'],0);
        setcookie('b',$_GET['num2'],0);
        ?>
        <li><a href="resultado.php?operacion=1">Sumar</a></li>
        <li><a href="resultado.php?operacion=2">Restar</a></li>
    </ul>
</body>
</html>