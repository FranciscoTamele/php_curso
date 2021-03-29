<html>
	<head>
		
	</head>
	<body>
		
		<?php

			// O metodo *filter_input()*, utilizados quando queremos validar ou filtrar dados vindos de um $_POST[] ou $_GET[], em casos de variaveis usamos filter_var().

			// Metodo filter_var(variavel,Filtro); = recebe dois parametros a variavel a ser validade ou filtrada e o proprio filtro


			// Vamos filtrar depois validar uma variavel $dado que esperamos receber uma idade (inteiro);

			$dado="fra24";
			echo "Imprensao do dado antes da sanitizacao: $dado<br>";
			$idade=filter_var($dado,FILTER_SANITIZE_NUMBER_INT);
			echo "Imprensao do dado idade depois da sanitizacao: $idade<br>";

			if(filter_var($idade,FILTER_VALIDATE_INT)):
				echo "Imprensao da idade apos ser validada: $idade";
			endif;

			echo "<hr>";

			$dado1="cisco&t@@g//mail.com";
			echo "Imprensao do dado antes da sanitizacao: $dado1<br>";

			$email=filter_var($dado1,FILTER_SANITIZE_EMAIL);
			echo "imprensao do dado email depois da sanitizacao: $email<br>";


			// A verificacao abaixo retornara um false pois o email nao leva dois '@@', OS DADOS DEPOIS DA SANITIZACAO NAO HA GARANTIA TOTAL DE QUE SAO VALIDOS ... Os filtros de sanitizacao apenas removem os caracteres que nao convem(ou devem) constar em um email, mas nao validam.

			if(filter_var($email,FILTER_VALIDATE_EMAIL)):
				echo "Email valido !";
			else:
				echo "Email invalido !"; 
			endif;


		?>


			<!--

			<form action="">
				<p><label for="idIdade" >Idade </label><input type="text" name="idade" id="idIdade" /></p>
				<p><label for="idEmail" >Email </label><input type="text" name="email" id="idEmail" /></p>
				<input type="submit" value="Enviar" />
			</form>

			-->
	</body>
</html>