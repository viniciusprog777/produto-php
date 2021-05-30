<?php

class ContaBancaria {
    private $banco;
    private $nomeTitular;
    private $numeroAgencia;
    private $numeroConta;
    private $saldo;


    public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }


    public function obterSaldo(){
        return "Seu saldo atual é: " . $this->saldo;
    }
    public function depositar($valor)
    {
        return $this->saldo += $valor;
    }
    public function sacar($valor)
    {
        return $this->saldo -= $valor;
    }
};

$conta = new ContaBancaria(
    "Bradesco",
    "Vinicius de Jesus",
    "3456",
    "12345-9",
    400.00
);

var_dump($conta->obterSaldo());

$conta->depositar(200);

var_dump($conta->obterSaldo());

$conta->sacar(500);

var_dump($conta->obterSaldo());