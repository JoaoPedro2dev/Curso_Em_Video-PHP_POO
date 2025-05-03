<?php 
    class luta{
        //Atributos
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        //Métodos
        public function marcarLuta($l1, $l2){
            if($l1->getNome() == $l2->getNome()){
                return "Erro: Um lutador não pode lutar com ele mesmo";
                $this->setAprovada(false);
                $this->setDesafiado(null);
                $this->setDesafiante(null);
            }

            if($l1->getCategoria() != $l2->getCategoria()){
                return "Erro: Não pode ocorrer luta de categorias diferentes";
                $this->setAprovada(false);
                $this->setDesafiado(null);
                $this->setDesafiante(null);
            }
            
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);

            echo "luta agendada";
        }

        public function lutar(){
            if(!$this->getAprovada()){
                return "Erro: A luta não pode acontecer, não foi aprovada";
            }

            echo "A luta entre {$this->desafiado->getNome()} e {$this->desafiante->getNome()} começou";
            echo "Desafiado <br> {$this->desafiado->apresentar()}";
            echo "Desafiante <br> {$this->desafiante->apresentar()}<br>";
            echo "<h1>Resultado</h1>";

            $resultado = rand(0, 2);

            switch ($resultado){
                case 0:
                    echo "A luta empatou";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:
                    echo "O lutador {$this->desafiado->getNome()} foi o vencedor";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo "O lutador {$this->desafiante->getNome()} foi o vencedor";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
                default :
                    echo "Erro: algo inesperado aconteceu na luta";
            }
        }  

        //Métodos especiais
        public function getDesafiado(){
            return $this->desafiado;
        }

        public function setDesafiado($valor){
            $this->desafiado = $valor;
        }

        public function getDesafiante(){
            return $this->desafiante;
        }

        public function setDesafiante($valor){
            $this->desafiante = $valor;
        }

        public function getRound(){
            return $this->rounds;
        }

        public function setRound($valor){
            $this->rounds = $valor;
        }

        public function getAprovada(){
            return $this->aprovada;
        }

        public function setAprovada($valor){
            $this->aprovada = $valor;
        }
    }
?>