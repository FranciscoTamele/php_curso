<html>
	<head>
		
	</head>
	<body>
		<?php
		
			/*
				Vamos criar variaveis e verificar se sao de um certo tipo !!!
			*/

			$faculdade= "Eduardo Mondlane";

			/* metodo *var_dump* imprime a descricao 	da varial e o conteudo
			*/

			/*
				verificar se e string
			*/

			var_dump($faculdade);

			if(is_string($faculdade)):
				echo "E uma string.";
			else:
				echo "Nao e uma string.";
			endif;

			echo "<hr>";

			/*
				verificar se e inteiro
			*/
			$idade = 24;

			var_dump($idade);

			if(is_int($idade)):
				echo "E um inteiro.";
			else:
				echo "Nao e um inteiro.";
			endif;

			/*
				verificar se e float
			*/

			/* 
				A verifcacao tambem retorna um true para o metodo *is_double*
			*/

			echo "<hr>";

			$altura=1.8;

			var_dump($altura);

			if(is_float($altura)):
				echo "E um float.";
			else:
				echo "Nao e um float.";
			endif;

			echo "<hr>";

			/*
				verificar se e float
			*/

			$flag=true;
			var_dump($flag);

			if(is_bool($flag)):
				echo "E um booleano.";
			else:
				echo "Nao e um booleano.";
			endif;

			echo "<hr>";

			/*
				verificar se e array
			*/

			/*
				No php e possivel colocar dados de tipos diferentes no mesmo array
			*/

			$telemoveis= array("Tecno","Samsung","Nokia","Hwawei",8,true);

			var_dump($telemoveis);

			if(is_array($telemoveis)):
				echo "E um array.";
			else:
				echo "Nao e um array.";
			endif;

			echo "<hr>";

			/*
				verificar se e object
			*/

			class Pessoa{

				private $nome;

				function setNome($nome){
					$this->$nome=$nome;
				}

			}

			$pessoa=new Pessoa();

			$pessoa->setNome("Francisco");

			var_dump($pessoa);

		?>
	</body>
</html>