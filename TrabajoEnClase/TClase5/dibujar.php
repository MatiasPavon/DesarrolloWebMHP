<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <?php
    $n=$_POST['n'];
    $m=$_POST['m'];
    $cont=0;
    for($i=0;$i<$n;$i++){
        echo "<tr>" ; 
        for($i=0;$i<$m;$i++){
            $cont++;
            echo "<td>$cont</td>";
        }
        
    }
    echo "</tr>"; 
    ?>
    </table>
</body>
</html>