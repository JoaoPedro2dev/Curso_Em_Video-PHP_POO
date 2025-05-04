<?php 
    //Classe mãe / Super classe
    class Pessoa1{
        //Atributos
        private $nome;
        private $idade;
        private $sexo;

        //Métodos;
        public function fazerAniv(){
            $this->setIdade($this->getIdade() + 1);
            echo "{$this->getNome()} fez aniversário <br>";
        }

        //Métodos especiais
        public function getNome(){
            return $this->nome;
        }

        public function setNome($v){
            $this->nome = $v;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setIdade($v){
            $this->idade = $v;
        }

        public function getSexo(){
            return $this->sexo;
        }

        public function setSexo($v){
            $this->sexo = $v;
        }
    }
?>