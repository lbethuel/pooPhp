<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    

    <?php
    require_once 'ControleRemoto.php';
    $c = new ControleRemoto();
    $c->ligar();
    $c->play();
    $c->abrirMenu();

    ?>
    <pre>
<?php
print_r($c);
?>
</pre>



</body>

</html>