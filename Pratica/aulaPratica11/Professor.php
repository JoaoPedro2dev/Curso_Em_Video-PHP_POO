<?php 
    require_once"./Pessoas.php";

    class Professor extends Pessoas{
        //Atributos
        private $especialidade;
        private $salario;

        //Méotodos
        public function receberAumento($aumento){
            $this->setSalario($this->getSalario() + $aumento);
            echo "Aumento de salário para o professor {$this->nome}, valor do aumento: R$$aumento";
        }

        //Métodos especiais
        public function getEspecialidade(){
            return $this->especialidade;
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