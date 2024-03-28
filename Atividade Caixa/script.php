<?php
$nome =  $_POST['nome'];
$nmProduto1 = $_POST['nmProduto1'];
$vlProduto1 = $_POST['vlProduto1'];
$nmProduto2 = $_POST['nmProduto2'];
$vlProduto2 = $_POST['vlProduto2'];
$vlPagamento = $_POST['vlPagamento'];

$qtGastos = $vlProduto1 + $vlProduto2;
$troco = $vlPagamento - $qtGastos;

echo "<b>Cliente:  </b> $nome";
echo "<br>";
echo "<br>";
echo "<b>Gastos do Cliente:  </b> $qtGastos";
echo "<br>";
echo "<br>";
echo "<b>Troco do Cliente:  </b> $troco";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

print_r ($_POST);




?>