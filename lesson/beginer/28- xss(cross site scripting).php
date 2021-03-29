<html>
	<head>
				
	</head>
	<body>

<?php
	
	// cross site scripting = e um tipo de ataque que o invasor aproveita a falha de inseguranca do sistema e insere comandos scripts nos campos. Igual ao *sql injection* que resolvemos com mysqli_escape_string(), o *cross site scripting* resolve-se com htmlspecialchars($variavel);
	// Antes de inserir os dados no banco de dados e bom passar o input pelo *mysqli_escpae_string() e htmlspecialchars()* Exemplo:
	// $nome=mysqli_escape_string($connection,$_POST['nome']); // prevencao ataque sql
	// $nome=htmlspecialchars($nome); // prevencao ataque script
    // e assim ja podem ser inseridos no base de dados os dados

?>
 
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
				<p><label for="idNome">Nome </label><input type="text" name="lblNome" id="idNome"/></p>
				<input type="submit" value="enviar" name="btn"/>
			</form>

	</body>
</html>