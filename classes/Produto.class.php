<?php
class Produto{
    private $id;
    private $nome;
    private $descricao;
    private $preco;
    private $peso;
    private $tamanho;
    private $largura;
    private $espessura;
    private $medida;
    private $tipoProduto;
    private $pathImagem;
    //nome, descricao, preco, peso, tamanho, largura, espessura, medida, tipoProduto

    // public function __construct($nome, $descricao, $preco, $peso, $tamanho, $largura, $espessura, $medida, $tipoProduto, $pathImagem){
    //     $this->nome = $nome;
    //     $this->descricao = $descricao;
    //     $this->preco = $preco;
    //     $this->peso = $peso;
    //     $this->tamanho = $tamanho;
    //     $this->largura = $largura;
    //     $this->espessura = $espessura;
    //     $this->medida = $medida;
    //     $this->tipoProduto = $tipoProduto;
    //     $this->pathImagem = $pathImagem;
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
    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function setPreco($preco){
        $this->preco = $preco;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($peso){
        $this->peso = $peso;
    }
    public function getTamanho(){
        return $this->tamanho;
    }
    public function setTamanho($tamanho){
        $this->tamanho = $tamanho;
    }
    public function getLargura(){
        return $this->largura;
    }
    public function setLargura($largura){
        $this->largura = $largura;
    }
    public function getEspessura(){
        return $this->espessura;
    }
    public function setEspessura($espessura){
        $this->espessura = $espessura;
    }
    public function getMedida(){
        return $this->medida;
    }
    public function setMedida($medida){
        $this->medida = $medida;
    }
    public function getTipoProduto(){
        return $this->tipoProduto;
    }
    public function setTipoProduto($tipoProduto){
        $this->tipoProduto = $tipoProduto;
    }
    
    public function getPathImagem(){
        return $this->pathImagem;
    }
    public function setPathImagem($pathImagem){
        $this->pathImagem = $pathImagem;
    }
}
?>