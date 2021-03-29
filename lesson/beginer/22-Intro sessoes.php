<html>
	<head>
		
	</head>
	<body>
		
		<?php
			// Sessoes = sessoes servem para armazenar informacoes que poderao ser utilizadas nas outras paginas.

			// Para usar sessoes e preciso iniciar a sessao com *session_start();*. em toda pagina que for para usar sessoes deve-se sempre inicializar !

			// Inicializar a session

			session_start();

			$_SESSION['user']="Programador<br>";

			echo $_SESSION['user'];

			// O metodo *session_id();* retorna o id da sessao.

			echo session_id();


			// Uma sessao so e terminada quando usuario fecha o navegador ou atraves dos seguintes metodos.

			/*
			*	session_unset();
			*	session_destroy();
			*
			**/

		?>
	</body>
</html>