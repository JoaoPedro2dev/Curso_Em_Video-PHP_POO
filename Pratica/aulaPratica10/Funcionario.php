<?php 
    //Classe mãe / Superclasse
    require_once"./Pessoa.php";

    //Classe filha / Subclasse
    class Funcionario extends Pessoa1{
        //Atributos não herdados
        private $setor;
        private $trabalhando;

        //Métodos não herdados
        public function mudarTrabalho(){
            $this->trabalhando = ! $this->trabalhando;
            echo $this->getNome()." ".($this->getTrabalhando() ? "Está trabalhando" : "Não está trabalhando")."</br>";
        }

        //Métodos especiais não herdados
        public function getSetor(){
            return $this->setor;
        }

        public function setSetor($v){
            $this->setor = $v;
        }

        public function getTrabalhando(){
            return $this->trabalhando;
        }

        public function setTrabalhando($v){
            $this->trabalhando = $v;
        } 
    }
?>