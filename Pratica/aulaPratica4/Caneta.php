<?php 
    class Caneta{
        public $modelo;
        private $cor;
        private $ponta;
        private $carga;
        public $tampada;

        //construtor
        /*
        public function __construct()
        {   
            $this->cor = "Azul";    
            $this->carga = 100;
            $this->tampar();
        }

        ou

        public function NomeClasse(){
            código
        }
        */

        //passando parametros
        public function __construct($m, $c, $p, $cor)
        {
            $this->modelo = $m;
            $this->carga = $c;
            $this->ponta = $p;
            $this->cor =$cor;
            $this->tampar();
        }

        public function tampar(){
            $this->tampada = true;
            return "caneta tampada";
        } 

        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($m){
            $this->modelo = $m;
        }

        public function getPonta(){
            return $this->ponta;
        }

        public function setPonta($p){
            $this->ponta = $p;
        }
    }
?>