<?php
	
	require_once 'connection.php';

	session_start();

	if(!isset($_SESSION['logado'])):
		header("Location:index.php");
	endif;

	$id=$_SESSION['idUsuario'];
	$sql="select * from phpusers where id='$id'";
	
	$resultado=mysqli_query($connection,$sql);

	// fechar a conexao

	mysqli_close($connection);

	// Vamos colocar mensagem de boas vindas no sistema.

	if(mysqli_num_rows($resultado)==1):
		$dados=mysqli_fetch_array($resultado);
		global $nomeUsuario;
		$nomeUsuario=$dados['nome'];
	endif;

?>

<html>
	<header>
		
	</header>
	<body>
		<h1>Bem vindo <?php echo $nomeUsuario; ?></h1>

		<h4><a href="logout.php" style="color:#000eff">Sair</a></h4>

		<a></a>
	</body>
</html>