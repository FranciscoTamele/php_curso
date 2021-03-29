<html>
	<head>
		
	</head>
	<body>
		<?php

			// Filtros de sanitizacao = sao filtros utilizados para limpar variaveis.
			/*
			*	Funcoes filter_input() e filter_var()
			*
			*	FILTER_SANITIZE_SPECIAL_CHARS
			*	FILTER_SANITIZE_NUMBER_INT
			*	FILTER_SANITIZE_EMAIL
			*	FILTER_SANITIZE_URL
			*/

			if(isset($_POST['enviar-formulario'])):

				// a funcao abaixo serve para escapar codigo html, vai ser imprenso do jeito que foi inserido
				/*
					Por exemplo ao escrever no input nome '<button>ok</button>' e enviar sem o metodo abaixo o php criaria um botao, moficando a nova pagina !
				*/
				$nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
				echo "$nome<br>";

				// o PHP vai ignorar tudo que nao for digito.

				$idade=filter_input(INPUT_POST,'idade',FILTER_SANITIZE_NUMBER_INT);
				echo "$idade<br>";

				/* 
				*	No filtrar um float vindo formulario, o php retorna um inteiro, tanto a virgula como o ponto ele *	 discarta. procurar mais informacoes
				*
				*	$peso=filter_input(INPUT_POST,'peso',FILTER_SANITIZE_NUMBER_FLOAT);
				*	echo "Peso $peso<br>";
				*/

				// O php descarta caracteres que nao convem aparecer no email

				$email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
				echo "$email<br>";

				// O php descarta todos elementos nao convem numa url. exemplo de url= http://google.com

				$url=filter_input(INPUT_POST,'url',FILTER_SANITIZE_URL);
				echo $url;

				
			endif;

		?>

		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<p><label for="idNome">Nome </label><input type="text" name="nome" id="idNome" size="20" placeholder="Insira o nome" maxlength="40"/></p>
			<p><label for="idEmail">Email </label><input type="text" name="email" id="idEmail" size="20" placeholder="Insira o email" maxlength="40"/></p>
			<p><label for="idIdade">Idade </label><input type="text" name="idade" id="idIdade" size="20" placeholder="Insira o idade" maxlength="40"/></p>
			<p><label for="idPeso">Peso </label><input type="text" name="peso" id="idPeso" placeholder="insira o peso" maxlength="40"/></p>
			<p><label for="idIp">IP </label><input type="text" name="ip" id="idIp" size="20" placeholder="Insira o ip" maxlength="40"/></p>
			<p><label for="idURL">URL </label><input type="text" name="url" id="idURL" size="20" placeholder="Insira a url" maxlength="20"/></p>
			<input type="submit" value="Enviar" name="enviar-formulario"/>
		</form>

	</body>
</html>