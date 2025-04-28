<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando Classes e Objetos em PHP</title>
</head>

<body>
    <?php 
        include "./Caneta.php";
        include "./Estojo.php";
        include "./Aula.php";
        
        //Objeto
        $caneta1 = new Caneta;
        $caneta1->modelo = "bic";
        $caneta1->cor = "Azul";
        $caneta1->ponta = 0.07;
        $caneta1->carga = 80;
        $caneta1->tampada = true;
        $caneta1->tampar();
        $caneta1->destampar();
        $caneta1->rabiscar(); 

        $caneta2 = new Caneta;
        $caneta2 -> cor = "Verde";
        $caneta2 -> carga = 0;
        $caneta2 -> tampada = true;
        $caneta2 -> tampar();
        $caneta2 -> destampar();
        $caneta2 -> rabiscar();

        $estojo1 = new Estojo;
        $estojo1->cor = "Preto";
        $estojo1->aberto = false;
        $estojo1->cheio = false;
        $estojo1->abrir();
        $estojo1->encher();
        $estojo1->esvaziar();

        $aula1 = new Aula;
        $aula1->conteudo = "PHP";
        $aula1->iniciada = true;
        $aula1->finalizada = false;
        $aula1->finalizar();
        $aula1->iniciar();

        //Mostrando o estado atual do Objeto
        var_dump($caneta1, $caneta2, $estojo1, $aula1);
    ?>
</body>

</html>