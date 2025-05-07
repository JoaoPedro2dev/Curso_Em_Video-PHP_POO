<?php 
    require_once"Animais.php";

    class Mamifero extends Animais{
        protected $corPelo;

        public function emitirSom()
        {
            echo "<p>Som de mamifero</p>";
        }

        public function getCorPelo(){
            return $this->corPelo;
        }

        public function setCorPelo($corPelo){
            $this->corPelo = $corPelo;
        }
    }
?>