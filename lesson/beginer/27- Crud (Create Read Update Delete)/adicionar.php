	<link rel="stylesheet" type="text/css" href="includes/styleaddcliente.css"/>
	</head>
	<body>
		<?php
			session_start();
			if(isset($_SESSION['mensagem'])){
		?>
			<h4><?php echo $_SESSION['mensagem'];?></h4>
		<?php

			session_unset();
			session_destroy();

			}
		?>

		<h1>Adicionar Contacto</h1>

		<form action="php_action/add_cliente.php" method="POST">
			<fieldset>
				<legend>Dados Pessoais</legend>
			<p><label for="idNome">Nome </label><input type="text" name="nome" id="idNome" placeholder="Insira seu nome"/></p>
			<p><label for="idMorada">Morada </label><input type="text" name="morada" id="idMorada" placeholder="Insira a morada"/></p>
			<p><label for="idContacto">Contacto </label><input type="text" name="contacto" id="idContacto" placeholder="Insira o contacto"/></p>
			</fieldset>

			<button type="submit" name="btnDados" class="dados">Adicionar</button>
			<button type="submit" name="btnLista" class="lista">Lista Clientes</button>
		</form>
	</body>