<html>
	<head>

	</head>
	<body>
			
		<?php

			// $GLOBALS = e uma variavel usada para acessar variaveis globais de qualquer parte do script php. Ela armazena as variaveis em um array $GLOBALS

			// Exemplo:

			$nota1=10;
			$nota2=15;

			function soma(){

				$res;
				$res=$GLOBALS['nota1']+$GLOBALS['nota2'];

				echo "A soma dos valores e ".$res;
			}

			soma();

			echo "<hr>";

			// $_SERVER = e variavel que contem informacoes sobre cabecalho e caminhos e locais de script, e um array que contem varios indices que contem informacoes. No manual ha uma lista desses indices.

			// Exemplo: No indice voce coloca a informacao que quer !

			echo $_SERVER['SERVER_NAME']."<br>"; // Esse indice retorna 'SERVER_NAME' retorna o nome do host do servidor que o script esta sendo executado

			echo $_SERVER['DOCUMENT_ROOT']."<br>"; // retorna o directorio raiz do script em execucao

			echo $_SERVER['REMOTE_ADDR']."<br>"; // retorna o endereco de ip de onde o usuario esta visualizando a pagina


		?>
	</body>
</html>