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
		Conexao::close();

	}

	// date_format(str_to_date(dataNascimento, '%Y-%m-%d'), '%d/%m/%Y')
	function listar() {
		$sql = "SELECT 
			itsv.* 
			FROM itens_venda AS itsv
			ORDER BY id DESC";

		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		Conexao::close();


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
