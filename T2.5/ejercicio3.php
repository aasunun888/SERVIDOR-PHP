<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $C_min= 1;
    $C_max= 6;
    $numRandom = [];
    /*Ejercicio 3 - Números aleatorios en array
    Escribe un programa que genere 6 números aleatorios de 1 al 6 y los guarde en un array.*/

    //Crear un bucle para que genere 6 numeros randoms
    for ($i = 0; $i < 6; $i++) {
        $numRandom [$i] = rand($C_min,$C_max);
    }

    //Mostrar el array
    echo'<pre>';
    var_dump($numRandom);
    echo'</pre>';  

   /* Una vez generado el array:*/


  /*Mostrar cuántas veces aparece cada uno de los valores, del 1 al 6, en el array
  generado.*/

//contabilizar numeros con la funcion array_counts_values la cual le pasas un array y asocia cada llave con sus valores por lo que contabiliza las llaves que tienen mismo valor y los devuelve.
$numRep = array_count_values($numRandom);

//mostrar numeros que se repiten 
echo "<h3>Números que se repiten: </h3>";
foreach ($numRep as $num => $cuenta) {
    if ($cuenta > 1) {
        echo $num . " (se repite " . $cuenta . " veces), ";
    }
}

echo'<br>';

   /* Obtener otro número al azar entre 1 y 6. Con ese número obtenido 
    comprobar si se encuentra en el array generado y en caso de que así sea mostrar todos los índices donde aparezca ese número.*/ 

//Generar random
$numeroAzar = rand($C_min,$C_max);

echo'<h3>Comprobar valor al azar </h3> ';
//Comprobar si numero azar esta dentro
for ($i = 0; $i < count($numRandom); $i++) {
    if($numRandom[$i] == $numeroAzar){
        echo 'El numero al azar elegido es el  ' . $numeroAzar . ' y aparece dentro en la posicion ' . $i . '<br>';
       
    }
}


/* Mostrar el array original ordenada de mayor a menor.*/
echo'<h3>Array ordenado </h3>';
// Ordenar array de mayor a menor con rsort(), funcion que ordena un array de mayor a menor
rsort($numRandom);
print_r($numRandom);

/* Mostrar el array sin valores duplicados y sin huecos en los índices.*/
 
//array_unique se utiliza esta funcion para obtener un array de valores no repetidos en el array que se le indique por parametro.
$arraySinRepetidos = array_values(array_unique($numRandom));

// Mostrar array sin duplicados y sin huecos en los índices
echo "<h3>Array unico</h3>";
print_r($arraySinRepetidos);
?>
</body>
</html>