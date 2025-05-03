<?php 
    class Lutador{
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        public function __construct($no, $na, $i, $a, $p, $v, $d, $e){
            $this->nome = $no;
            $this->nacionalidade = $na;
            $this->idade = $i;
            $this->altura = $a;
            $this->setPeso($p);
            $this->vitorias = $v;
            $this->derrotas = $d;
            $this->empates = $e;
        }

        //metodos
        public function apresentar(){
            echo "
            <hr>
            Lutador: {$this->getNome()}, <br>
            {$this->getNacionalidade()} de {$this->getIdade()} anos, <br>
            medindo {$this->getAltura()}m de altura, pesando {$this->getPeso()}Kg. <br>
            Histórico: {$this->getVitorias()} Vitórias, {$this->getDerrotas()} Derrotas e {$this->getEmpates()} Empates <br><br>";
        }

        public function status(){
            echo "{$this->getNome()},
            {$this->getIdade()} anos,
            medindo {$this->getAltura()}m de altura,
            pesando {$this->getPeso()}Kg,
            Histórico: {$this->getVitorias()} Vitórias, {$this->getDerrotas()} Derrotas e {$this->getEmpates()} Empates <br><br>";
        }

        public function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }

        //Métodos especiais
        public function getNome(){
            return $this->nome;
        }

        public function setNome($v){
            $this->nome = $v;
        }

        public function getNacionalidade(){
            return $this->nacionalidade;
        }

        public function setNacionalidade($v){
            $this->nacionalidade = $v;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setIdade($v){
            $this->idade = $v;
        }

        public function getAltura(){
            return $this->altura;
        }

        public function setAltura($v){
            $this->altura = $v;
        }

        public function getPeso(){
            return $this->peso;
        }

        public function setPeso($v){
            $this->peso = $v;

            $this->setCategoria($v);
        }

        public function getCategoria(){
            return "Categoria: ".$this->categoria;
        }

        private function setCategoria($v){
            $this->categoria = $v;

            if($v < 66.2){
                $this->categoria = "Peso Leve";
            }else if($v <= 85.3 ){
                $this->categoria = "Peso Médio";
            }else{
                $this->categoria = "Peso pesado";
            }
        }

        public function getVitorias(){
            return $this->vitorias;
        }

        public function setVitorias($v){
            $this->vitorias = $v;
        }

        public function getDerrotas(){
            return $this->derrotas;
        } 

        public function setDerrotas($v){
            $this->derrotas = $v;
        }

        public function getEmpates(){
            return $this->empates;
        }

        public function setEmpates($v){
            $this->empates = $v;
        }
    }
?>