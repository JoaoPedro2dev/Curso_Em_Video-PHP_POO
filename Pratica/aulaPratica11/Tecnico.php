<?php 
    require_once"./Aluno.php";

    class Tecnico extends Aluno{
        //Atributo
        private $registroProfissional;

        //Métodos
        public function praticar(){
            echo "O aluno {$this->nome} está praticando...";
        }

        //Métodos especiais
        public function getRegistro(){
            return $this->registroProfissional;
        }

        public function setRegistro($v){
            $this->registroProfissional = $v;
        }
    }
?>