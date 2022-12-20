<?php
require_once '../classes/autoload.inc.php';

	$id = $_GET['id'];

	$usuario = new UsuarioDAO();
	$usuario->remover($id);

	header("Location: ../view/listar-usuarios.php");

?>