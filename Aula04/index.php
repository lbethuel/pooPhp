<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aula 04 - POO</title>

</head>

<body>
    <pre>
    <?php

    require_once 'Caneta.php';

    $c1 = new Caneta("Verde", "BIC", 0.5);
    $c2 = new Caneta("Azul", "BIC cristal", 0.9);

    print_r($c1);
    print_r($c2);
    

    ?>   
    </pre> 
</body>
</html>