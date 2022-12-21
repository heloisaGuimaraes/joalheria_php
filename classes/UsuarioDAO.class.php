<?php
require_once 'Conexao.class.php';
require_once 'Usuario.class.php';
require_once 'IDatabase.php';


class UsuarioDAO extends Usuario implements IDatabase {

	function adicionar() {
		$sql = "INSERT INTO usuarios (nome, email, senha, cpf, dataNascimento, telefone, endereco) VALUES (:nome, :email, :senha, :cpf, :dataNascimento, :telefone, :endereco)";
		
		$stmt = Conexao::prepare($sql);
        //date_format(str_to_date(dataNascimento, '%Y-%m-%d'), '%d/%m/%Y')
		
        $stmt->execute(array(
			':nome'=> $this->getNome(),
            ':email'=> $this->getEmail(),
            ':senha'=> $this->getSenha(),
            ':cpf'=> $this->getCpf(),
			':dataNascimento'=> $this->getDataNascimento(),
            ':telefone'=> $this->getTelefone(),
            ':endereco'=> $this->getEndereco()
			));
	}

	// date_format(str_to_date(dataNascimento, '%Y-%m-%d'), '%d/%m/%Y')
	function listar() {
		$sql = "SELECT *, date_format(str_to_date(dataNascimento, '%Y-%m-%d'), '%d/%m/%Y') AS data FROM usuarios ORDER BY id DESC";

		$stmt = Conexao::prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll();
	}

	// date_format(str_to_date(dataNascimento, '%Y-%m-%d'), '%d/%m/%Y') AS data
	function buscar($id) {
		$sql = "SELECT *, date_format(str_to_date(dataNascimento, '%Y-%m-%d'), '%d/%m/%Y') AS data FROM usuarios WHERE id = :id";

		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();
		Conexao::close();


		return $stmt->fetch();
	}

	function alterar($id) {
		$sql = "UPDATE usuarios
        SET nome = :nome, 
        email = :email,
		senha = :senha,
		cpf = :cpf,
		dataNascimento = :dataNascimento,
		telefone = :telefone,
		endereco = :endereco 

        WHERE id = :id";

		$stmt = Conexao::prepare($sql);
		$stmt->execute(array(
			':id' => $id,
			':nome'=> $this->getNome(),
            ':email'=> $this->getEmail(),
            ':senha'=> $this->getSenha(),
            ':cpf'=> $this->getCpf(),
            ':dataNascimento'=> $this->getDataNascimento(),
            ':telefone'=> $this->getTelefone(),
            ':endereco'=> $this->getEndereco()
			));
	}

	function remover($id) {
		$sql = "DELETE FROM usuarios WHERE id = :id";

		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();
	}
	function ultimoUsuario() {
		$sql = "SELECT MAX(id) FROM usuarios";
		
		$stmt = Conexao::prepare($sql);
		$stmt->execute();

		return $stmt->fetch();
	}
	
}
?>