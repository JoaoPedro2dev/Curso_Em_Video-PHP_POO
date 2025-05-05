<?php 

abstract class Pessoas{
    //Atributos
    protected $nome;
    private $idade;
    private $sexo;

    //Métodos
    public final function fazerAni(){
        $this->setIdade($this->getIdade() + 1);
    }

    //Métodos especiais
    public function getNome(){
        return $this->nome;
    }

    public function setNome($v){
        $this->nome = $v;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($v){
        $this->idade = $v;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($v){
        $this->sexo = $v;
    }
}

?>