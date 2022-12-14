<?php
require_once '../classes/autoload.inc.php';


$splitTimeStamp = explode(" ", $_POST['dataVenda']);
$dtVenda = explode("/", $splitTimeStamp[0]);

$dataVenda = $dtVenda[2] ."-". $dtVenda[1] ."-". $dtVenda[0]." ". $splitTimeStamp[1];

$valorTotal = $_POST['valorTotal'];
$formaPagamento = $_POST['formaPagamento'];
$usuarioId = $_POST['usuarioId'];


$venda = new VendaDAO();
$venda -> setDataVenda($dataVenda);
$venda -> setValorTotal($valorTotal);
$venda -> setFormaPagamento($formaPagamento);
$venda -> setUsuarioId($usuarioId);

$venda->adicionar();


// header("Location: ../view/listar-proprietarios.php");
?>