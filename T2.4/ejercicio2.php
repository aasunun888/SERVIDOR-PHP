<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>
<body>
   
    <?php
/*Ejercicio 2 - Emoticono
Escriba un programa que cada vez que se ejecute muestre un emoticono elegido al azar
entre los caracteres Unicode 128512 y 128586.
Nota: Para mostrar el emoticono en HTML hay que anteponer &# al número*/ 

$emoticono = rand(128512,128586);

echo'<h1>Mostrar emoticono aleatorio</h1>
<span> Emotico elegido: '.'&#'.$emoticono.' </span>';
    ?>

</body>
</html>