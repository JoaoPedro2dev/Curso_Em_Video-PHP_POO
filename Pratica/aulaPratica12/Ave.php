<?php 

    require_once"./Animal.php";

    class Ave extends Animal{
        private $corPena;

        public function fazerNinho(){
            echo "Fez um ninho";
        }

        public function locomover()
        {
            echo "Voando";
        }

        public function alimentar()
        {
            echo "Ave comendo";
        }

        public function emitirSom()
        {
            echo "Cantnado";
        }

        public function getCorPena(){
            return $this->corPena;
        }

        public function setCorPena($corPena){
            $this->corPena = $corPena;
        }
    }
?>