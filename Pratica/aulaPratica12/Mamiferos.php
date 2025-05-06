<?php 
    require_once"./Animal.php";

    class Mamiferos extends Animal{
        private $corPelo;

        public function locomover()
        {
            echo "Correndo";
        }

        public function alimentar()
        {
            echo "Bebendo leite";
        }

        public function emitirSom()
        {
            echo "<p>Som de mamifero</p>";
        }

        public function getCorPelo(){
            return $this->corPelo;
        }

        public function setCorPelo($corPelo){
            $this->corPelo = $corPelo;
        }
    }
?>