<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="resultado.php" method="POST">
    <?php
    $n=$_POST['n'];
    for($i=0;$i<$n;$i++){ ?>
        <input type="text" name="sumando <?php echo $i ?>">
        <?php
    }
    ?>
    <input type="submit" value="<?php echo $n ?>">
    </form>
</body>
</html>