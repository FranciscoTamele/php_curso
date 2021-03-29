<?php

	/** @Classes_abstractas_e_metodos_abstractos
     * Sao classes modelo, nao podem ser instanciadas
	 * e metodos abstractos e de caracter obrigatorio a sua implementacao nas classes que extendem a mesma
	 * metodos abstractos nao tem implementacao na sua declaracao
     */

	abstract class Automovel{

		protected $marca;
		protected $ano;

		abstract public function deslocar();

		abstract public function parou();
	}

	class Carro extends Automovel{

		public function deslocar(){ // Esse metodo e protegido entao nao e acessivel directamente fora da classe
			echo "deslocou !<br>";
		}

		public function parou(){
			echo "Parou !<br>";
		}

	}

	// $auto=new Automovel();    *** Retornara uma exececao pois e uma classe abstracta e nao pode ser instanciada

	$carro=new Carro();

	$carro->deslocar();
	$carro->parou();

?>