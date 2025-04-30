<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta no banco</title>
</head>

<body>
    <div>
        <h1>Sua conta</h1>

        <?php 
            require_once"./ContaBanco.php";

            $joaoPedro = new ContaBanco; 
            $usuario = new ContaBanco;

            echo $joaoPedro->abrirConta("corrente") . "<br><br>";
            $joaoPedro->setDono("João Pedro");
            $joaoPedro->setNumConta(11111);
            echo $joaoPedro->depositar(300) . "<br><br>";
            echo $joaoPedro->pagarMensal() . "<br><br>";
            echo $joaoPedro->sacar(338) . "<br><br>";
            echo $joaoPedro->fecharConta() . "<br><br>";
            var_dump($joaoPedro);

            echo $usuario->abrirConta("poupanca") . "<br><br>";
            $usuario->setDono("Usuario");
            $usuario->setNumConta(22222);
            echo $usuario->depositar(500) . "<br><br>";
            echo $usuario->sacar(650) . "<br><br>";
            echo $usuario->pagarMensal() . "<br><br>";
            echo $usuario->fecharConta() . "<br><br>";
            var_dump($usuario);
            // echo $usuario->sacar(50) . "<br> <br>";

            // echo $usuario->fecharConta() . "<br> <br>";

            // echo $usuario->depositar(500) . "<br> <br>";

            // echo $usuario->pagarMensal() . "<br> <br>";


        ?>
    </div>
</body>

</html>