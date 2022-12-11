<?php
require_once '../configs/autoload.inc.php';


$quantiadade = $_POST['quantidade'];
$valorTotal = $_POST['valorTotal'];
$produtoId = $_POST['produtoId'];
$vendaId = $_POST['vendaId'];

$itemVenda = new ItemVendaDAO();
$itemVenda -> setQuantidade($quantidade);
$itemVenda -> setValorTotal($valorTotal);
$itemVenda -> setProdutoId($produtoId);
$itemVenda -> setVendaId($vendaId);

$itemVenda->adicionar();


// header("Location: ../view/listar-proprietarios.php");
?>