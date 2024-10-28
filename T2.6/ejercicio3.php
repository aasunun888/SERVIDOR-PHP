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

    $jugador1 = [];
    $jugador2 = [];





    ?>

    <h1>Partida de dados</h1>

    <p>Actulice la pagina para mostrar una nueva partida de dados</p>

    <?php

    $contadorJugador1 = 0;
    $contadorJugador2 = 0;
    $empate = 0;

    $veces = rand(3, 9);

    //BUCLE JUGADOR 1
    for ($i = 0; $i < $veces; $i++) {

        array_push($jugador1, rand(1, 6)); // genera un valor entero que entra en el array que le pasamos por parametro
    
    }

    //BUCLE JUGADOR 2
    for ($i = 0; $i < $veces; $i++) {

        array_push($jugador2, rand(1, 6)); // genera un valor entero que entra en el array que le pasamos por parametro
    
    }



    //Comparar resultados, si empatan ++, si gana uno ++
    for ($i = 0; $i < $veces; $i++) {

        if ($jugador1[$i] == $jugador2[$i]) {

            $empate++;

        } else if ($jugador1[$i] > $jugador2[$i]) {

            $contadorJugador1++;

        } else {

            $contadorJugador2++;

        }
    }

    echo'<h2> Jugador 1 </h2>';

    //Imprimir imagen jugador 1
    foreach ($jugador1 as $key => $v) {
        switch ($v) {
            case 1: //HACER ESTO DEL 1 AL 6
                echo '<?xml version="1.0" encoding="UTF-8" standalone="no"?>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                width="140" height="140" viewBox="-10 -10 140 140">
                <rect x="0" y="0" width="120" height="120" rx="10" ry="10"
                fill="#E0E0E0"  stroke="black" stroke-width="5" />
                <circle cx="60" cy="62" r="9" fill="white" />
                <circle cx="60" cy="60" r="9" fill="black" />
                </svg>';
                break;

            case 2: echo '<?xml version="1.0" encoding="UTF-8" standalone="no"?>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                    width="140" height="140" viewBox="-10 -10 140 140">
                    <rect x="0" y="0" width="120" height="120" rx="10" ry="10"
                    fill="#E0E0E0"  stroke="black" stroke-width="5" />
                    <circle cx="30" cy="32" r="9" fill="white" />
                    <circle cx="30" cy="30" r="9" fill="black" />
                    <circle cx="90" cy="92" r="9" fill="white" />
                    <circle cx="90" cy="90" r="9" fill="black" />
                    </svg>'; break;

            case 3: echo'<?xml version="1.0" encoding="UTF-8" standalone="no"?>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                    width="140" height="140" viewBox="-10 -10 140 140">
                    <rect x="0" y="0" width="120" height="120" rx="10" ry="10"
                    fill="#E0E0E0"  stroke="black" stroke-width="5" />
                    <circle cx="30" cy="32" r="9" fill="white" />
                    <circle cx="30" cy="30" r="9" fill="black" />
                    <circle cx="60" cy="62" r="9" fill="white" />
                    <circle cx="60" cy="60" r="9" fill="black" />
                    <circle cx="90" cy="92" r="9" fill="white" />
                    <circle cx="90" cy="90" r="9" fill="black" />
                    </svg>'; break;

            case 4: echo '<?xml version="1.0" encoding="UTF-8" standalone="no"?>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                    width="140" height="140" viewBox="-10 -10 140 140">
                    <rect x="0" y="0" width="120" height="120" rx="10" ry="10"
                    fill="#E0E0E0"  stroke="black" stroke-width="5" />
                    <circle cx="30" cy="32" r="9" fill="white" />
                    <circle cx="30" cy="30" r="9" fill="black" />
                    <circle cx="30" cy="92" r="9" fill="white" />
                    <circle cx="30" cy="90" r="9" fill="black" />
                    <circle cx="90" cy="32" r="9" fill="white" />
                    <circle cx="90" cy="30" r="9" fill="black" />
                    <circle cx="90" cy="92" r="9" fill="white" />
                    <circle cx="90" cy="90" r="9" fill="black" />
                    </svg>'; break;

            case 5: echo' <?xml version="1.0" encoding="UTF-8" standalone="no"?>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                    width="140" height="140" viewBox="-10 -10 140 140">
                    <rect x="0" y="0" width="120" height="120" rx="10" ry="10"
                    fill="#E0E0E0"  stroke="black" stroke-width="5" />
                    <circle cx="30" cy="32" r="9" fill="white" />
                    <circle cx="30" cy="30" r="9" fill="black" />

                    <circle cx="30" cy="92" r="9" fill="white" />
                    <circle cx="30" cy="90" r="9" fill="black" />

                    <circle cx="60" cy="62" r="9" fill="white" />
                    <circle cx="60" cy="60" r="9" fill="black" />

                    <circle cx="90" cy="32" r="9" fill="white" />
                    <circle cx="90" cy="30" r="9" fill="black" />

                    <circle cx="90" cy="92" r="9" fill="white" />
                    <circle cx="90" cy="90" r="9" fill="black" />
                    </svg>'; break;

            case 6: echo'<?xml version="1.0" encoding="UTF-8" standalone="no"?>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                    width="140" height="140" viewBox="-10 -10 140 140">
                    <rect x="0" y="0" width="120" height="120" rx="10" ry="10"
                    fill="#E0E0E0"  stroke="black" stroke-width="5" />
                    <circle cx="30" cy="32" r="9" fill="white" />
                    <circle cx="30" cy="30" r="9" fill="black" />

                    <circle cx="30" cy="62" r="9" fill="white" />
                    <circle cx="30" cy="60" r="9" fill="black" />

                    <circle cx="30" cy="92" r="9" fill="white" />
                    <circle cx="30" cy="90" r="9" fill="black" />

                    <circle cx="90" cy="32" r="9" fill="white" />
                    <circle cx="90" cy="30" r="9" fill="black" />

                    <circle cx="90" cy="62" r="9" fill="white" />
                    <circle cx="90" cy="60" r="9" fill="black" />

                    <circle cx="90" cy="92" r="9" fill="white" />
                    <circle cx="90" cy="90" r="9" fill="black" />
                    </svg>'; break;
        }
    }
    

    echo'<h2> Jugador 2 </h2>';

    //Imprimir imagen jugador 2
    foreach ($jugador2 as $key => $v) {
        switch ($v) {
            case 1: //HACER ESTO DEL 1 AL 6
                echo '<?xml version="1.0" encoding="UTF-8" standalone="no"?>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                width="140" height="140" viewBox="-10 -10 140 140">
                <rect x="0" y="0" width="120" height="120" rx="10" ry="10"
                fill="#E0E0E0"  stroke="black" stroke-width="5" />
                <circle cx="60" cy="62" r="9" fill="white" />
                <circle cx="60" cy="60" r="9" fill="black" />
                </svg>';
                break;

            case 2: echo '<?xml version="1.0" encoding="UTF-8" standalone="no"?>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                    width="140" height="140" viewBox="-10 -10 140 140">
                    <rect x="0" y="0" width="120" height="120" rx="10" ry="10"
                    fill="#E0E0E0"  stroke="black" stroke-width="5" />
                    <circle cx="30" cy="32" r="9" fill="white" />
                    <circle cx="30" cy="30" r="9" fill="black" />
                    <circle cx="90" cy="92" r="9" fill="white" />
                    <circle cx="90" cy="90" r="9" fill="black" />
                    </svg>'; break;

            case 3: echo'<?xml version="1.0" encoding="UTF-8" standalone="no"?>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                    width="140" height="140" viewBox="-10 -10 140 140">
                    <rect x="0" y="0" width="120" height="120" rx="10" ry="10"
                    fill="#E0E0E0"  stroke="black" stroke-width="5" />
                    <circle cx="30" cy="32" r="9" fill="white" />
                    <circle cx="30" cy="30" r="9" fill="black" />
                    <circle cx="60" cy="62" r="9" fill="white" />
                    <circle cx="60" cy="60" r="9" fill="black" />
                    <circle cx="90" cy="92" r="9" fill="white" />
                    <circle cx="90" cy="90" r="9" fill="black" />
                    </svg>'; break;

            case 4: echo '<?xml version="1.0" encoding="UTF-8" standalone="no"?>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                    width="140" height="140" viewBox="-10 -10 140 140">
                    <rect x="0" y="0" width="120" height="120" rx="10" ry="10"
                    fill="#E0E0E0"  stroke="black" stroke-width="5" />
                    <circle cx="30" cy="32" r="9" fill="white" />
                    <circle cx="30" cy="30" r="9" fill="black" />
                    <circle cx="30" cy="92" r="9" fill="white" />
                    <circle cx="30" cy="90" r="9" fill="black" />
                    <circle cx="90" cy="32" r="9" fill="white" />
                    <circle cx="90" cy="30" r="9" fill="black" />
                    <circle cx="90" cy="92" r="9" fill="white" />
                    <circle cx="90" cy="90" r="9" fill="black" />
                    </svg>'; break;

            case 5: echo' <?xml version="1.0" encoding="UTF-8" standalone="no"?>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                    width="140" height="140" viewBox="-10 -10 140 140">
                    <rect x="0" y="0" width="120" height="120" rx="10" ry="10"
                    fill="#E0E0E0"  stroke="black" stroke-width="5" />
                    <circle cx="30" cy="32" r="9" fill="white" />
                    <circle cx="30" cy="30" r="9" fill="black" />

                    <circle cx="30" cy="92" r="9" fill="white" />
                    <circle cx="30" cy="90" r="9" fill="black" />

                    <circle cx="60" cy="62" r="9" fill="white" />
                    <circle cx="60" cy="60" r="9" fill="black" />

                    <circle cx="90" cy="32" r="9" fill="white" />
                    <circle cx="90" cy="30" r="9" fill="black" />

                    <circle cx="90" cy="92" r="9" fill="white" />
                    <circle cx="90" cy="90" r="9" fill="black" />
                    </svg>'; break;

            case 6: echo'<?xml version="1.0" encoding="UTF-8" standalone="no"?>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                    width="140" height="140" viewBox="-10 -10 140 140">
                    <rect x="0" y="0" width="120" height="120" rx="10" ry="10"
                    fill="#E0E0E0"  stroke="black" stroke-width="5" />
                    <circle cx="30" cy="32" r="9" fill="white" />
                    <circle cx="30" cy="30" r="9" fill="black" />

                    <circle cx="30" cy="62" r="9" fill="white" />
                    <circle cx="30" cy="60" r="9" fill="black" />

                    <circle cx="30" cy="92" r="9" fill="white" />
                    <circle cx="30" cy="90" r="9" fill="black" />

                    <circle cx="90" cy="32" r="9" fill="white" />
                    <circle cx="90" cy="30" r="9" fill="black" />

                    <circle cx="90" cy="62" r="9" fill="white" />
                    <circle cx="90" cy="60" r="9" fill="black" />

                    <circle cx="90" cy="92" r="9" fill="white" />
                    <circle cx="90" cy="90" r="9" fill="black" />
                    </svg>'; break;
        }
    }


    //mostrar resultados

    echo '<h2> Resultados </h2>';
    echo 'El jugador 1 ha ganado <b>' . $contadorJugador1  .'</b> veces, el jugador 2 ha ganado <b>' . $contadorJugador2 . '</b> veces y los jugadores han empatado '. $empate . ' vez/veces <br> <br>';

    if($contadorJugador1>$contadorJugador2){
        echo 'En conjunto ha ganado el jugador <b>1</b>';
    }else if($contadorJugador2>$contadorJugador1){
        echo 'En conjunto ha ganado el jugador <b>2</b>';

    }else{
        echo'Han quedado empate en total.';
    }

    ?>
 

</body>

</html>