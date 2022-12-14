<?php
require_once '../classes/autoload.inc.php';

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$peso = $_POST['peso'];
$tamanho = $_POST['tamanho'];
$largura = $_POST['largura'];
$espessura = $_POST['espessura'];
$medida = $_POST['medida'];
$tipoProduto = $_POST['tipoProduto'];
$pathImagem = $_POST['pathImagem'];


$produto = new ProdutoDAO();
$produto -> setNome($nome);
$produto -> setDescricao($descricao);
$produto -> setPreco($preco);
$produto -> setPeso($peso);
$produto -> setTamanho($tamanho);
$produto -> setLargura($largura);
$produto -> setEspessura($espessura);
$produto -> setMedida($medida);
$produto -> setTipoProduto($tipoProduto);
$produto -> setPathImagem($pathImagem);

$produto->adicionar();


header("Location: ../index.php");
