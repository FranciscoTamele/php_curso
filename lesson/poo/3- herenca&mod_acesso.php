<?php

	/** @Heranca_Modificadores_de_acesso:
	*
	* public - acessivel dentro e fora da classe
	* protected - acessivel dentro da classe e para as classe que extendem a mesma
	* private - acessivel apenas dentro da classe
	*/


class Automovel{

	protected $marca;
	protected $ano;

	public function setMarca($marca){
		$this->marca=$marca;
	}

	public function setAno($ano){
		$this->ano=$ano;
	}

	public function getMarca(){
		return $this->marca;
	}

	public function getAno(){
		return $this->ano;
	}

}

class Carro extends Automovel{

    private $cor_volante;

    public function getCor_Volante(){
        return $this->cor_volante;
    }

    public function setCor_volante($cor_volante): void{
        $this->cor_volante = $cor_volante;
    }

}

class Moto extends Automovel{

}

$carro=new Carro();

$carro->setMarca("Toyota");
$carro->setAno("2020");
$carro->setCor_volante("Castanho");

var_dump($carro);

?>