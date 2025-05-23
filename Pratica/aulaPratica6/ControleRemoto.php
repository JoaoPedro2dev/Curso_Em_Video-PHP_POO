<?php 
    require_once"./Interface.php";

    class ControleRemoto implements Contolador{
        private $volume;
        private $ligado;
        private $tocando;

        public function __construct()
        {
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }

        private function getVolume(){
            return $this->volume;
        }

        private function setVolume($volume){
            $this->volume = $volume;
        }

        private function getLigado(){
            return $this->ligado;
        }

        private function setLigado($ligado){
            $this->ligado = $ligado;
        }

        private function getTocando(){
            return $this->tocando;
        }

        private function setTocando($tocando){
            $this->tocando = $tocando;
        }

        //Métodos abstratos

        public function ligar(){
            $this->setLigado(true);
        }

        public function desligar(){
            $this->setLigado(false);
        }

        public function abrirMenu(){
            echo "----Menu---- <br>";
            echo "Esta ligado? " . ($this->getLigado() ? "SIM" : "NÃO") . "<br>";
            echo "Esta tocando? " . ($this->getTocando() ? "SIM" : "NÃO") . "<br>";
            echo $this->getVolume() . "<br>";

            for($i=0; $i <= $this->getVolume(); $i+=10){
                echo "| ";
            }
            echo "<br>";
        }

        public function fecharMenu(){
            echo "Menu fechado";
        }

        public function maisVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() + 1);
            }
        }

        public function menosVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() - 1);
            }
        }

        public function ligarMudo(){
            if($this->getLigado() && $this->getVolume() > 0){
                $this->setVolume(0);
            }
        }

        public function desligarMudo(){
            if($this->getLigado() && $this->getVolume() == 0){
                $this->setVolume(50);
            }
        }

        public function play(){
            if($this->getLigado() && !$this->getTocando()){
                $this->setTocando(true);
            }
        }

        public function pause(){
            if($this->getLigado() && $this->getTocando()){
                $this->setTocando(false);
            }
        }
    }
?>