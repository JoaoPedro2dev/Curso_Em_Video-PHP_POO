<?php 

    require_once"./Animal.php";

    class Peixe extends Animal{
        private $corEscama;

        public function locomover()
        {
            echo "Nadando";
        }

        public function alimentar()
        {
            Echo "Peixe comendo";
        }

        public function emitirSom()
        {
            echo "Peixe não faz som";
        }

        public function soltarBolha(){
            echo "Soltando Bolhas";
        }

        public function getCorEscama(){
            return $this->corEscama;
        }

        public function setCorEscama($corEscama){
            $this->corEscama = $corEscama;
        }
    }

?>