<?php
require_once '../classes/autoload.inc.php';

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$dataNascimento = $_POST['dataNascimento'];
// $nascimento = explode("/", $_POST['dataNascimento']);
// $dataNascimento = $nascimento[2] ."-". $nascimento[1] ."-". $nascimento[0];

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


header("Location: ../view/info-usuario.php?id=$id");


?>