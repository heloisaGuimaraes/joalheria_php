<?php
    require_once '../classes/autoload.inc.php';


    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);


    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];

    // $nascimento = explode("/", $_POST['dataNascimento']);
    // $dataNascimento = $nascimento[2] ."-". $nascimento[1] ."-". $nascimento[0];
    $dataNascimento = $_POST['dataNascimento'];
    echo $dataNascimento;

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

    $usuario->adicionar();

    header("Location: ../view/listar-usuarios.php");
?>