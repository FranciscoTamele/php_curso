<?php
	
	class Pessoa{

	    /**@word const
         * Para criar uma constante declaramos 'const' antes do nome da constante.
         * Para acessar o conteudo de uma constante dentro do escopo da classe usamos
         * a palavra 'self::nome_constante'.
         */
		const nome="Francisco";

		public function exibirNome(){
			echo self::nome; 
		}
	}

	class Apelido extends Pessoa{

		 const nome="Tamele";

		 public function exibirNome(){
		     /**@word parent:: and self::
              * Em caso de tivermos duas constantes com mesmo nome, na classe mae e filha,
              * para nos referenciarmos a constante da classe filha usamos 'self::' e para
              * nos referenciarmos a constante da classe mae 'parent::'.
		      */
		 	echo self::nome;
		 	echo "<hr>".parent::nome;
		 }
	}

	$france=new Apelido();
	$france->exibirNome();

?>