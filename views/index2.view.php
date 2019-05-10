<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/statics/css/main.css">
    <!--<link href="<?= statics('main.css') ?>" rel="stylesheet" type="text/css">-->

    <title>Encuesta</title>

</head>

<body>
    <h2>Complete el siguiente formulario</h2>
    <form action="./controllers/index2.php" method="post">
        <fieldset>
            <legend>Datos Personales</legend>
            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre" required id="Nombre">
            <br>
            <label for="Nombre">Apellido</label>
            <input type="text" name="Apellido" required id="Apellido">
            <br>
            <label for="Mail">Email*</label>
            <input type="email" name="Mail" required id="Mail">
            <br>
        </fieldset>
        <fieldset>
            <legend>Lenguaje</legend>
            <input type="radio" name="lenguaje1" value="java" checked> Java
            <br>
            <input type="radio" name="lenguaje1" value="c"> C
            <br>
            <input type="radio" name="lenguaje1" value="python"> Python
            <?php 
        for($i=0;$i<sizeof($miVector);$i++){
         $buscarClase = $miVector[$i];   
        ?>
                <input type="radio" name="lenguaje1" value="<?php echo $buscarClase->getFecha()?>">
                <?php echo $buscarClase->getFecha()?>
                    <?php   
                    } ?>
                        <br>
                        <input type="radio" name="lenguaje1" value="">Other
                        <input type="text" name="other" />
        </fieldset>
        <br>
        <input type="submit" name='enviar' value="Enviar">
        <input type="reset" value="Limpiar">
    </form>
    <p class=>Haz clic<a href='view/index.view.php'> aquí </a> ver las estadisticas</p>;
</body>

</html>
