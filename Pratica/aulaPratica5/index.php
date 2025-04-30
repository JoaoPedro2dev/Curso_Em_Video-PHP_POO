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
            include_once"./ContaBanco.php";

            $usuario = new ContaBanco("João Pedro");


            echo $usuario->abrirConta("corrente") . "<br> <br>";

            echo $usuario->sacar(50) . "<br> <br>";

            echo $usuario->fecharConta() . "<br> <br>";

            echo $usuario->depositar(500) . "<br> <br>";

            echo $usuario->pagarMensal() . "<br> <br>";

            var_dump($usuario);

        ?>
    </div>
</body>

</html>