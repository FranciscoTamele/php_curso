<html>
	<head>
	</head>
	<body>
		<?php

			// uma variavel global nao e acessivel em escopo local, dentro do escopo local que quer se utilizar a variavel deve-se dizer que a variavel e global

			// variavel global
			$nome="Francisco";
			$apelido="Tamele";

			$nota1=10;
			$nota2=15;
			$nota3=7;

			function exibirNome(){
				global $nome;
				global $apelido;
				 // sem a declaracao a chamada desse metodo ira retornarum erro 'undefined variable'
				echo $nome.' '.$apelido;
			}

			exibirNome();

			echo "</br>";
			function exibirMedia(){

				global $texto;

				$texto="Varial local";
				global $res;
				// A variavel criada no escopo local tambem precisa da designacao global dentro do escopo e podera ser acessivel no escopo global;

				$res=$GLOBALS['nota1']+$GLOBALS['nota2']*$GLOBALS['nota3']+10;

				echo 'O resultado e '.$res;
			}

			exibirMedia();
			echo "</br>";
			echo "Imprimir fora do metodo $res";

			// Imprensao da variavel local do metodo exibirMedia dentro de um outro metodo

			function metodoTeste(){
				global $texto;
				echo "Imprensao no outro metodo ".$texto;
			}
			echo "</br>";
			metodoTeste();
		?>
	</body>
</html>