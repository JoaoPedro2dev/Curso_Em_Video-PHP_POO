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
            require_once"./Luta.php";

            $descricao = [["Pretty Boy", "Americano", 32, 1.89, 65.8, 6, 2, 1], ["Putscript", "Brasileiro", 23, 1.82, 65.5, 5, 0, 0], ["Snapshadow", "Frances", 35, 1.75, 65, 10, 2, 2], ["Dead Code", "Europeu", 20, 1.90, 100, 8, 3, 1], ["lutador 5", "Peruano", 30, 1.86, 103.8, 11, 6, 1], ["Lutador 6", "italiano", 38, 1.78, 78.6, 18, 9, 2]];

            echo "<h1>Lutadores</h1>";

            for($i = 0; $i < count($descricao); $i++){
                $lutador[$i] = new Lutador(...$descricao[$i]);
                $lutador[$i]->apresentar();
                $lutador[$i]->status();
                echo $lutador[$i]->getCategoria();
            }

            echo "<hr>";

            function definirLuta($l1, $l2){
                echo "<h1>Agendando luta</h1>";

                $luta01 = new Luta;
                echo $luta01->marcarLuta($l1, $l2)."<br><br>";

                echo "<h1>A luta começou</h1>";

                echo $luta01->lutar() . "<br><br>";

                echo "<h1>Status após a luta</h1>";

                echo $l1->status();
                echo $l2->status();
            }

            definirLuta($lutador[0], $lutador[1]);
            
        ?>
</body>

</html>