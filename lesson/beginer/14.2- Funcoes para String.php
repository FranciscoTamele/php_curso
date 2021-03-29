<html>
	<head>
		
	</head>
	<body>
		<?php

			// Algumas funcoes para string

			// strtoupper($string) = converte a string para letras maisculas

			$fruta="Pera-Maca";

			$frutaM=strtoupper($fruta);

			echo $frutaM;

			// strtolower($string) = converte a string para letras minusculas

			$frutam=strtolower($frutaM);

			echo "<hr>$frutam<hr>";

			//  substr = retorna um pedaco da string
			//	recebe como parametro o indice apartir do qual deve retornar a string e o indice do caracter no qual deve parar(opcional) !

			$hello="Hello world !!!";
			$sub1=substr($hello,3);
			echo "$sub1<br>"; // retorno "lo world !!!"
			$sub2=substr($hello,2,6);
			echo "$sub2"; // retorno "llo wo"

			echo "<hr>";
			// str_pad($string, 10); = retorna uma string com a quantidade de caracteres especificados, caso nao seja especificado o complemento a funcao auto complementa com espacos, e na string por padrao o complemento e adicionado a direita

			// caso a string tiver comprimento maior que a quantidade de caracteres especificados, nada acontece, a string mantem-se a mesma sem nenhum efeito

			$objecto="Keyboard";
			$complement=str_pad($objecto,10); // inspect no broswer para verificar o complemento
			echo "$complement";
			$complement1=str_pad($objecto,15,"*"); // o terceiro parametro e o complemento especificado
			echo "<br>$complement1";
			$complement3=str_pad($objecto,20,"#",STR_PAD_BOTH); // o quarto parametro especifica o lado no qual o complemento deve ser adicionado, que pode assumir os valores (left,right(default),both)
			echo "<br>$complement3<br>";

			
			// Comparando Strings
			/*
				strcmp($string,$string);= O metodo strcmp e key sensitive, compara duas string e retorna:
				 0 = se as Strings sao iguais key sensitive.
				 1 = se as String sao iguais none key sensitive.
				 -1 = se as Strings sao diferentes.
			*/

			$poder="poder de Deus.";
			$power="power of God.";

			echo "Comparando strings: <br>$poder<br>$power<br>".strcmp($poder,$power);

		?>
	</body>
</html>