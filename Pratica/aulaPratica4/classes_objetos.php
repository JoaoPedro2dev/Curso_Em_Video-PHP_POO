<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula prática 4, getters, setters e constructor</title>
</head>

<body>
    <?php 
        include "./Caneta.php";
        include "./Caderno.php";
        
        $caneta1 = new Caneta("Bic", 100, 0.9, "Azul");
        $caneta2 = new Caneta("Leo&Leo", 100, 0.5, "Preta");

        $caderno = new Caderno(300, 10, true);

        var_dump($caneta1, $caneta2, $caderno);

        echo $caderno->rabiscar("Qualquer rabisco1");
        
        /*
        $caneta1->setModelo("Bic");
        $caneta1->modelo = "BIC"; funciona pois o atributo é publico

        $caneta1->setPonta(0.9);
        $caneta1->ponta = 0.6; não funciona, pois o atributo é privado
        */

        echo "Eu tenho uma caneta {$caneta1->getModelo()} com a ponta {$caneta1->getPonta()} e outra da {$caneta2->getModelo()} e {$caneta2->getPonta()}";
    ?>
</body>

</html>