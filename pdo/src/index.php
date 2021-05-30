<?php
require 'Produto.php';
$produto = new Produto();

switch ($_GET['operacao']) {
    case 'list':
        echo("<h3>Produtos: </h3>");
        foreach ($produto->list() as $value) {
            echo "Id: " . $value['id'] . "<br> Produto: " . $value['descricao'] . "<hr>";
        }
        break;
    case 'insert':
        $status = $produto->insert("Bicicleta");

        if (!$status) {
            echo "Não foi possivel realizar o cadastro";
            return false;
        }
        else {
            echo "Cadastro realizado com sucesso!";
        }
        break;
    case 'update':
        $status = $produto->update("Bicicleta", 1);

        if (!$status) {
            echo "Não foi possivel realizar a atualização";
            return false;
        }
        else {
            echo "Atualização realizada com sucesso!";
        }
        break;
    case 'delete':
        $status = $produto->delete(1);

        if (!$status) {
            echo "Não foi possivel excluir os dados!";
            return false;
        }
        else {
            echo "Dados exluidos!";
        }
        break;
}
