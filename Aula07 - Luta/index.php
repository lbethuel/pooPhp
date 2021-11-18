<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <?php
    require_once 'Lutador.php';


    $lutador = array();

    $lutador[0] = new Lutador(
        "Lucas",
        "Brasileiro",
        26, 1.86, 25,
        10, 1, 2
    );

    $lutador[1] = new Lutador(
        "Anthony",
        "Portugues",
        36, 1.70, 75,
        12, 4, 4
    );

    $lutador[2] = new Lutador(
        "Khana",
        "Angolano",
        23, 1.87, 110,
        15, 1, 3
    );

    $lutador[3] = new Lutador(
        "Zhun-Lee",
        "Japones",
        27, 1.71, 67,
        13, 2, 4
    );

    $lutador[4] = new Lutador(
        "Jhow",
        "Americano",
        26, 1.65, 69,
        17, 0, 1
    );

    $lutador[5] = new Lutador(
        "Guanabara",
        "Brasileiro",
        42, 1.75, 87,
        10, 5, 7
    );
   // print_r($lutador);
    //$lutador[0]->apresentar();
    $lutador[3]->apresentar();

    //print_r($lutador);

    ?>
    
</body>
</html>