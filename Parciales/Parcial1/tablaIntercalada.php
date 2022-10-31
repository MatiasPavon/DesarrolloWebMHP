<link rel="stylesheet" href="estiloz.css">
<?php
    $col = $_POST["col"];
    $fil = $_POST["fil"];
?>


<h1>Tabla Resultante</h1>
<hr>

<table>
    <?php for($cont=1; $cont<$fil; $cont++){?>
        <tr>
            <?php for($aux=1; $aux<$col; $aux++){
                if($cont%2 == 0){
                    if($aux%2 == 0){
                            echo "<td class='amarillo'>De</td>";
                    } else { 
                            echo "<td class='blanco'>Mi</td>";
                    }
                } else {
                    if($cont%3 == 0) {
                        if($aux%2==0)
                        {
                            echo '<td class="blanco">Libertad</td>';
                        } 
                        else
                        {               
                            echo '<td class="verde">Sucre</td>';
                        }
                    } 
                    else 
                    {
                        if($aux%2==0)
                        {
                            echo '<td class="blanco">Cuna</td>';
                        } 
                        else
                        {               
                            echo '<td class="rojo">Viva</td>';
                        }
                    }
                }
            } ?>
        </tr>
    <?php } ?>
</table>
<div class="lista">
            <ul class="menuvertical">
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="ejercicio2.html">Pregunta 2</a></li>
                <li><a href="formularioIntercalada.html">Pregunta 3</a></li>
                <li><a href="votacion.html">Pregunta 4</a></li>
            </ul>
        </div>