<?php 
    require_once"./Mamiferos.php";

    class Cachorro extends Mamiferos{
        public function enterraDisco(){
            echo "<p>Enterrando disco</p>";
        }

        public function abanarRabo(){
            echo "<p>Abanando o rabo</p>";
        }

        public function emitirSom()
        {
            echo "<p>Latindo</p>";
        }
    }
?>