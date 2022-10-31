<?php 
    session_start();
    $cand=$_POST["cand"];
    (isset($_SESSION[$cand]))?$_SESSION[$cand]++:$_SESSION[$cand]=1;
?>

<p>Votaste por <?php echo $cand; ?>. Votos: <?php echo $_SESSION[$cand]; ?></p>

<meta http-equiv="refresh" content="3; url=votacion.html">