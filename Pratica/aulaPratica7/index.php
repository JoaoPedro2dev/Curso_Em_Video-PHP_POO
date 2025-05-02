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

            $lutador = [0...5];

            $lutador[0] = new Lutador("Pretty Boy", "Americano", 32, 1.89, 78.8, 6, 2, 1);
            $lutador[0]->ganharLuta();
            $lutador[0]->apresentar();
            $lutador[0]->status();
            echo $lutador[0]->getCategoria() . "<br><br>";

            $lutador[1] = new Lutador("Putscript", "Brasileiro", 23, 1.82, 92.5, 5, 0, 0);
            $lutador[1]->apresentar();

            $lutador[2] = new Lutador("Snapshadow", "Frances", 35, 1.75, 87, 10, 2, 2);
            $lutador[2]->apresentar();

            $lutador[3] = new Lutador("Dead Code", "Europeu", 20, 1.90, 100, 8, 3, 1);
            $lutador[3]->apresentar();

            $lutador[4] = new Lutador("", "Peruano", 30, 1.86, 103.8, 11, 6, 1);
            $lutador[4]->apresentar();

            $lutador[5] = new Lutador("", "italiano", 38, 1.78, 99.6, 18, 9, 2);
            $lutador[5]->apresentar();
            echo $lutador[5]->getCategoria() . "<br><br>";
        ?>
</body>

</html>