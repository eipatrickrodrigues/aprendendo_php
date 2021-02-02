<?php

class ContaBanco{

    // Atributos da conta bancária

    public $numConta;
    protected $tipo;
    private $nomeDono;
    private $saldo;
    private $status;

    // Método Construtor

    public function ContaBanco(){

        $this->setSaldo(0);
        $this->setStatus(false);
    }


    // Métodos

    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);

        if($t == "CC"){
            $this->setSaldo(50);
        }elseif($t == "CP"){
            $this->setSaldo(150);
        }

    }

    public function fecharConta(){
        if ($this->getSaldo()>0){
            echo "Saldo atual: R$ ". $this->getSaldo();
            echo "Necessário zerar a conta.";
        }else if($this->getSaldo()<0){
            echo "Saldo atual: R$ ". $this->getSaldo();
            echo "Necessário regularização do débito pendente.";
        }else if($this->getSaldo() == 0){
            echo "Saldo atual: R$ ". $this->getSaldo();
            $this->setStatus(false);
            echo "Conta encerrada.";
        }
    }

    public function sacar($v){

        if ($this->getStatus() == false){
            echo "Conta inativa, favor entrar em contato para regularização.";
        }else{

            if ($this->getSaldo() >= $v){
               $this->setSaldo( $this->getSaldo() - $v );
            }else{
                echo "Saldo insuficiente";
            }

        }

    }

    public function depositar($v){

        if ($this->getStatus() == true){
            $this->setSaldo( $this->getSaldo() + $v );
        }else{
            echo "Conta inativa, favor entrar em contato para regularização.";
        }
    }

    public function pagarMensalidade(){

        if ($this->getStatus() == true){

            if($this->getTipo() == "CC"){
                    $mensal = 12;
                    echo "Valor a pagar: R$$mensal.";
                }else{
                    $mensal = 20;
                    echo "Valor a pagar: R$$mensal.";
                }
        
            if ($this->getSaldo() >= $mensal){

                $this->setSaldo($this->getSaldo() - $mensal);
                echo "Saldo atual: R$ ".$this->getSaldo();

            } 
            
        }else{
            echo "Conta inativa, favor entrar em contato para regularização.";
        }
    }
    
    // Setters

    public function setNumConta($numero){
        $this->numConta = $numero;
    }

    public function setTipo($t){
        $this->tipo = $t;
    }

    public function setNomeDono($nome){
        $this->nome = $nome;
    }
 
    public function setSaldo($valor){
        $this->saldo = $valor;
    }

    public function setStatus($situacao){
        $this->status = $situacao;
    }


    // Getters

    public function getNumConta(){
        return $this->numConta;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function getNomeDono(){
        return $this->nomeDono;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function getStatus(){
        return $this->status;
    }














}