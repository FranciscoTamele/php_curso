<?php
	
	// iniciar a sessao
	//session_start();

	// Adicionar a conexao
	include_once "connection.php";



	if(isset($_POST['btnDados'])){
		$nome=mysqli_escape_string($connection,$_POST['nome']);
		$morada=mysqli_escape_string($connection,$_POST['morada']);
		$contacto=mysqli_escape_string($connection,$_POST['contacto']);

		$sql="insert into clientes (nome,morada,contacto) values('$nome','$morada','$contacto')";

		mysqli_set_charset($connection,"utf8");
		
		if(mysqli_query($connection,$sql)){
			//$_SESSION['mensagem']="Contacto adicionado com sucesso !";
			header("Location:../index.php?sucesso");
		}else{
			//$_SESSION['mensagem']="Erro ao adicionar contacto !";
			header("Location:../index.php?erro");
		}

	}else{
		header("Location:../index.php");
	}
?>