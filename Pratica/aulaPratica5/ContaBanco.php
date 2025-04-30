<?php 
    class  ContaBanco{
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function __construct($nome)
        {
            $this->status = false;
            $this->saldo = 0;
            $this->dono = $nome;
        }

        function abrirConta($valor){
            $this->setTipo($valor);
            $this->setStatus(true);

            if($this->getTipo() == "corrente"){
                $this -> setSaldo($this->getSaldo() + 50);
            }else if($this->getTipo() == "poupanca"){
                $this ->setSaldo($this->getSaldo() + 150);
            }else{
                return "Erro: tipo de conta não reconhecido";
            }
            
            return("Conta ".$this->getTipo()." criada");
        }

        public function fecharConta(){
            if($this->getStatus() == false){
                return "A conta já esta fechada";
            }

            if($this->getSaldo() == 0){
                $this->setStatus(false);
                return "Conta fechada com sucesso";
            }else if($this->getSaldo() > 0){
                return "Você não pode fechar uma conta com o saldo maior que 0";
            }else{
                return "Você não pode fechar uma conta com o saldo devedor";
            }
        }

        public function depositar($valor){
            if($this->getStatus() == true){
                $this->setSaldo($this->getSaldo() + $valor);
                return "Deposito de R$$valor realizado com sucesso";
            }else{
                return "Erro: conta fechada";
            }
        }

        public function sacar($valor){
            if($this->getSaldo() >= $valor){
                $this->setSaldo($this->getSaldo() - $valor);
                return "Saque de R$$valor realizado com sucesso";
            }else{
                return "Saldo insuficiente";
            }
        }

        public function pagarMensal(){
            if(!$this->getStatus()){
                return "Erro: não pode cobrar de conta fechada";
            }

            if($this->getTipo() == "corrente"){

                if($this->getSaldo() >= 12){
                    $this->setSaldo($this->getSaldo() - 12);
                    return "Mensalidade de R$12,00 cobrada";
                }

            }else if($this->getTipo() == "poupanca"){

                if($this->getSaldo() >= 150){
                    $this->setSaldo($this -> getSaldo() - 20);
                    return "Mensalidade de R$150,00 cobrada";
                }

            }else{
                return "Erro: não reconhecido outro tipo de conta para cobranças";
            }
        }

        //Metodos especiais
        public function getNumConta(){
            return $this->numConta;
        }

        public function setNumConta($valor){
            $this->numConta = $valor;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setTipo($valor){
            if($valor == "corrente" || $valor == "poupanca"){
                $this->tipo = $valor;
            }else{
                return "Erro: tipo de conta não reconhecido";
            }
        }

        public function getDono(){
            return $this->dono;
        }

        public function setDono($valor){
            $this->dono = $valor;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function setSaldo($valor){
            $this->saldo = $valor;
        }

        public function getStatus(){
            return $this->status;
        }

        public function setStatus($valor){

            if($valor == true || $valor == false){
                $this->status = $valor;
            }else{
                return "Erro: valor de status não reconhecido";
            }

        }
    }
?>