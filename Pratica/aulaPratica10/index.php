<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Prática 10 – Herança (Parte 1)</title>
</head>

<body>
    <h1>Herança</h1>
    <?php 
        // require_once"./Pessoa.php";
        require_once"./Aluno.php";
        require_once"./Professor.php";
        require_once"./Funcionario.php";
        
        $p1 = new Aluno();
        $p2 = new Professor();
        $p3 = new Funcionario();

        $p1->setNome("Claúdio");
        $p1->setIdade(20);
        $p1->setSexo("M");
        $p1->setCurso("Informática");

        $p2->setNome("Marcio");
        $p2->setIdade(40);
        $p2->setSexo("M");
        $p2->setSalario(2325.80);

        $p3->setNome("Valmira");
        $p3->setIdade(35);
        $p3->setSexo("F");
        $p3->setSetor("Diretor");

        $p2->receberAum(500);
        $p3->mudarTrabalho();


        echo "<hr>";

        $p3->fazerAniv();
        $p2->fazerAniv();
        $p3->fazerAniv();

        var_dump($p1, $p2, $p3);
    ?>
</body>

</html>