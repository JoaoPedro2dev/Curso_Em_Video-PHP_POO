<?php 
    class Aula{
        public $conteudo;
        public $iniciada;
        public $finalizada;

        public function finalizar(){
            if($this->finalizada == true){
                echo "Erro: A aula já acabou <br>";
                return;
            }

            $this->finalizada = true;
            $this->iniciada = false;

            echo "Aula finalizada <br>";
        }

        public function iniciar(){
            if($this->iniciada == true){
                echo "Erro: A aula já começou <br>";
                return;
            }

            $this->iniciada = true;
            $this->finalizada = false;

            echo "Aula iniciada <br>";
        }
    }
?>