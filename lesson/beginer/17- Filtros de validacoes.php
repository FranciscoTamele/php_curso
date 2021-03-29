<html>
	<head>
		
	</head>
	<body>
		
		<?php

			// Filtros de validacao
			/* Alguns filtros
			*	- FILTER_VALIDATE_INT
			*	- FILTER_VALIDATE_EMAIL
			*	- FILTER_VALIDATE_FLOAT
			*	- FILTER_VALIDATE_IP
			*	- FILTER_VALIDATE_URL
			*
			*/

			// Com metodo 'isset($_POST[''])' = Verificamos se existe o indice enviar-formulario, se existir significa que alguem clicou no botao !

			if(isset($_POST['enviar-formulario'])):
			
			// Validacao 

				// O metodo filter_input(INPUT_POST,'name',FILTER_VALIDATE_INT) pode ser usado para validar campos, retorna um booleano.

				/*
				*	Paramentros:
				*	INPUT_POST = Tipo do input. o metodo usado para enviar parametros GET OU POST
				*	'name' = O name do input no documento html
				*	FILTER_VALIDATE_INT = E o filtro, nesse caso ele vai verificar se o dado introduzido e um inteiro.
				*/

				$erros= array(); // Array que ira armazenar as mensagens de erros !

				if(!$idade = filter_input(INPUT_POST,'idade',FILTER_VALIDATE_INT)):
						$erros[]="A idade deve ser um inteiro!";
				endif;

				if(!$email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)):
						$erros="Email invalido!";
				endif;

				if(!$peso = filter_input(INPUT_POST,'peso',FILTER_VALIDATE_FLOAT)):
						$erros="Peso invalido!";
				endif;

				if(!$ip=filter_input(INPUT_POST,'ip',FILTER_VALIDATE_IP)):
						$erros="Ip invalido!";
				endif;

				if(!$url=filter_input(INPUT_POST,'url',FILTER_VALIDATE_URL)):
						$erros="url invalida!";
				endif;

				// metodo *empty()* retorna um booleano, verifica se o array esta vazio ou nao!

				if(!empty($erros)): // Nesse caso se array $erros nao estiver vazio ele ira imprimir os erros

					foreach($erros as $erro):
						echo $erro."<br>";
					endforeach;

				endif;
			endif;
		?>


		<!-- O indice 'PHP-SELF' retorna o nome do script em execucao !!! -->

		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<p><label for="idEmail">Email </label><input type="text" name="email" id="idEmail" size="20" placeholder="Insira o email" maxlength="40"/></p>
			<p><label for="idIdade">Idade </label><input type="text" name="idade" id="idIdade" size="20" placeholder="Insira o email" maxlength="40"/></p>
			<p><label for="idPeso">Peso </label><input type="text" name="peso" id="idPeso" size="20" placeholder="Insira o email" maxlength="40"/></p>
			<p><label for="idIp">IP </label><input type="text" name="ip" id="idIp" size="20" placeholder="Insira o email" maxlength="40"/></p>
			<p><label for="idURL">URL </label><input type="text" name="url" id="idURL" size="20" placeholder="Insira seu nome" maxlength="20"/></p>
			<input type="submit" value="Enviar" name="enviar-formulario"/>
		</form>
		
	</body>
</html>