<?php
$n1=$_COOKIE['a'];
$n2=$_COOKIE['b'];
$ope=$_GET['operacion'];
if($ope==1){
    echo 'El resultado de la suma es: '.$n1+$n2;
}   
else{
    echo 'El resultado de la resta es: '.$n1-$n2;
}

?>