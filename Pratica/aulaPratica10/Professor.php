<?php 
    //Classe mãe / Superclasse
    require_once"Pessoa.php";

    //Classe filha / Subclasse
    class Professor extends Pessoa1{
        //Atributos não herdados
        private $especialidade;
        private $salario;

        //Métodos não herdado
        public function receberAum($v){
            $this->setSalario($this->getSalario() + $v);
            echo "Aumento de salario em R$$v para {$this->getNome()} <br>";
        }

        //Métodos especiais não herdados
        public function getEspecialidade(){
            return $this -> especialidade;
        }

        public function setEspecialidade($v){
            $this->especialidade = $v;
        }

        public function getSalario(){
            return $this->salario;
        }

        public function setSalario($v){
            $this->salario = $v;
        }
    }
?>