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
        require_once"./Visualizacao.php";

        $v[0] = new Video("Aula 1 de PHP");
        $v[1] = new Video("Aula 1 de HTML");
        $v[2] = new Video("Aula 1 de POO com PHP");

        $g[0] = new Gafanhoto("João", 20, "M", "joao");
        $g[1] = new Gafanhoto("Pedro", 20, "M", "pedro");
        $g[2] = new Gafanhoto("Eduardo", 18, "M", "Edu");

        $vis[0] = new Visualizacao($g[0], $v[2]);
        $vis[1] = new Visualizacao($g[0], $v[1]);
        $vis[0]->avaliarPorc(85);
        $vis[1]->avaliarNota(80);
        // $vis[2] = new Visualizacao($g[1], $v[1]);

        var_dump($vis);
    ?>
</body>

</html>