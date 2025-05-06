<?php 

    require_once"./Mamiferos.php";

    class Canguru extends Mamiferos{
        public function usarBolca(){
            echo "<p>O canguru esta usando a bolsa</p>";
        }

        public function locomover()
        {
            echo "<p>Pulando</p>";
        }
    }

?>