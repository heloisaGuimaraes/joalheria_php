<?php
require_once '../configs/Conexao.class.php';
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
			WHERE itsv.vendaId = v.id";

		$stmt = Conexao::prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll();
	}

	// date_format(str_to_date(dataNascimento, '%Y-%m-%d'), '%d/%m/%Y') AS data
	function buscar($id) {//buscando item_venda em especifico, by id
        // $sql = "SELECT * FROM produtos WHERE id = :id";

        
		// $sql = "SELECT 
        //     v.formaPagamento AS forma_pagamento, p.nome AS produto_nome, itsv.*,
			
		// 	FROM vendas AS v, usuarios AS u
		// 	WHERE id = :id";

        // $sql = "SELECT 
        //     v.formaPagamento AS forma_pagamento, p.nome AS produto_nome, itsv.*, 
        //     FROM vendas AS v, produtos AS p, itens_venda AS itsv
        //     WHERE id = :id";


		// $stmt = Conexao::prepare($sql);
		// $stmt->bindParam(":id", $id);
		// $stmt->execute();

		// return $stmt->fetch();
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