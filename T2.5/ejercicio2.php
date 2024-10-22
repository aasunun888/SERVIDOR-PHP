<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Ejercicio 2 - Tabla de alumnos con su edad
Dadas las siguientes tablas con nombre y edad de los alumnos de dos clases diferentes:
    Crea dos arrays independientes para guardar los datos de cada una de las tablas
anteriores y muestra por pantalla la información de ambas.
A continuación une ambas tablas en una sóla y muestra los datos de esta nueva
tabla.*/

 
    $AlumnosDePrimero = [
        "clase1" => [
            "Juan" => [21],
            "Maria" => [19],
            "Pedro" => [24],
            "Antonio" => [21],
            "Carmen" => [24],
            "Carlos" => [26],
            "Lucia" => [22]
        ]
       
    ];

    $AlumnosDeSegundo = [
        "clase2" =>[
            "Jaime" => [27],
            "Luisa" => [21],
            "Aitor" => [33],
            "Macarena" => [22],
            "Maria" => [27],
            "Pedro" => [28],
            "Juan" => [24]
        ]
       
    ];

    //Mostrar datos de primer array
    echo'<h2> Alumnos de la clase de primero </h2>';
    /* for( $i = 0; $i<count($AlumnosDePrimero["clase1"]);$i++){
        echo'Nombre: '. $AlumnosDePrimero["clase1"];
    } */
    echo'<pre>';
    var_dump($AlumnosDePrimero["clase1"]);
    echo'</pre>';

    //Mostrar datos de segundo array
    echo'<h2> Alumnos de la clase de segundo </h2>';
    echo'<pre>';
    var_dump($AlumnosDeSegundo["clase2"]);
    echo'</pre>';
    

    /*Unir tablas añadiendo la clase1 y la clase2 para evitar que nombres se dupliquen y pongan un valor que no corresponde*/

    $clases = [
        "AlumnosDePrimero" => [
        "clase1" => [
            "Juan" => [21],
            "Maria" => [19],
            "Pedro" => [24],
            "Antonio" => [21],
            "Carmen" => [24],
            "Carlos" => [26],
            "Lucia" => [22]
        ]
       
        ],

    "AlumnosDeSegundo" => [
        "clase2" =>[
            "Jaime" => [27],
            "Luisa" => [21],
            "Aitor" => [33],
            "Macarena" => [22],
            "Maria" => [27],
            "Pedro" => [28],
            "Juan" => [24]
        ]
       
    ]

    ];

    echo'<h2> TABLAS UNIDAS </h2>';
    echo'<pre>';
    var_dump($clases);
    echo'</pre>';



?>
</body>
</html>