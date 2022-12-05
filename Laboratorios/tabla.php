<?php
    $filas = $_POST["filas"];
    $columnas = $_POST["columnas"];
?>
<style>
    th,td {
        padding: 10px;
    }
    .red {
        background-color: red;
        font-weight: bold;
    }
</style>

<table cellspacing="0" border="1">
    <?php $cantFilas = $filas; ?>
    <?php for($i = 1; $i <= $filas + 1; $i++){ ?>
        <tr>
            <?php $cantColumnas = $columnas; ?>
            <?php for($j = 1; $j <= $columnas; $j++){ ?>
                <?php if($i == $filas + 1) { ?>
                    <td class="red"><?php echo $cantColumnas; ?></td>
                <?php } else { ?>
                    <td> <?php echo $cantFilas*$cantColumnas; ?> </td>
                <?php }?>
                <?php $cantColumnas--; ?>
            <?php } ?>
            <td class="red"><?php echo $cantFilas; ?></td>
            <?php $cantFilas--; ?>
    <?php } ?>
    </tr>
</table>