<?php

	$servername="localhost";
	$username="root";
	$password="";
	$database="registros";

	$connection=mysqli_connect($servername,$username,$password,$database);

	if(mysqli_connect_error()){
		echo "Erro na conexao: ".mysqli_connect_error();
	}
?>