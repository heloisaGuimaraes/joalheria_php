<?php
require_once '../classes/autoload.inc.php';

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
session_start();


$dataVenda = date('d-m-y h:i:s');
$valorTotal = $_POST['valorTotal'];
$formaPagamento = $_POST['formaPagamento'];
$usuarioId = $_POST['usuarioId'];


$venda = new VendaDAO();
$venda -> setDataVenda($dataVenda);
$venda -> setValorTotal($valorTotal);
$venda -> setFormaPagamento($formaPagamento);
$venda -> setUsuarioId($usuarioId);

$venda->adicionar();
$vendaId=$venda->ultimaVenda();

var_dump($vendaId[0]);

//=================================
$itemVenda = new ItemVendaDAO();


$max = sizeof($_SESSION['itensVendidos']);
for($i = 0; $i < $max;$i++)
{
    $quantidade = $_SESSION['itensVendidos'][$i]['quantidade'];
    $valorTotal = $_SESSION['itensVendidos'][$i]['valorTotal'];
    $produtoId = $_SESSION['itensVendidos'][$i]['produtoId'];
   
    $itemVenda -> setQuantidade($quantidade);
    $itemVenda -> setValorTotal($valorTotal);
    $itemVenda -> setProdutoId($produtoId);
    $itemVenda -> setVendaId(strval($vendaId[0])); 
   

    $itemVenda->adicionar();
}


    header("Location: ../view/relatorio-vendas.php");

?>