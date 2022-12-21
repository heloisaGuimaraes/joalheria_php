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
			Conexao::close();
		
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
		Conexao::close();


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
		Conexao::close();


		return $stmt->fetch();
	}

	function alterar($id) {
		
	}

	function remover($id) {
		
	}
	function ultimaVenda() {
		$sql = "SELECT MAX(id) FROM vendas";
		
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		Conexao::close();

		return $stmt->fetch();
	}
	
}
