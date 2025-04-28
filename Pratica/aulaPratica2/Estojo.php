<?php 
    class Estojo{
        public $cor;
        public $aberto;
        public $cheio;

        public function abrir(){
            if($this->aberto == true){
                echo "Erro: O estojo já esta aberto ";
                return;
            }

            $this->aberto = true;
            echo "Estojo aberto <br>";
        }

        public function fechar(){
            if($this->aberto == false){
                echo "Erro: O estojo já esta fechado <br>";
                return;
            }

            $this->aberto = false;
            echo "Estojo fechado <br>";
        }

        public function encher(){
            if($this->aberto == false){
                echo "Erro: o estojo fechado não pode ser cheio <br>";
                return;
            }

            if($this->cheio == true){
                echo "Erro: O estojo já está cheio <br>";
            }
            
            $this->cheio = true;
            echo "Estojo cheio <br>";
        }

        public function esvaziar(){
            if($this->aberto == false){
                echo "Erro: o estojo fechado não pode ser esvaziado <br>";
                return;
            }

            if($this->cheio == false){
                echo "Erro: O estojo já esta vazil <br>";
                return;
            }

            $this->cheio = false;
            echo "Estojo vazil <br>";
        }
    }
?>