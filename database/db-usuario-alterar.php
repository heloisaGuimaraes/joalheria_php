<?php
require_once '../configs/autoload.inc.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];

$nascimento = explode("/", $_POST['dataNascimento']);
$dataNascimento = $nascimento[2] ."-". $nascimento[1] ."-". $nascimento[0];

$telefone= $_POST['telefone'];
$endereco= $_POST['endereco'];



$usuario = new UsuarioDAO();
$usuario->setNome($nome);
$usuario->setEmail($email);
$usuario->setSenha($senha);
$usuario->setCpf($cpf);
$usuario->setDataNascimento($dataNascimento);
$usuario->setTelefone($telefone);
$usuario->setEndereco($endereco);

$usuario->alterar($id);


// header("Location: ../view/listar-proprietarios.php");
?>