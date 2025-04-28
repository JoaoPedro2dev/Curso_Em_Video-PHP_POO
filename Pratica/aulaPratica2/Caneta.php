<?php 
    //Classe
    class Caneta{
        //Atributos
        public $modelo;
        public $cor;
        public $ponta;
        public $carga;
        public $tampada;

        //Metodos
        public function rabiscar(){
            if($this->tampada == true){
                echo "<p>Caneta tampada não pode rabiscar</p> <br>";
                return;
            }

            if($this->carga == 0){
                echo "<p>Caneta sem carga não pode escrever</p> <br>";
                return;
            }

            echo "Rabisco";
        }

        public function tampar(){
            $this -> tampada = true;
        }

        public function destampar(){
            $this -> tampada = false;
        }
    }
?>