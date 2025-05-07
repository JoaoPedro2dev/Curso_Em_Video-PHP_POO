<?php 
    require_once"./Lobo.php";

    class Cachorro extends Lobo{
        public function emitirSom()
        {
            echo "<p>Au Au Au</p>";
        }


        //ISSO NÃO É SPBRECARGA
        
        public function reagirFrase($frase){
            echo $frase == "agradavel" ? "<p>Abanando e latindo</p>" : "<p>Rosnar</p>";
        }

        public function reagirHorario($hora){
            switch ($hora){
                case $hora < 12:
                    echo "<p>Abanar</p>";
                    break;
                case $hora >= 18:
                    echo "<p>Ignorar</p>";
                    break;
                default:
                    echo "<p>Abanar e Latir</p>";
            }
        }

        public function reagirDono($dono){
            echo $dono ? "<p>Abanar</p>" : "<p>Rosnar</p>";
        }

        public function reagirIdadePeso($idade, $peso){
            if($idade < 5){
                if($peso < 10){
                    echo "<p>Abanar</p>";
                }else{
                    echo "<p>Latir</p>";
                }
            }else{
                if($peso < 10){ 
                    echo "<p>Rosnar</p>";
                }else{
                    echo "<p>Ignorar</p>";
                }
            }
        }
    }
?>