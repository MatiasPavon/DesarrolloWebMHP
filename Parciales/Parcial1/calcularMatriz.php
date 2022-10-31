<?php
        $tamN = $_COOKIE['tamN'];
        $tamM = $_COOKIE['tamM'];
        $vector = array();
        $colSum = 0;
        $filSum = 0;

        for ($cont=0; $cont < $tamN; $cont++) { 
            for ($aux=0; $aux < $tamM; $aux++) { 
                $vector[$cont][$aux] = $_POST["vector"][$cont][$aux];
            }
        }


        echo "<h1>Suma</h1>";

        for ($cont=0; $cont < $tamN; $cont++) { 
            for ($aux=0; $aux < $tamM; $aux++) { 
                $filSum += $vector[$cont][$aux];
            }
            echo "Fila $cont es: $filSum <br>";
        }


        for ($cont=0; $cont < $tamM; $cont++) { 
            for ($aux=0; $aux < $tamN; $aux++) { 
                $colSum += $vector[$aux][$cont];
            }
            echo "Columna $cont es: $colSum <br>";
        }


    ?>