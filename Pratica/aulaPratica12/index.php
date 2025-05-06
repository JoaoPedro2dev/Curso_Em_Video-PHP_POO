<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Prática 12 – Polimorfismo em PHP (Parte 1)</title>
</head>

<body>
    <?php 
        require_once"./Mamiferos.php";
        require_once"./Canguru.php";
        require_once"./Cachorro.php";
        require_once"./Tartaruga.php";
        require_once"./Ave.php";

        $a1 = new Mamiferos;
        $a1->emitirSom();
        // $a2 = new Ave;
        // $a3 = new Reptil;
        // $a4 = new Peixe;

        // $a1->locomover();
        // $a2->locomover();
        // $a3->locomover();
        // $a4->locomover();

        $c1 = new Canguru;
        $c1->locomover();
        $c1->emitirSom();

        $k1 = new Cachorro;
        $k1->locomover();
        $k1->abanarRabo();
        $k1->emitirSom();

        $t = new Tartaruga;
        $t->locomover();
    ?>
</body>

</html>