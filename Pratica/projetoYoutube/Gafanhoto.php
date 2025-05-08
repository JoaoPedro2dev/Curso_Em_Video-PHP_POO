<?php 
    require_once"./PessoaCurso.php";

    class Gafanhoto extends PessoaCurso{
        private $login;
        private $totAssistido;

        function __construct($nome, $idade, $sexo, $login)
        {
            parent::__construct($nome, $idade, $sexo);
            $this->login = $login;
            $this->totAssistido = 0; 
        }

        public function viuMaisUm(){
            $this->setTotAssistido($this->getTotAssistido() + 1);
        } 

        public function getLogin(){
            return $this->login;
        }

        public function setLogin($login){
            $this->login = $login;
        }

        public function getTotAssistido(){
            return $this->totAssistido;
        }

        public function setTotAssistido($totalAssitido){
            $this->totAssistido = $totalAssitido;
        }
    }
?>