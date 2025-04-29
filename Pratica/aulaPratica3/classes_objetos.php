<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando Classes e Objetos em PHP</title>
</head>

<body>
    <?php 
        include "./Caneta.php";
        
        $caneta = new Caneta;
        $caneta->modelo = "Caneta Bic";
        $caneta->cor = "Azul";
        //$caneta->ponta = 0.5;
        // $caneta->carga = 10;
        $caneta->rabiscar();
        $caneta->tampar();
        $caneta->destampar();
        $caneta->definirPonta();
        
        var_dump($caneta);
    ?>
</body>

</html>