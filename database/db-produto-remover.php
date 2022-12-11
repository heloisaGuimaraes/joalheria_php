<?php
	require_once '../configs/autoload.inc.php';

	$id = $_GET['id'];

	$produto = new ProdutoDAO();
	$produto->remover($id);

	// header("Location: ../view/listar-proprietarios.php");
?>