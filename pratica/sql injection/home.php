<?php
	
	$servername="localhost";
	$username="root";
	$password="";
	$database="registros";

	$connection=mysqli_connect($servername,$username,$password,$database);

	if(mysqli_connect_error()):
		echo "Falha na conexao: ".mysqli_connect_error();
	endif;

?>

<?php
	
	$erros=array();
	if(isset($_POST['btn'])):

		$nome=$_POST['nome'];
		echo "$nome";
		if(!empty($nome)):
			$sql="select * from phpusers where nome='$nome'";

			$resultado=mysqli_query($connection,$sql);

			if(mysqli_num_rows($resultado)>0):
				$dados=mysqli_fetch_array($resultado);

				echo "O id do nome inserido e ".$dados['id'];
			else:
				echo "Usuario inexistente !";
			endif;
		else:
			$erros[]="O campo nome deve estar preenchido !";
		endif;
	endif;
?>

<html>
	<head>
		
	</head>
	<body>
		<hr>
		<?php 

			if(!empty($erros)):
				echo $erros[0];
			endif;
		?>
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
			<p><label for="idNome">Nome </label><input type="text" name="nome" id="idNome"/></p>
			<input type="submit" name="btn"/>
		</form>
	</body>
</html>