<?php

	 namespace classe; // O namespace e aleatorio nao ha um padrao para defini-lo
	
	class Produto{

		public function exibirInfo(){
			echo "Pasta classe produto !<br>";
		}

	}

	$produto=new Produto();
	$produto->exibirInfo();

?>