<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle remoto</title>
</head>

<body>
    <h1>Controle remoto</h1>

    <?php 
        require_once"./ControleRemoto.php";

        $controle = new ControleRemoto;
        $controle->ligar();
        // $controle->maisVolume();
        $controle->menosVolume();
        $controle->play();
        $controle->pause();
        // $controle->desligar();
        $controle->ligarMudo();
        $controle->desligarMudo();
        $controle->abrirMenu();
        // $controle->fecharMenu();
    ?>
</body>

</html>