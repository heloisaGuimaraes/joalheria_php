<?php

class ItemVenda{
    private $id;
    private $quantidade;
    private $valorTotal;
    private $produtoId;
    private $vendaId;
    //quantidade, valorTotal, produtoId, vendaId
    
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getQuantidade(){
        return $this->quantidade;
    }
    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }
    public function getValorTotal(){
        return $this->valorTotal;
    }
    public function setValorTotal($valorTotal){
        $this->valorTotal = $valorTotal;
    }
    public function getProdutoId(){
        return $this->produtoId;
    }
    public function setProdutoId($produtoId){
        $this->produtoId = $produtoId;
    }
    public function getVendaId(){
        return $this->vendaId;
    }
    public function setVendaId($vendaId){
        $this->vendaId = $vendaId;
    }
}
?>