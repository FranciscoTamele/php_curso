<?php
	
	// Incluir a conexao

	include_once "connection.php";


	$id=$_GET['id'];
	$sql="delete from clientes where id='$id'";

	if(mysqli_query($connection,$sql)){
		header("Location:../index.php");
	}

?>