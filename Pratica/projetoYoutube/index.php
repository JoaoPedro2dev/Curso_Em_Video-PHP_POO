<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Prática 14 – Projeto Final em PHP (Parte 1)</title>
</head>

<body>
    <?php 
        require_once"./Video.php";
        require_once"./Gafanhoto.php";

        $v[0] = new Video("Aula 1 de PHP");
        $v[1] = new Video("Aula 1 de HTML");
        $v[2] = new Video("Aula 1 de POO com PHP");

        $g[0] = new Gafanhoto("João", 20, "M", "joao");
        $g[1] = new Gafanhoto("Pedro", 20, "M", "pedro");
        $g[2] = new Gafanhoto("Eduardo", 18, "M", "Edu");

        var_dump($v, $g);
    ?>
</body>

</html>