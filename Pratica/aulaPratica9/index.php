<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Prática 9 – Exercício prático POO em PHP</title>
</head>

<body>
    <?php 
        require_once"./livro.php";
        require_once"./Pessoa.php";

        $pessoa[0] = new Pessoa("Usuario 1", 30, "masculino");
        $livro[0] = new Livro("Um livro", "usuario autor", 440, $pessoa[0]);
        $livro[2] = new Livro("Livro POO", "Curso em vídeo", 40, $pessoa[0]);

        $pessoa[1] = new Pessoa("Leitor 2", 23, "masculino");
        $livro[1] = new Livro("Um livro de exemplo", "Autor 2", 220, $pessoa[1]);

        $livro[0]->abrir();
        $livro[0]->detalhes();
        $livro[0]->folhear(450);
        $livro[0]->avancarPag();

        var_dump($livro[0]);

        $livro[1]->detalhes();
        $livro[2]->detalhes();
    ?>
</body>

</html>