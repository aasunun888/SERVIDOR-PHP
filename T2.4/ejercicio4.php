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
/*Ejercicio 4 - Ciudades
Escriba un array de ocho ciudades de España. Elimina al azar una de ellas y muestra el
nuevo array de ciudades.*/

$ciudades = ['Sevilla','Malaga','Badajoz','Caceres','Merida','Almeria','Cordoba','Huelva'];

echo'<h3>Ciudades completas</h3>';
 var_dump( value: $ciudades );
 echo'<BR><BR> ';

 $indice = rand(0,count($ciudades) -1);

 echo 'Se elimina: '.$ciudades[$indice] ;

 unset($ciudades[$indice]);

 echo'<h3>Ciudades sin la eliminada </h3>';
 var_dump( value: $ciudades );


   
    

    ?>
   
</body>
</html>