<?php 

    require_once"Pessoas.php";

    class Aluno extends Pessoas{
        //Atributos
        private $matricula;
        private $curso;

        //Métodos
        public function pagarMensalidade(){
            echo "Mensalidade do aluno {$this->nome} paga";
        }

        //Métodos especiais
        public function getMatricula(){
            return $this->matricula;
        }

        public function setMatricula($v){
            $this->matricula = $v;
        }

        public function getCurso(){
            return $this->curso;
        }

        public function setCurso($v){
            $this->curso = $v;
        }
    }
?>