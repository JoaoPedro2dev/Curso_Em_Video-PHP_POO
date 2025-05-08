<?php 
    require_once"./AcoesVideo.php";

    class Video implements AcoesVideo{
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;

        function __construct($titulo)
        {
            $this->titulo = $titulo;
            $this->avaliacao = 1;
            $this->views = 0;
            $this->curtidas = 0;
            $this->reproduzindo = false;
        }

        public function play()
        {
            // $this->setViews($this->getViews() + 1);
            $this->setReproduzindo(true);
            echo "<p>Vídeo rodadno</p>";
        }

        public function pause()
        {
            $this->setReproduzindo(false);
            echo "<p>Vídeo pausado</p>";
        }

        public function like()
        {
            $this->setCurtidas($this->getCurtidas() + 1);
            echo "Vídeo curtido, total de curtidas: {$this->getCurtidas()}";
        }        

        public function getTitulo() {
            return $this->titulo;
        }
        
        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }
        
        public function getAvaliacao() {
            return $this->avaliacao;
        }
        
        public function setAvaliacao($avaliacao) {
            $this->avaliacao = $avaliacao;
        }
        
        public function getViews() {
            return $this->views;
        }
        
        public function setViews($views) {
            $this->views = $views;
        }
        
        public function getCurtidas() {
            return $this->curtidas;
        }
        
        public function setCurtidas($curtidas) {
            $this->curtidas = $curtidas;
        }
        
        public function isReproduzindo() {
            return $this->reproduzindo;
        }
        
        public function setReproduzindo($reproduzindo) {
            $this->reproduzindo = $reproduzindo;
        }
        
    }
?>