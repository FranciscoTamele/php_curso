<html>
	<head>
		
	</head>
	<body>
		<?php
			//Criptografia= e um conjunto de regras que visa codificar uma informacao de modo que apenas o emissor e receptor descodifiquem.

			// As principais criptografias usadas do php. e essas criptografia sempre geram o mesmo codigo para mesmo texto

			// base64 = um tipo de criptografia de mao dupla, possivel codificar e descodificar

			// Criptografar a senha
			echo "<h3>Codificar com base64</h3>";
			$senha="123456";
			echo "Senha nao codificada: ".$senha;
			$senhaCod=base64_encode('123456');
			echo "<br>Senha codificada: ".$senhaCod;
			// Descodificar a senha

			$senhaDes=base64_decode($senhaCod);
			echo "<br>Senha descodificada: ".$senhaDes;


			/////////////////////////////////////////////////////////

			// md5 = um tipo de criptografia de uma via, isto e nao e possivel descodificar

			echo "<hr>";

			echo "<h3>Codificar com md5</h3>";
			$codico="123456";
			echo "Senha nao codificada: ".$senha;
			
			$codicoDes=md5($senha);
			echo "<br>Senha codificada: ".$codicoDes;

			/////////////////////////////////////////////////////////

			echo "<hr>";

			echo "<h3>Codificar com md5</h3>";
			$codico="123456";
			echo "Senha nao codificada: ".$senha;
			$codicoCod=sha1($codico);
			echo "<br>Senha codificada: ".$codicoCod;

		?>
	</body>
</html>