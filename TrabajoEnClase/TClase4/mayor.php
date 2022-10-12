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
    $a=4;
    $b=5;
    $c=6;

    if($a>$b && $a>$c){
        echo "Numero mayor=".$a;
    }
    else if($b>$a && $b>$c){
        echo "Numero mayor=".$b;
    }
    else if($c>$a && $c>$b){
        echo "Numero mayor=".$c;
    }

    ?>
</body>
</html>