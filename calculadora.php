<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/*Realiza un formulario en el que haya dos campos numéricos de entrada y 
una lista desplegable que incluya las 4 operaciones básicas (sumar, restar, multiplicar, dividir).
 Con un botón "=", mostramos el resultado.*/
?>

<!--Creamos formulario-->
<form action="#" method="post">
    <label for="calc1">
        valor 1: <input type="number" name="valor1">
    </label>
    <label for="calc2">
        valor 2: <input type="number" name="valor2">
    </label>
    <label for="seleccion">
        <select name="operacion" id="">
            <option value=""></option>
            <option value="sumar" name="sumar">Sumar</option>
            <option value="restar" name="restar">restar</option>
            <option value="dividir" name="dividir">dividir</option>
            <option value="multiplicar" name="multiplicar">multiplicar</option>
        </select>
    </label>
    <input type="submit" value="=" name="calcular">
</form>

<?php
//establecemos las variables
$valor1 = $_POST["valor1"];
$valor2 = $_POST["valor2"];

//aseguramos que se pulse el boton
if(isset($_POST["calcular"])) {
    switch($_POST["operacion"]){ //switch para ver que operacion se realiza
        case "sumar": echo 'La suma seria '. $valor1+$valor2; break;
            case"restar": echo 'La resta seria ' . $valor1-$valor2; break;
                case "dividir": 
                    if($valor2==0){
                        echo'No se puede dividir entre 0';
                    }else{
                        echo 'La division seria ' . $valor1/$valor2; 
                    }
                    break;
                    case "multiplicar": echo 'La multiplicacion seria ' . $valor1*$valor2;break;
    }
}


?>
</body>
</html>