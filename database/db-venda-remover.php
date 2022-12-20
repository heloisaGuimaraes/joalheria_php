<?php
	require_once '../classes/autoload.inc.php';

	$id = $_GET['id'];

	$produto = new ItemVendaDAO();
	$produto->remover($id);


	header("Location: ../view/relatorio-vendas.php");
	


?>