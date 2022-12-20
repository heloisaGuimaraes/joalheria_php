<?php
require_once 'Conexao.class.php';
require_once 'ItemVenda.class.php';
require_once 'IDatabase.php';

//quantidade, valorTotal, produtoId, vendaId

class ItemVendaDAO extends ItemVenda implements IDatabase {

	function adicionar() {
		$sql = "INSERT INTO itens_venda (quantidade, valorTotal, produtoId, vendaId) VALUES (:quantidade, :valorTotal, :produtoId, :vendaId)";
		
		$stmt = Conexao::prepare($sql);
        //date_format(str_to_date(dataNascimento, '%Y-%m-%d'), '%d/%m/%Y')
		
        $stmt->execute(array(
            ':quantidade' => $this->getQuantidade(),
            ':valorTotal'=>$this->getValorTotal(),
            ':produtoId'=>$this->getProdutoId(), 
            ':vendaId' => $this->getVendaId()
			));
	}

	// date_format(str_to_date(dataNascimento, '%Y-%m-%d'), '%d/%m/%Y')
	function listar() {
		$sql = "SELECT 
			v.formaPagamento AS forma_pagamento, p.nome AS produto_nome, itsv.*, 
			FROM vendas AS v, produtos AS p, itens_venda AS itsv
			WHERE itsv.vendaId = v.id
			ORDER BY id DESC";

		$stmt = Conexao::prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll();
	}

	function buscar($id) {//buscando item_venda em especifico, by id
        $sql = "SELECT 
			*
			FROM itens_venda, produtos
			WHERE itens_venda.produtoId = produtos.id AND itens_venda.vendaId = :id";

		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return $stmt->fetchAll();
	}

	function alterar($id) {
		
	}

	function remover($id) {
		// $sql = "DELETE FROM usuarios WHERE id = :id";

		// $stmt = Conexao::prepare($sql);
		// $stmt->bindParam(":id", $id);
		// $stmt->execute();
	}
	
}
?>