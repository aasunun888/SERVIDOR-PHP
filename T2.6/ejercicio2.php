<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Ejercicio 2 - Negación de bits
Actualice la página para mostrar una secuencia aleatoria de bits y su complementaria.*/


    $bits = [];
    
   for ($i=0; $i < 10 ; $i++) { 

    array_push($bits ,rand(0,1)); // genera un valor entero que entra en el array que le pasamos por parametro

    }

    print_r($bits); 
    echo '<br>';

    //Darle la vuelta
    for ($x=0; $x < count($bits) ; $x++) { 
        if($bits[$x] == 0){
            $bits[$x] = 1;
        }else if($bits[$x] == 1){
            $bits[$x] = 0; 
        }
    }
    
     print_r($bits);

    ?>
</body>
</html>