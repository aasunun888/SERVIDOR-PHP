<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Ejercicio 1 - Tabla de multiplicar
Escribe un programa que cada vez que se ejecute genere un número entre 1 y 10 al azar y a continuación guarde en un array la tabla de multiplicar de dicho número. Saca también el valor mínimo y máximo del array generado.
NOTA: Para generar el array utiliza la función range.*/

$C_min = 1;
$C_max = 10;

    //Numero random entre el 1 y el 10
    $numRandom = rand($C_min,$C_max);

    //Realizamos el array con la funcion range()
    $tabla1 = range(0,$numRandom*10,$numRandom); 

    echo'<h2> Tabla del ' . $numRandom . '</h2>';

    //mostrar array 
   /*  echo'<ul> 
        <li> $numRandom x  </li>
    </ul>'; */
echo'<pre>';
var_dump($tabla1);
echo'</pre>';  

//valor maximo
 echo '<p> El maximo es: '. max($tabla1) . '</p>';

//valor minimo
 echo '<p> El minimo es: '. min($tabla1) . '</p>';
?>
</body>
</html>