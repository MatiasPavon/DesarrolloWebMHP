<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $cantidad = $_GET['cantidad'];
    ?>

    <form action="javascript:resultado()">
        <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>" id="cantidad">
        <?php for ($i = 0; $i < $cantidad; $i++) { ?>
            <input type='text' name='numero<?php echo $i; ?>' id='numero<?php echo $i; ?>'>
        <?php } ?>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>