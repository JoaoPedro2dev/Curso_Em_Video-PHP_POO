<?php 
    class Caneta{
        
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        public function rabiscar(){
            echo "Rabisco <br>";
        }

        public function tampar(){
            $this -> tampada = true;
            echo "tampada <br>";
        }

        public function destampar(){
            $this -> tampada = false;
            echo "destampada <br>";
        }

        public function definirPonta(){
            $this->ponta = 0.5;
        }
    }
?>