<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Ejercicio 4 - Diccionario de meses
    Escribe un programa php que muestre una página con un desplegable que muestre el "idioma origen" 
    y otro el "idioma destino". Al pulsar el botón traducir, debe mostrar Una tabla con dos columnas, 
    una con los meses en idioma de origen, y otra, traducido.*/


?>

<form action="" method="post">
<label for="idioma_origen">Idioma origen:</label>
        <select name="i_origen">
            <option value="" disabled></option>
            <option value="es">Español</option>
            <option value="en">Inglés</option>
            <option value="fr">Francés</option>
            <option value="al">Alemán</option>
        </select>
        <br>
        <label for="idioma_destino">Idioma destino:</label>
        <select name="i_destino">
            <option value="" disabled></option>
            <option value="es">Español</option>
            <option value="en">Inglés</option>
            <option value="fr">Francés</option>
            <option value="al">Alemán</option>
        </select>
        <br>
        <input type="submit" value="Traducir" name="enviar">
</form>

<?php
  //No entiendo que deben hacer el despegable si solo se muestra una cosa
  if(isset($_POST['enviar']) && $_SERVER['REQUEST_METHOD']=='POST'){


    //rellenamos un array donde se pone toda la traduccion de los meses en un idioma
    $meses = [
        'es' => ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
        'en' => ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        'fr' => ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"],
        'al' => ["Januar", "Februar", "März", "April", "Mai", "Juni", "Juli", "August", "September", "Oktober", "November", "Dezember"]
    ];

    //Coger valores del desplegable para saber que idiomas se van a mostrar
    $i_origen = $_POST['i_origen'];
    $i_destino = $_POST['i_destino'];

    //generar tabla, se utiliza htmlspecialchars por la documentacion dada en clase, nos da el nombre que le ponemos en el formulario al value
    echo "<table border='1'>";
        echo "<tr><th>Mes en " . htmlspecialchars($i_origen) . "</th><th>Mes en " . htmlspecialchars($i_destino) . "</th></tr>";

        //bucle for con cantidad de meses, podria ser constante pero no la he puesto porque los meses no pueden variar de numero si se quieren todos.
        //enlazamos del array padre que es $meses con el nombre que trae la variable $i_origen y $i_destinom, de esta manera en el array padre cogera los correspondientes
        //y empezara a pintar por orden, ya que ambos tienen la misma cantidad de meses, se utiliza el valor $i para ambos.
        for ($i = 0; $i < 12; $i++) {
            echo "<tr><td>" . $meses[$i_origen][$i] . "</td><td>" . $meses[$i_destino][$i] . "</td></tr>"; 
        }

        echo "</table>";

    
   }
?>
</body>
</html>