<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Prática 7 – Objetos Compostos em PHP</title>
</head>

<body>
    <?php 
            require_once"./Lutador.php";

            $descricao = [["Pretty Boy", "Americano", 32, 1.89, 78.8, 6, 2, 1], ["Putscript", "Brasileiro", 23, 1.82, 65.5, 5, 0, 0], ["Snapshadow", "Frances", 35, 1.75, 65, 10, 2, 2], ["Dead Code", "Europeu", 20, 1.90, 100, 8, 3, 1], ["", "Peruano", 30, 1.86, 103.8, 11, 6, 1], ["", "italiano", 38, 1.78, 78.6, 18, 9, 2]];

            for($i = 0; $i < count($descricao); $i++){
                $lutador[$i] = new Lutador(...$descricao[$i]);
                $lutador[$i]->apresentar();
                $lutador[$i]->status();
                echo $lutador[$i]->getCategoria();
            }
        ?>
</body>

</html>