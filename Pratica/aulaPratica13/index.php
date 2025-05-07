<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Prática 13 – Polimorfismo Sobrecarga (Parte 2)</title>
</head>

<body>
    <?php 
        //O PHP NÃO DA SUPORTE PARA O POLIMORFISMO DO TIPO SOBRECARGA

        // require_once"Mamifero.php";
        // require_once"Lobo.php";
        require_once"Cachorro.php";

        $m1 = new Mamifero;
        $m1->emitirSom();

        $l1 = new Lobo;
        $l1->emitirSom();

        $c1 = new Cachorro;
        $c1->emitirSom(); 

        $c1->reagirDono(true);
        $c1->reagirFrase("");
        $c1->reagirHorario(11);
        $c1->reagirHorario(23);
        $c1->reagirIdadePeso(17, 5)
    ?>
</body>

</html>