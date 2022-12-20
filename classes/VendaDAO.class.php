<?php
require_once 'Conexao.class.php';
require_once 'Venda.class.php';
require_once 'IDatabase.php';


class VendaDAO extends Venda implements IDatabase {

	function adicionar() {
		$sql = "INSERT INTO vendas (dataVenda, valorTotal, formaPagamento, usuarioId)VALUES (:dataVenda, :valorTotal, :formaPagamento, :usuarioId)";
		
		$stmt = Conexao::prepare($sql);
        //date_format(str_to_date(dataNascimento, '%Y-%m-%d'), '%d/%m/%Y')
		
        $stmt->execute(array(
			':dataVenda'=> $this->getDataVenda(),
            ':valorTotal'=> $this->getValorTotal(),
            ':formaPagamento'=> $this->getFormaPagamento(),
            ':usuarioId'=> $this->getUsuarioId(),
			));
	}

	// date_format(str_to_date(dataNascimento, '%Y-%m-%d'), '%d/%m/%Y')
	function listar() {
		$sql = "SELECT 
			u.nome AS usuario_nome, v.*, 
			date_format(str_to_date(dataVenda, '%Y-%m-%d'), '%d/%m/%Y') AS data
			FROM vendas AS v, usuarios AS u
			WHERE v.usuarioId = u.id
			ORDER BY id DESC";

		$stmt = Conexao::prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll();
	}

	// date_format(str_to_date(dataNascimento, '%Y-%m-%d'), '%d/%m/%Y') AS data
	function buscar($id) {//buscando venda em especifico, by id
		$sql = "SELECT 
			u.nome AS usuario_nome, v.*, 
			date_format(str_to_date(dataVenda, '%Y-%m-%d'), '%d/%m/%Y') AS data
			FROM vendas AS v, usuarios AS u
			WHERE id = :id";

		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return $stmt->fetch();
	}

	function alterar($id) {
		// $sql = "UPDATE usuarios
        // SET nome = :nome, 
        // email = :email,
		// senha = :senha,
		// cpf = :cpf,
		// dataNascimento = :dataNascimento,
		// telefone = :telefone,
		// endereco = :endereco 

        // WHERE id = :id";

		// $stmt = Conexao::prepare($sql);
		// $stmt->execute(array(
		// 	':id' => $id,
		// 	':nome'=> $this->getNome(),
        //     ':email'=> $this->getEmail(),
        //     ':senha'=> $this->getSenha(),
        //     ':cpf'=> $this->getCpf(),
        //     ':dataNascimento'=> $this->getDataNascimento(),
        //     ':telefone'=> $this->getTelefone(),
        //     ':endereco'=> $this->getEndereco()
		// 	));
	}

	function remover($id) {
		// $sql = "DELETE FROM usuarios WHERE id = :id";

		// $stmt = Conexao::prepare($sql);
		// $stmt->bindParam(":id", $id);
		// $stmt->execute();
	}
	
}
?>