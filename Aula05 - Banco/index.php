<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        html, body, div{
            margin: 0;
            padding: 0;
            border: 0;
            line-height: 1;
        }
    </style>
    <head style="text-align: center;">
        <h1 style="background-color: cornflowerblue; text-align: center;">Banco do Lucas</h1>
    </head>
    <div style="background-color: black; color:darkgray;">
    <pre>
    <?php


    require_once 'ContaBanco.php';

    $conta1 = new ContaBanco();
    $conta1->abrirConta('cp');
    $conta1->setDono('Lucas Bethuel');
    $conta1->depositar(500);
    $conta1->sacar(1000);

    print_r($conta1);

    ?>
    </pre>
    </div>

    <footer style="background-color: crimson; color: white;">
        Site criado por lucas
    </footer>
    
</body>

</html>