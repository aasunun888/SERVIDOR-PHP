<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
    /*Escribe un ejercicio en el que se definan 2 variables: $a y $b. A la variable a se le dará un valor numérico y la variable $b sea una referencia a la $a. Comprueba ambos valores, de forma que te muestre:

La variable $a vale: 22

La variable $b vale: 22

Elimina a continuación la referencia y muestra de nuevo el valor de las 2 variables.*/
    
        $a = 5;
        $b = $a;

        echo'La variable $a vale: ' . $a . '<br>';
        echo 'La variable $b vale: '. $b . '<br>';

        $b = null;

        echo'La variable $a vale: ' . $a . '<br>';
        echo 'La variable $b vale: '. $b . '<br>';
    ?>
</body>
</html>