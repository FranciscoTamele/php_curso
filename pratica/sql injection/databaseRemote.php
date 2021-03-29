<?php

	$servername="sql2.freemysqlhosting.net";
	$username="sql2364716";
	$password="sX1!vN6*";
	$database="sql2364716";
	$connection=mysqli_connect($servername,$username,$password,$database);

	if(mysqli_connect_error()){
		echo "Erro encontrado<hr> !<br>";
		echo mysqli_connect_error();
	}else{
		echo "Conectado !<hr>";
		$sql="select * from usuarios";
		$resultado=mysqli_query($connection,$sql);

		if(mysqli_num_rows($resultado)>0){
			$dados=mysqli_fetch_array($resultado);

			echo "<br>Nome: ".$dados['nome']."       Contacto: ".$dados['contacto'];
		}else{
			echo "Nenhum resultado achado !";
		}
	}
?>