<?php
    include("Operaciones.php");
    session_start();
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    $_SESSION["Operaciones"] = new operaciones($a, $b, $c);

?>

<meta http-equiv="refresh" content="3; url=menu.html">