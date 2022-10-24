<?php
session_start();
$n1=$_SESSION['a'];
$n2=$_SESSION['b'];
$ope=$_GET['operacion'];
if($ope==1){
    echo 'El resultado de la suma es: '.$n1+$n2;
}   
else{
    echo 'El resultado de la resta es: '.$n1-$n2;
}

?>