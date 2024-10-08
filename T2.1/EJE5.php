<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipos de variables</title>
</head>
<body>
    <?php  
            $a1 = 347;
            $a2 = 2147483647;
            $a3 = -2147483647;            ;
            $a4 = 23.7678;
            $a5 = 3.1416;
            $a6 = "347";
            $a7 = "3.1416";
            $a8 = "Solo literal";
            $a9 = "12.3 Literal con número";


            echo'<h1> Tipo antiguo </h1>';

         
                echo 'Nombre: $a1 ' . ' Valor: ' .  $a1 . ' Tipo: ' . gettype($a1) . '<br>';
                echo 'Nombre: $a2 ' . ' Valor: ' .  $a2 . ' Tipo: ' . gettype($a2). '<br>';
                echo 'Nombre: $a3 ' . ' Valor: ' .  $a3 . ' Tipo: ' . gettype($a3). '<br>';
                echo 'Nombre: $a4 ' . ' Valor: ' .  $a4 . ' Tipo: ' . gettype($a4). '<br>';
                echo 'Nombre: $a5 ' . ' Valor: ' .  $a5 . ' Tipo: ' . gettype($a5). '<br>';
                echo 'Nombre: $a6 ' . ' Valor: ' .  $a6 . ' Tipo: ' . gettype($a6). '<br>';
                echo 'Nombre: $a7 ' . ' Valor: ' .  $a7 . ' Tipo: ' . gettype($a7). '<br>';
                echo 'Nombre: $a8 ' . ' Valor: ' .  $a8 . ' Tipo: ' . gettype($a8). '<br>';
                echo 'Nombre: $a9 ' . ' Valor: ' .  $a9 . ' Tipo: ' . gettype($a9). '<br>';

                echo'<h1> Tipo Nuevo </h1>';

                settype($a1,type: 'double');
                settype($a2,type: 'double');
                settype($a3,type: 'double');
                settype($a4,type: 'integer');
                settype($a5,type: 'integer');
                settype($a6,type: 'double');
                settype($a7,type: 'integer');
                settype($a8,type: 'double');
                settype($a9,type: 'integer');


                echo 'Nombre: $a1 ' . ' Valor: ' .  $a1 . ' Tipo: ' . gettype($a1) . '<br>';
                echo 'Nombre: $a2 ' . ' Valor: ' .  $a2 . ' Tipo: ' . gettype($a2). '<br>';
                echo 'Nombre: $a3 ' . ' Valor: ' .  $a3 . ' Tipo: ' . gettype($a3). '<br>';
                echo 'Nombre: $a4 ' . ' Valor: ' .  $a4 . ' Tipo: ' . gettype($a4). '<br>';
                echo 'Nombre: $a5 ' . ' Valor: ' .  $a5 . ' Tipo: ' . gettype($a5). '<br>';
                echo 'Nombre: $a6 ' . ' Valor: ' .  $a6 . ' Tipo: ' . gettype($a6). '<br>';
                echo 'Nombre: $a7 ' . ' Valor: ' .  $a7 . ' Tipo: ' . gettype($a7). '<br>';
                echo 'Nombre: $a8 ' . ' Valor: ' .  $a8 . ' Tipo: ' . gettype($a8). '<br>';
                echo 'Nombre: $a9 ' . ' Valor: ' .  $a9 . ' Tipo: ' . gettype($a9). '<br>';
        ?>
</body>
</html>