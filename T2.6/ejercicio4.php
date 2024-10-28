<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partida</title>
</head>

<body>
    <?php
    /*Ejercicio 3 - Partida de dados 

Escriba un programa que enfrente a dos jugadores tirando una serie de dados al azar entre 3 y 9 e indique el resultado. Los dados se comparan en orden (el primero con el primero, el segundo con el segundo, etc.) y gana el jugador que obtenga el número más alto.
Mostrar un resumen con cuántas veces ha ganado cada jugador y en conjunto qué jugador ha ganado.*/

    $cartas = [];

    $contadorCartasReps;

    ?>

    <h1>Eliminar valores repetidos</h1>

    <p>Actulice la pagina para mostrar una nueva partida de dados</p>

    <?php


    $veces = rand(5, 15);

    //Hacer bucle para cartas 
    for ($i = 0; $i < $veces; $i++) {

        array_push($cartas, rand(1, 10)); // genera un valor entero que entra en el array que le pasamos por parametro
    
    }

    //mensaje grupo de cartas completas
    echo' <h2>Entre estas ' . $veces . ' cartas corazones...</h2>';

    //Imprimir cartas completas
    foreach ($cartas as $key => $v) {
        switch ($v) { //HACER ESTO DEL 1 AL 10

            case 1: echo ''; break;

            case 2: echo ''; break;

            case 3: echo''; break;

            case 4: echo ''; break;

            case 5: echo''; break;

            case 6: echo''; break;

            case 7: echo ''; break;
            
            case 8: echo''; break;

            case 9: echo''; break;

            case 10: echo''; break;
        }
    }
    

    //Realizar array sin reps
    $cartasSinRep = [];

    

    //mostrar mensaje cambiado
    echo'hay ' . $contadorCartasReps . 'cartas corazones distintas';

    //Imprimir repetidas
    foreach ($jugador2 as $key => $v) {
        switch ($v) {
            case 1: //HACER ESTO DEL 1 AL 6
                echo '';
                break;

            case 2: echo ''; break;

            case 3: echo''; break;

            case 4: echo ''; break;

            case 5: echo''; break;

            case 6: echo''; break;
        }
    }


    //mostrar resultados

    

    ?>
 

</body>

</html>