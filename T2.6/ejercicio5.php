<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partida</title>
</head>

<body>
    <?php
    /*Ejercicio 5 - Eliminar dado

Escriba un programa:

Que muestre primero una tirada de un número de dados al azar (número de tiradas aleatorio: mínimo 1, máximo 10).
Que muestre a continuación un dado al azar.
Que muestre de nuevo la tirada inicial, pero habiendo eliminado de la tirada los
dados que coincidan con el dado suelto (si hay alguno).*/

   $C_min = 1;
   $C_max = 10;

    $tiradaRandom = rand($C_min, $C_max);



    ?>

    <h1>Eliminar dado</h1>

    <p>Actulice la pagina para mostrar una nueva partida de dados</p>

    <?php


    //crear array de dados y valores random 

    $dados = [];

    //bucle para introducir dados aleatorios dentro del array
    for ($i = 0; $i < $tiradaRandom; $i ++) {
        array_push($dados, rand(1,6));
    }

    echo'<h2> Tirada de ' . $tiradaRandom . ' dados </h2>';
    imprimirDados($dados);
    
    

    echo'<h2> Dado a eliminar </h2>';

    //Imprimir dado que se eliminar, se selecciona un dado al azar del nuevo array.
    $dadosAlAzar=[];
    array_push($dadosAlAzar,rand(1,6));

    imprimirDados($dadosAlAzar);

    $dadoAlAzar = $dadosAlAzar[0]; //hacer conversion de array de un solo valor a valor unico, hago esto porque al tener que poner el tochaco para pintarlo me facilita hacerlo




    //mostrar dados restantes tras eliminar el dado, en caso de no haber no elimina ninguno
    //usamos funciones de array para realizarlo, con in_array vemos si existe ese valor dentro, si es asi, con array_filter buscaremos el valor dentro del array 
    //La funcion que se utiliza dentro del filter la uso para buscar dentro de la funcion $dados, el elemento $e por cada iteracion busca el valor $dadoAlAzar y devuelve el q es distinto
    //generando asi un array nuevo sin el numero que se busca
    if( in_array($dadoAlAzar,$dados)){
      $dadosNuevos = array_values(array_filter($dados, function ($e) use ($dadoAlAzar){
                                                                                return  $e !== $dadoAlAzar; }));

       }else{

       $dadosNuevos = $dados; //si no existe, se imprimen los mismos, como tengo fallos, no quiero volver a poner el tocho dentro del else

       }
    

    echo'<h2> Dados restantes  </h2>';
    imprimirDados($dadosNuevos);

  //Imprimir dados

  function imprimirDados($dados){
        foreach ($dados as $v) {
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
  }

  
  

    ?>
 

</body>

</html>