<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area del triangulo</title>
</head>
<body>
    <style>
        fieldset{
            background-color: rgba(153, 147, 147, 0.548);
        }
        body{
            background-color: rgba(218, 69, 69, 0.768);
            color: white;
        }
    </style>
        <?php  
            $base;
            $altura;
            $area;

            //echo'El area del triangulo cuya base es ' . $base . ' y ' . $altura . ' es: ' . $area;
        ?>

    <!-- Titulo de la pagina -->
     <h1>CALCULAR AREA TRIANGULO</h1>

         <!-- Formulario para pedir los datos -->
          
         <form action="" method="post">
            
         <fieldset>
         <label for="base">
                Escribe la base: <input type="number" name="DatosBase"> <br>
            </label>
            <label for="altura">
                Escribe la altura: <input type="number" name="DatosAltura">
            </label>
            <input type="submit" name="enviar">
         </fieldset>
         </form> <br>

         <?php  

         //leer Variables
         $base = $_POST["DatosBase"];
         $altura = $_POST["DatosAltura"];

            //Escribir condicion para verificar que se pulsa el enviar y que las variables tienen un numero escrito
            if(isset($_POST["enviar"]) && !empty($base) && !empty($altura)){
                
        
                    $area = $base * $altura; //logica area
                    echo '<p> El area del triangulo cuya base es ' . $base . ' y altura es ' . $altura . ' es: ' . $area . '</p>';

            }else{
                echo 'Debe darle a enviar o escribir valores';
            }
           
        ?>



</body>
</html>