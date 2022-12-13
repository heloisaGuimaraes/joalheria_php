<?php
class Venda{
    private $id;
    private $dataVenda;
    private $valorTotal;
    private $formaPagamento;
    private $usuarioId;
    //data, valorTotal, formaPagamento, usuarioId
    
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getDataVenda(){
        return $this->dataVenda;
    }
    public function setDataVenda($dataVenda){
        $this->dataVenda = $dataVenda;
    }
    public function getValorTotal(){
        return $this->valorTotal;
    }
    public function setValorTotal($valorTotal){
        $this->valorTotal = $valorTotal;
    }
    public function getFormaPagamento(){
        return $this->formaPagamento;
    }
    public function setFormaPagamento($formaPagamento){
        $this->formaPagamento = $formaPagamento;
    }
    public function getUsuarioId(){
        return $this->usuarioId;
    }
    public function setUsuarioId($usuarioId){
        $this->usuarioId = $usuarioId;
    }
    
}
?>