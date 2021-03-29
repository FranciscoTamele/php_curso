<?php

	class Pessoa{

		public $idade;

		public function __clone(){
			echo "Chamou clone !";
		}
	}

	$pessoa=new Pessoa();

	$pessoa->idade=24;
	$pessoa1=$pessoa;
	$pessoa1->idade=19;

	/** Qual sera a saida???
	 * A saida sera 19 pois o objecto $pessoa1 nao e uma nova
     * instancia mas sim um objecto que faz referencia ao objecto $pessoa
     */
	echo $pessoa->idade."<br>";

	/** @word clone
     * Mas em vez de referencia podemos fazer clone que pressegue-se:
     */
	
	$pessoa3=clone $pessoa;

	$pessoa3->idade=25;

    /**
     * A saida sera 19 atribuido acima e nao 25 pois o objecto $pessoa3 nao faz
     * referencia ao objecto $pessoa, mas sim e um clone.
     * Ao utilizar palavra chave clone um metodo e chamado automaticamente
     */
	echo $pessoa->idade;
?>