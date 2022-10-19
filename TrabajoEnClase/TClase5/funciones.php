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
    function fibonacci($n){
        if($n==1 or $n==2)
        return 1;
        else
        return fibonacci($n-1)+fibonacci($n-2);
    }
    ?>
</body>
</html>