<?php 

    class Pessoa{
        //Atributos
        private $nome;
        private $idade;
        private $sexo;

        public function __construct($n, $i, $s)
        {
            $this->nome = $n;
            $this->idade = $i;
            $this->sexo = $s;
        }

        //Métodos
        public function fazerAniver(){
            $this->idade++;
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