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
/*Ejercicio 3 - Números
Escriba un programa que muestre un número del cero al 9 al azar y escriba en letras el
valor obtenido.*/ 

    $numRandom = rand(0,9);

    echo'<h1>NUMERO RANDOM</h1>     El numero random es: ';
    if( $numRandom == 0){
        echo'cero';
    }else if($numRandom == 1){
        echo'uno';
    }else if($numRandom == 2){
        echo'dos';
    }else if($numRandom == 3){
        echo'tres';
    }else if($numRandom == 4){
        echo'cuatro';
    }else if($numRandom == 5){
        echo'cinco';
    }else if($numRandom == 6){
        echo'seis';
    }else if($numRandom == 7){
        echo'siete';
    }else if($numRandom == 8 ){
        echo'ocho';
    }else if($numRandom == 9){
        echo'nueve';
    }


    

    ?>
</body>
</html>