<html>
	<head>
		
	</head>
	<body>
		<?php
			
			// As constantes nao podem assumir outro valor durante a execucao do codigo, a tentativa de atribuicao de um outro valor a uma constante retorna um erro

			// para definir uma constante usa-se o metodo 'define' que recebe dois parametros o primeiro parametro o nome da constante o segundo parametro o valor da constante

			// Uma constante e acessivel em qualquer lugar e o nome da constante em letras maisculas

			define("OBJECTO","madeira");

			var_dump(OBJECTO);

			function exibirConst(){
				echo "A constante declarada e ".OBJECTO;
			}

			exibirConst();

			// operacoes com constantes

			echo "</br>";

			define("NOTA1",10);
			define("NOTA2",11);
			define("NOTA3",9);

			echo "A media das constantes e ".(NOTA1+NOTA2+NOTA3)/3;


			// array de constantes

			define("TIMES",["Barcelona","RealMadrid","Juventus",true]);

			var_dump(TIMES);

			echo "Imprensao do time no indice 2: ".TIMES[2];
		?>

	</body>
</html>