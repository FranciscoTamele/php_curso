<?php

class Carro{

    public $marca;
    public $ano_fabrico;
    public $preco;

    public function __construct($marca,$ano_fabrico,$preco){
        $this->marca=$marca;
        $this->ano_fabrico=$ano_fabrico;
        $this->preco=$preco;
    }

//    public function setMarca($marca){
//        $this->marca=$marca;
//    }
//
//    public function setAno_fabrico($ano_fabrico){
//        $this->ano_fabrico=$ano_fabrico;
//    }
//
//    public function setPreco($preco){
//        $this->preco=$preco;
//    }
//
//    public function getMarca(){
//        return $this->marca;
//    }
//
//    public function getAno_fabrico(){
//        return $this->ano_fabrico;
//    }
//
//    public function getPreco(){
//        return $this->preco;
//    }

}
