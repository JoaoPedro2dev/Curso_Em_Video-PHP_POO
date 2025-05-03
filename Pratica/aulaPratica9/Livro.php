<?php 
    require_once"./Publicacao.php";
    require_once"./Pessoa.php";

    class Livro implements Publicacao{
        //Atributos
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;    

        public function __construct($t, $a, $tp, $l)
        {
            $this->titulo = $t;
            $this->autor = $a;
            $this->totPaginas = $tp;
            $this->pagAtual = 1;
            $this->aberto = false;
            $this->leitor = $l->getNome();
        }

        //Métodos
        public function detalhes(){
            echo "<hr>";
            echo "Livro \"{$this->getTitulo()}\" escrito por \"{$this->getAutor()}\"";
            echo "<br> Quem está lendo é: {$this->getLeitor()}";
            echo "<br> Página atual do leitor: {$this->getPagAtual()}";
            echo "<br> Quantidade de paginas: {$this->getTotalPaginas()}";
        }

        //Métodos especiais
        public function getTitulo(){
            return $this->titulo;
        } 

        public function setTitulo($v){
            $this->titulo = $v;
        }

        public function getAutor(){
            return $this->autor;
        }

        public function setAutor($v){
            $this->autor = $v;
        }
        
        public function getTotalPaginas(){
            return $this->totPaginas;
        }

        public function setTotalPaginas($v){
            $this->totPaginas = $v;
        }

        public function getPagAtual(){
            return $this->pagAtual;
        }

        public function setPagAtual($v){
            $this->pagAtual = $v;
        }

        public function getAberto(){
            return $this->aberto;
        }

        public function setAberto($v){
            $this->aberto = $v;
        }

        public function getLeitor(){
            return $this->leitor;
        }

        public function setLeitor($v){
            $this->leitor = $v;
        }

        //Métodos abstratos
        public function abrir(){
            $this->setAberto(true); 
        }

        public function fechar(){
            $this->setAberto(false);
        }

        public function folhear($p){
            if($p > $this->getTotalPaginas()){
                $this->setPagAtual(1);
            }else if($p <= $this->getTotalPaginas() && $this->getAberto()){
                $this->setPagAtual($p);
            }
        }

        public function avancarPag(){
            if($this->getPagAtual() < $this->getTotalPaginas() && $this->getAberto()){
                $this->setPagAtual($this->getPagAtual() + 1);
            }
        }

        public function voltarPag(){
            if($this->getPagAtual() > 1 && $this->getAberto()){
                $this->setPagAtual($this->getPagAtual() - 1);
            }
        }
    }   

?>