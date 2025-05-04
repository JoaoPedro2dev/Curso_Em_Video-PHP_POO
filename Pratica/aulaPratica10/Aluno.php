<?php 
    //Classe mãe
    require_once"Pessoa.php";

    //Classe filha / Subclasse
    class Aluno extends Pessoa1{
        //Atributos não herdados
        private $matric;
        private $curso;

        //Métodos não herdados
        public function cancelarMatric(){
            echo "Matricula de {$this->getNome()} cancelada <br>";
        }

        //Métodos especiais não herdados
        public function getMatric(){
            return $this->matric;
        }

        public function setMatric($v){
            $this->matric = $v;
        }

        public function getCurso(){
            return $this->curso;
        }

        public function setCurso($v){
            $this->curso = $v;
        }
    }
?>