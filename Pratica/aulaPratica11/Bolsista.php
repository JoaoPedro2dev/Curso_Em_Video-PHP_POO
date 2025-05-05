<?php 
    require_once"Aluno.php";

    class Bolsista extends Aluno{
        //Atributos
        private $bolsa;

        //Métodos
        public function renovarBolsa(){
            echo "Bolsa do aluno {$this->nome} renovada";
        }

        //Sobrescrever
        public function pagarMensalidade()
        {
            echo "Aluno {$this->nome} é bolsista, possui desconto";
        }

        //Métodos especiais
        public function getBolsa(){
            return $this->bolsa;
        }

        public function setBolsa($v){
            $this->bolsa = $v;
        }
    }
?>