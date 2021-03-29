<html>
	<head>
		
	</head>
	<body>
		<?php
			/**@Info
			* str_repeat
			* strlen
			* str_replace
			* strpos
			*/

			// outras funcoes para string
			// str_repeat($string, n); = retorna uma string repetida *n* vezes !

				$texto="Um mundo melhor !";
				$repetition=str_repeat($texto,3);

				echo "$repetition<hr>";

			// strlen($string); = retorna o tamanho da string

				echo "Tamanho do texto original :".strlen($texto);
				echo "<br>Tamanho do texto repetido :".strlen($repetition);
				echo "<hr>";

			// str_replace($porSerSubstituido, $substituto, $string); = retorna uma *$string* com a palavra *$porSerSubstituido* substituuida por *$substituto* 

				$mensagem="Mocambique e um pais abencoado !";

				$mensagem1=str_replace("abencoado", "maravilhoso", $mensagem);
				echo $mensagem1."<hr>";

			// strpos($string); = retorna a posicao da string

				$objectivo="tornar um mundo melhor de se viver !";

				echo "A posicao da palavra mundo no texto e ".strpos($objectivo, "mundo");
		?>

	</body>
</html>