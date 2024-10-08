<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario</title>
</head>
<body>
    <?php  
    //declaracion de variables
    $salario;
    $impuesto;
    $resultado;
        ?>

        <!-- Titulo de la pagina -->
     <h1>Calcular salario y impuesto</h1>

              <!-- Formulario para pedir los datos -->
             <form action="" method="post">
                <fieldset>
                    <label for="informacion">
                Escriba el salario: <input type="number" name="salario">
                    </label>
                    <label for="informacion">
                Escriba el impuesto: <input type="numer" name="impuesto">
                    </label>
                </fieldset>
                <input type="submit" value="Mostrar salario sin descontar" name="SalarioSinDescontar">
                <input type="submit" value="Mostrar salario descontado" name="SalarioDescontado">

                </form>

    <?php  
    //leer variables
    $salario = $_POST["salario"];
    $impuesto = $_POST["impuesto"];

    //variable para guardar el descuento
    $descuento = ($salario * $impuesto)/100;

    $resultado = $salario - $descuento;

    //Verificacion de boton presionado
    if(isset($_POST["SalarioSinDescontar"])){
        echo'<p>"El salario sin descontar el impuesto: ' . $salario . '"</p>';

    }else if(isset($_POST["SalarioDescontado"])){
        echo '<p>"El salario ' . '\'' . $salario . '\' una vez descontado:' . $resultado .'"</p>';
    }
    ?>

</body>
</html>