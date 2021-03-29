<html>
	<head>
		
	</head>

	
	<body>

		<?php
			// Quando for para fazer upload de um arquivo e importante colocar o method POST e parametro *enctype="multipart/form-data"*= sem o parametro nao upload de arquivos

		if(isset($_POST['enivar-dados'])):
				echo "Clicou em enviar !!!";
				var_dump($_FILES);
		

		// O array $_FILES contem todos files enviados do formulario, e um array multidimensional, com primeiro indice o nome do arquivo e os segundos indices sao os atributos do arquivo

		/*array (size=2)
		  'arquivo' => 
		    array (size=5)
		      'name' => string 'resident_evil_5_retribution-1920x1080.jpg' (length=41) = retorna o nome do ficheiro
		      'type' => string 'image/jpeg' (length=10) = retorna o tipo do ficheiro
		      'tmp_name' => string 'C:\wamp64\tmp\phpFE2C.tmp' (length=25) = retorna o caminho temporario do ficheiro
		      'error' => int 0 = retorna a quantidade de erros
		      'size' => int 453494 = retorna o tamanho do ficheiro em bytes
		  'arquivo2' => 
		    array (size=5)
		      'name' => string 'callOfDuty.jpg' (length=14)
		      'type' => string 'image/jpeg' (length=10)
		      'tmp_name' => string 'C:\wamp64\tmp\phpFE3C.tmp' (length=25)
		      'error' => int 0
		      'size' => int 29763
		      */


		      // Obter extensao de um arquivo 
		      // O metodo *pathinfo($_FILES['arquivo']['name'],PATHINFO_EXTENSION)* que recebe dois parametros o nome do ficheiro e atributo que queremos que no caso e a extensao.

		      $extensao=pathinfo($_FILES['arquivo']['name'],PATHINFO_EXTENSION);

		      // O metodo *uniqueid()* = retorna uma string

		      $novoNome=uniqid();

		      // O metodo *move_ploaded_file('Caminho temporario do ficheiro','destino')* = retorna um booleano.
		      // O destino deve ser concatenacao do directorio, nome e extensao do ficheiro
		      
		      if(move_uploaded_file($_FILES['arquivo']['tmp_name'],"../arquivo/$novoNome.$extensao")):
		      		echo "Arquivo enviado !!!";
		      endif; 

		      // 

		      echo "<hr>";
		      echo $_FILES['arquivo']['name'];
		      endif;

		?>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
				<input type="file" name="arquivo"/>
				<input type="file" name="arquivo2"/>
				<input type="submit" name="enivar-dados"/>
		</form>
	</body>
</html>