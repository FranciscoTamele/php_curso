<html>
	<head>
		
	</head>
	<body>
		
		<?php

			if(isset($_POST['enviarDados'])):

				$numeroFicheiros=count($_FILES['arquivos']['name']);

				if($numeroFicheiros>0):
					$allowedTypes=array("jpg","jpeg","png");
					$contador=0;

					while($contador<$numeroFicheiros){

						$extension=pathinfo($_FILES['arquivos']['name'][$contador],PATHINFO_EXTENSION);

						if(in_array($extension,$allowedTypes)):

							$temporaryPath=$_FILES['arquivos']['tmp_name'][$contador];
							$newName=uniqid();

							if(move_uploaded_file($temporaryPath,"../arquivo/".$newName.".$extension")):
								echo "Arquivo ".$_FILES['arquivos']['name'][$contador]." carregado com sucesso !<br>";
							endif;

						else:
							echo "Formato nao permitido !<br>";
						endif;


						$contador++;
					}
					

					


				endif;
			endif;


		?>

		<!-- Para carregar multiplos arquivos, o valor do parametro *name* deve ser declarado como um array e deve se colocar o parametro *multiple* que nao recebe nada-->

		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
			<input type="file" name="arquivos[]" multiple/>
			<input type="submit" name="enviarDados"/>
		</form>

	</body>
</html>