<?php 
    require_once"./Video.php";
    require_once"./Gafanhoto.php";

    class Visualizacao {
        private $expectador;
        private $filme;

        function __construct($expectador, $filme)
        {
            $this->expectador = $expectador;;
            $this->filme = $filme;

            $this->expectador->viuMaisUm();
            $this->filme->setViews($this->filme->getViews() + 1);
        }

        public function avaliar(){
            $this->filme->setAvaliacao(5);
        }

        public function avaliarNota($nota){
            $this->filme->setAvaliacao($nota);
        }

        public function avaliarPorc($porc){
            $nova = 0;

            if($porc < 20){
                $nova = 3;
            }elseif($porc <= 50) {
                $nova = 5;
            }elseif($porc <= 90 ){
                $nova = 9;
            }else{
                $nova = 10;
            }

            $this->filme->setAvaliacao($nova);
        }

        public function getExpectador(){
            return $this->expectador;
        }

        public function setExpectador($expectador){
            $this->expectador = $expectador;
        }

        public function getFilme(){
            return $this->filme;
        }

        public function setFilme($filme){
            $this->filme = $filme; 
        }

    }
?>