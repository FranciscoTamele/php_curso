<html>
	<head>
		
	</head>
	<body>
		<?php

			// Password_hash = O password_hash gera password criptografados diferentes e e mais seguro que md5 e sha1.
			//	Se for para cadastrar a password no banco de dados devemos criar um campo que suporta 255 caracteres pois o codigo gerado e dinamico !
			//	O passowrd_hash recebe dois parametros, a senha e o algoritmo que ira gerar o codigo, por padrao o php utiliza o algoritmo *bcrypt*, entao na opcao do algoritmo colocamos PASSWORD_DEFAULT.


			

			$senha="12345";

			$senhaDb=password_hash($senha,PASSWORD_DEFAULT);

			echo "Senha nao codificada: ".$senha;
			echo "<br>Senha codificada: ".$senhaDb;	

			/*
				O password_hash tem um terceiro parametro opcional que e, um array de opcoes que antes da versao 7 tinha duas opccoes, mas no php 7 so tem uma opcao que e o *cost*.
			*/

				$options=['cost'=>10]; // o indice cost tem por padrao o valor 10, quanto maior o custo maior segura da senha gerada, porem consome mais recursos de hardware

				// O valor 10 que e valor padrao, ja e um bom custo beneficio.

			$codigo='29071996';
			$codigoDb=password_hash($codigo,PASSWORD_DEFAULT,$options);
			
			echo "<hr>Senha nao codificada: ".$codigo;
			echo "<br>Senha codificada: ".$codigoDb;	

			// Como autenticar a senha

			echo "<hr>";

			if(password_verify($senha,$senhaDb)){
				echo "Senha valida !";
			}else{
				echo "senha invalida !";
			}
		?>
	</body>
</html>