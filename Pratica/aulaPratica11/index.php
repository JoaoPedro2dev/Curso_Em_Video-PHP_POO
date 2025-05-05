<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Prática 11 – Herança (Parte 2)</title>
</head>

<body>
    <?php 
        require_once"./Visitante.php";
        require_once"./Aluno.php";
        require_once"./Bolsista.php";
        require_once"./Tecnico.php";
        require_once"./Professor.php";

        // $p1 = new Pessoas;
        $v1 = new Visitante;
        $v1->setNome("Vsitante 1");
        $v1->setIdade(25);
        $v1->setSexo("M");
        var_dump($v1);

        echo "<hr>";
        
        $a1 = new Aluno;
        $a1->setNome("Aluno 1");
        $a1->setIdade(17);
        $a1->setSexo("M");
        $a1->setMatricula(1111);
        $a1->setCurso('Informática');
        $a1->pagarMensalidade();
        var_dump($a1);

        echo "<hr>";
        
        $ab1 = new Bolsista;
        $ab1->setNome("Aluno bolsista 1");
        $ab1->setIdade(15);
        $ab1->setSexo("F");
        $ab1->setMatricula(2222);
        $ab1->setCurso("Ciência da computação");
        $ab1->renovarBolsa();
        echo"<br>";
        $ab1->pagarMensalidade();
        var_dump($ab1);

        echo "<hr>";

        $t1 = new Tecnico;
        $t1->setNome("Aluno técnico 1");
        $t1->praticar();
        var_dump($t1);

        echo "<hr>";

        $pro1 = new Professor;
        $pro1->setNome("Professor 1");
        $pro1->receberAumento(500);

        var_dump($pro1);
    ?>
</body>

</html>