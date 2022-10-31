
<body>
    <?php
        session_start();
    ?>
    <h1>Resultados</h1>

    <ol>
        <li>Candidato 1: <?php echo (isset($_SESSION["Candidato1"]))?($_SESSION["Candidato1"]) : "0"; ?></li>
        <li>Candidato 2: <?php echo (isset($_SESSION["Candidato2"]))?($_SESSION["Candidato2"]) : "0"; ?></li>
        <li>Candidato 3: <?php echo (isset($_SESSION["Candidato3"]))?($_SESSION["Candidato3"]) : "0"; ?></li>
        <li>Candidato 4: <?php echo (isset($_SESSION["Candidato4"]))?($_SESSION["Candidato4"]) : "0"; ?></li>
    </ol>
    
    <a href="votacion.html">Volver a votacion</a>
</body>
</html>