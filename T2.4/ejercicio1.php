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
    /*Ejercicio 1 - Código de color
Escriba un programa que cada vez que se ejecute muestre un código de color RGB elegido
al azar. Un código de color puede tener el formato rgb(rojo, verde, azul), donde rojo, verde y
azul son números enteros entre 0 y 255.
    */

    $red = rand(0,max: 255);
    $blue = rand(0,max: 255);
    $green = rand(0,max: 255);

    echo'<style>
            .color{
        color: rgb(' . $red . ', .'.$green.', '.$blue.');
        }
        </style> 
            <h1 class="color">Color elegido</h1>'

    ?>


</body>
</html>