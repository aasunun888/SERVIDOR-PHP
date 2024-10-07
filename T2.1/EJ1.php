<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>ejercicio1</title>
</head>
<body>
    <?php
    /* Define dos constantes, una numérica y otra de cadena y mediante una de las opciones, print y echo,
     aparezca en la página web resultante un texto sobre el tipo de cada
      una de ellas seguido de su valor.*/

      define('C_constante1',555);
      define('C_constante2','pedro');

      echo'<p> La constante de valor numerico: ' . gettype(C_constante1) . '</p>';
      echo'<p> La constante de valor String: ' . gettype(C_constante2) . '</p>';

    ?>
</body>
</html>