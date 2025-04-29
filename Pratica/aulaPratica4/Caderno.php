<?php 
    class Caderno{
        protected $qntFolhas;
        public $emBranco;
        protected $qntMaterias;

        public function __construct($f, $m, $b)
        {
            $this->qntFolhas = $f;
            $this->qntMaterias = $m;
            $this->emBranco = $b;
        }

        public function rabiscar($text){
            $this->emBranco = false;
            return $text . "<br>";
        }
    }
?>