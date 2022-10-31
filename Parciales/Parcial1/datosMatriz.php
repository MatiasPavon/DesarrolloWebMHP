<?php
    $tamañoN = $_GET['tamañoN'];
    $tamañoM = $_GET['tamañoM'];
    setcookie('tamN', $tamañoN, time() + 3600);
    setcookie('tamM', $tamañoM, time() + 3600);
?>

<form action="calcularMatriz.php" method="get">
    <table>
        <?php

            for($cont=0; $cont<$tamañoN; $cont++){
                echo "<tr>";
                for($aux=0; $aux<$tamañoM; $aux++){
                    echo "<td><input type='number' name='vector[$cont][$aux]'></td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
    <input type="submit" value="Calcular">
</form>