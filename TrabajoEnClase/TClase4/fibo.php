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
$num = 0;  
$n1 = 0;  
$n2 = 1;  
echo "<h3>Serie fibonacci 12 primeros numeros: </h3>";  
echo "\n";  
echo $n1.' '.$n2.' ';  
while ($num < 10 )  
{  
    $n3 = $n2 + $n1;  
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1; 
} 
?> 
</body>
</html>