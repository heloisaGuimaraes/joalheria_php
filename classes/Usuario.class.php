<?php
class Usuario{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $cpf;
    private $dataNascimento;
    private $telefone;
    private $endereco;
    //nome, email, senha, cpf, dataNascimento, telefone, endereco

    // public function __construct($nome, $email, $senha, $cpf, $dataNascimento, $telefone, $endereco){
    //     $this->nome = $nome;
    //     $this->email = $email;
    //     $this->senha = $senha;
    //     $this->cpf = $cpf;
    //     $this->dataNascimento = $dataNascimento;
    //     $this->telefone = $telefone;
    //     $this->endereco = $endereco;
    // }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }
    
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    public function getDataNascimento(){
        return $this->dataNascimento;
    }
    public function setDataNascimento($dataNascimento){
        $this->dataNascimento = $dataNascimento;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    


}
?>