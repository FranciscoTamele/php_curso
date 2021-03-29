<html>
	<head>
	</head>
	<body>
		<?php

			 
			//As aspas simples nao sao interpretactivas ou seja ao colocar uma variavel dentro de aspas simples  nao sera interpretadas, mas sim imprenso o que foi escrito
			echo "<h3>Aspas simples</h3>";
			$nome= "Francisco";
			$idade= 24;
			$bairro='Maxaquene';

			echo 'Meu nome $nome';
			echo "</br>";
			// para concatenar usa-se o ponto(.)

			echo 'Meu nome e '.$nome.' e minha idade e '.$idade.'.';

			// Para colocar as simples no texto para antes da aspa color a barra (\)
			echo "</br>";
			echo 'O meu bairro e \''.$bairro.'\'.';

			// As aspas duplas sao interpretactivas
			echo "</br>";

			echo "<h3>Aspas duplas</h3>";

			echo "O meu nome e $nome e minha idade e $idade.";

			// Para colocar aspas duplas na frases antes tem que se colocar (\)
			echo "</br>";
			echo "O meu bairro e \"$bairro\".";

			echo "<hr>";
		?>
	</body>
</html>