<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Ejercicio 1 - Gestos de manos
Escriba un programa que muestre un emoji de un gesto de manos al azar, con diferentes tonos de piel. 
Las entidades numéricas para los distintos emoji son: 128070, 128071, 128072, 128073, 128074, 128075, 
128076, 128077, 128078, 128079, 128080, 128133, 128170, 128400, 128405, 128406, 128588, 128591, 129295, 
129304, 129305, 129306, 129307, 129308, 129310, 129311, 129330. Los tonos de color de piel se consiguen 
con los modificadores Fitzpatrick &#127995; &#127996; &#127997; &#127998; y &#127999;  Hay varias formas 
de combinar los modificadores Fitzpatrick con emojis. En este ejercicio aparecen las secuencias más simples, 
en las que el modificador se escribe a continuación del carácter del emoji.*/

    //Generar array de codigos 
    $valores = [128070, 128071, 128072, 128073, 128074, 128075, 128076, 128077, 128078, 128079, 128080, 128133, 128170, 128400, 128405, 128406, 128588, 128591, 129295, 129304, 129305, 129306, 129307, 129308, 129310, 129311, 129330];

    //Generar un random entre los colores  min: 127995 max:127999
    $color = rand(127995,127999);

    //En la variable $key guardamos con la funcion array_rand() una llave aleatoria del array de valores.
    $key = array_rand($valores);
    
    //El valor random seleccionado sera igual a el valor que se elija en el array con la llave random que habra tocado
    $valorRandom = $valores[$key];

    echo ' <h2>Emoji random y color</h2>

          <p> El emoji random es: &#' . $valorRandom .  'y con color random seria:  &#' . $valorRandom . ';&#' . $color . '.</p>';     

    ?>
</body>
</html>