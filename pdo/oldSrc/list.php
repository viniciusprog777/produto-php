<?php

$pdo = require("connect.php");
$sql = "select * from produtos";


echo("<h3>Produtos: </h3>");

foreach ($pdo->query($sql) as $key => $value) {
    echo 'Id: ' . $value['id'] . '<br> Descrição: ' . $value['descricao'] . "<hr>";
}