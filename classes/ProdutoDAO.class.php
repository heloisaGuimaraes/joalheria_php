<?php
require_once 'Conexao.class.php';
require_once 'Produto.class.php';
require_once 'IDatabase.php';


class ProdutoDAO extends Produto implements IDatabase {
    //nome, descricao, preco, peso, tamanho, largura, espessura, medida, tipoProduto

	function adicionar() {
		$sql = "INSERT INTO produtos (nome, descricao, preco, peso, tamanho, largura, espessura, medida, tipoProduto, pathImagem) VALUES (:nome, :descricao, :preco, :peso, :tamanho, :largura, :espessura, :medida, :tipoProduto, :pathImagem)";
		
		$stmt = Conexao::prepare($sql);
        //date_format(str_to_date(dataNascimento, '%Y-%m-%d'), '%d/%m/%Y')
		
        $stmt->execute(array(
			':nome'=> $this->getNome(),
            ':descricao'=> $this->getDescricao(),
            ':preco'=> $this->getPreco(),
            ':peso'=> $this->getPeso(),
			':tamanho'=> $this->getTamanho(),
            ':largura'=> $this->getLargura(),
            ':espessura'=> $this->getEspessura(),
            ':medida'=> $this->getMedida(),
            ':tipoProduto'=> $this->getTipoProduto(),
			':pathImagem'=> $this->getPathImagem()
			));
	}

	// date_format(str_to_date(dataNascimento, '%Y-%m-%d'), '%d/%m/%Y')
	function listar() {
		$sql = "SELECT * FROM produtos ORDER BY id DESC";

		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		Conexao::close();

		return $stmt->fetchAll();
	}

	// date_format(str_to_date(dataNascimento, '%Y-%m-%d'), '%d/%m/%Y') AS data
	function buscar($id) {
		$sql = "SELECT * FROM produtos WHERE id = :id";

		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return $stmt->fetch();
	}

	function alterar($id) {
		$sql = "UPDATE produtos
        SET nome = :nome, 
        descricao = :descricao,
        preco = :preco,
        peso = :peso,
        tamanho = :tamanho,
        largura = :largura,
        espessura = :espessura,
        medida = :medida,
        tipoProduto = :tipoProduto,
		pathImagem = :pathImagem
        WHERE id = :id";

		$stmt = Conexao::prepare($sql);
		$stmt->execute(array(
			':id' => $id,
			':nome'=> $this->getNome(),
            ':descricao'=> $this->getDescricao(),
            ':preco'=> $this->getPreco(),
            ':peso'=> $this->getPeso(),
			':tamanho'=> $this->getTamanho(),
            ':largura'=> $this->getLargura(),
            ':espessura'=> $this->getEspessura(),
            ':medida'=> $this->getMedida(),
            ':tipoProduto'=> $this->getTipoProduto(),
			':pathImagem'=> $this->getPathImagem()
			));
	}

	function remover($id) {
		$sql = "DELETE FROM produtos WHERE id = :id";

		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();
	}
	
}
?>