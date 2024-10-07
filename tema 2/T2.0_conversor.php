<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='css.css'>
    <title>conversor </title>
</head>
<body>
<?php
    //definir constantes
    define('C_EurPta',166.386);
    define('C_PtaEur', number_format(1/166.386,3));

    //mostrar valores por pantalla
    //echo '<p> Valor de la constante "C_EurPta": ' . C_EurPta . '</p>';
    //echo 'Valor de la constante "C_PtaEur": ' . C_PtaEur;
    ?>
   
<!-- Titulo de pagina-->
 <h1>Conversor PTS/EUR</h1>
<fieldset>
<form action="" method="post">
    <label for="valor">Cantidad: </label>
    <input type="number" name="valorCantidad">
<br>
    <input type="radio" name="tipoConversion" value="eurosToPesetas"> A euros
<br>
    <input type="radio" name="tipoConversion" value="pesetasToEuros">A pesetas
<br>
    <input type="submit" value="Convertir" name="Convertir">
 </form>

</fieldset>
 
<?php
    //Se comprueba llamada tipo "post"
    if(!empty( $_POST["valorCantidad"]) && !empty($_POST["tipoConversion"]) && isset($_POST["Convertir"])) {

        //leer el valor de las variables input
        $cantidad = $_POST["valorCantidad"];
        $tipoConversion = $_POST["tipoConversion"];

        //logica de conversion
        if($tipoConversion == "eurosToPesetas"){

            //convertir a pesetas
            echo'<p class="resultado"> El resultado es de: ' . $cantidad * C_EurPta . '</p>'; 


        }else if($tipoConversion == "pesetasToEuros"){

            //convertir a euros 
            echo'<p class="resultado"> El resultado es de: ' . $cantidad * C_PtaEur . '</p>'; 

        }else{
            //conversion imposible 
            echo 'conversion imposible';
        }
        //mostrar cuando no se selecciona ninguna
    }else{
        echo '<p>Elija una opcion para conversión</p>';
    }

?>

    
    


</body>
</html>