<?php

	require_once 'connection.php';

	session_start();

	if(isset($_POST['btn_login'])):
		$erros=array();

		$nome=mysqli_escape_string($connection,$_POST['nome']);
		$senha=mysqli_escape_string($connection,$_POST['senha']);

		if(empty($nome) | empty($senha)):
			$erros[]="o campo nome/senha devem estar preenchidos !";
		else:
			//$senha=md5($senha);
			$sql="select * from phpusers where nome='$nome' and senha=md5('$senha')";

			// Faz a requisicao no mysql
			$resultado=mysqli_query($connection,$sql);
			mysqli_close($connection);

			//  Verifica o numero de linhas do resultado, se for igual maior que 0 e porque achou algum resultado!
			if(mysqli_num_rows($resultado)>0):
				
				// transforma o resultado achado em um array
				$dados=mysqli_fetch_array($resultado);
				var_dump($dados);

				/*

				# O array resultado leva dois tipos de indices: numerico(O indice numero parte de 0 em diante) e string(O nome da coluna)

				array (size=6)
				  0 => string '1' (length=1)
				  'id' => string '1' (length=1)
				  1 => string 'france' (length=6)
				  'nome' => string 'france' (length=6)
				  2 => string '12345' (length=5)
				  'senha' => string '12345' (length=5)

  */

				
				// Apos verificar que o usuario existe no banco vamos criar uma sessao.

				  $_SESSION['logado']=true;
				  $_SESSION['idUsuario']=$dados['id'];

				  // Apos isso redicionar para a pagina restrita

				  header("Location:home.php");
			else:
				echo "usuario inexistente !";
			endif;

		endif;

	endif;

?>

<html>
	<head>
		
	</head>

	<body>

		<?php
			if(!empty($erros)):
				foreach($erros as $erro):
					echo $erro;
				endforeach;
			endif;
		?>

		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<p><label for="idNome">Nome </label><input type="text" name="nome" id="idNome"/></p>
			<p><label for="idSenha">Senha </label><input type="text" name="senha" id="idSenha"/></p>
			<p><input type="submit" name="btn_login"/></p>
		</form>
	</body>
</html>