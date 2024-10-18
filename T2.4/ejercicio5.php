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
/*Ejercicio 5 - Países
Crea un array de claves valores de países con la siguiente información de cada país:
● Capital
● Población aproximada
● Idiomas principales de ese país
● ¿Si tiene costa?

A continuación, en un formulario, haz una página con un menú desplegable y un botón "Ver". En el desplegable, deben visualizarse los países, y al pulsar el botón ver, mostrar su información.*/

$españa = ['España','Madrid','Aproximadamente 48.8 millones de habitantes','Español','Tiene costa']; //METER TODOS EN UN SOLO ARRAY
$francia = ['Francia','Paris','Aproximadamente 64.9 millones de habitantes','Frances','Tiene costa'];
$alemania = ['Alemania','Berlin','Aproximadamente 83.4 millones de habitantes','Aleman, ingles','Tiene costa'];
$venezuela = ['Venezuela','Caracas','Aproximadamente 29.5 millones de habitantes','Español,  venezolano','Tiene costa'];
$argentina = ['Argentina','Buenos Aires','Aproximadamente 45.7 millones de habitantes','Español, argentino','Tiene costa'];

$paises = [$españa,$francia, $alemania, $venezuela, $argentina]; // ordenar el array como se solicite en clase, preguntar al profesor
    ?>

   <form action="" method="post">
    <label for="paises">
        <select name="info_paises">
        <option value=""></option>
            <option value="España" name="paisSelected">España</option> <!--Es asi como debe estar el name???-->
            <option value="Francia" name="paisSelected">Francia</option>
            <option value="Alemania" name="paisSelected">Alemania</option>
            <option value="Venezuela" name="paisSelected">Venezuela</option>
            <option value="Argentina" name="paisSelected">Argentina</option>
        </select>
        <input type="submit" value="Ver" name="ver">
    </label>
   </form>

   <?php
   //realizar switch correctamente
   if(isset($_POST['ver'])){

    $paisElegido = $_POST['info_paises'];

    switch($paisElegido){
        case 'España':
            var_dump($españa);
            break;
        case"Francia":
            var_dump($francia);
            break;
        case "Alemania":
            var_dump($alemania);
            break;
        case"Venezuela":
            var_dump($venezuela);
            break;
        case"Argentina":
            var_dump($argentina);

    }
   

    }
    ?>
</body>
</html>