<?php
	require_once '../configs/autoload.inc.php';

	$id = $_GET['id'];

	$usuario = new UsuarioDAO();
	$usuario->remover($id);

	// header("Location: ../view/listar-proprietarios.php");
?>