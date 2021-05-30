<?php

class Venda {
    private $data;
    private $produto;
    private $quantidade;
    private $valorTotal;

    public function __construct($data, $produto, $quantidade, $valorTotal)
    {
        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;
    }
    public function exibirVenda()
    {
        return "Data da Venda: " . $this->data .
            "Produto: " . $this->produto . 
            "Quantidade: " . $this->quantidade .
            "Valor da Venda: " . $this->valorTotal;
    }
};

$venda = new Venda(
    "12-09-2020",
    "Pacote de Internet Boa",
    "1",
    75.00
);

echo($venda->exibirVenda());