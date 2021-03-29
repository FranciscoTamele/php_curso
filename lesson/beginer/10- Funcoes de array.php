<html>
	<head>
		
	</head>
	<body>
		<?php

			// Algumas funcoes dos array's
			//1.array_values(array); = leva os valores do array passado com parametro e atribui ao novo array

			$carros= array("car"=>"BMW","RangRover","Mercedez");

			print_r($carros);
			echo "</br>";

			// O novo array automaticamente usa indices numericos
			$carros1=array_values($carros);

			print_r($carros1);
			echo "<hr>";

			////////////////////////////////////////

			//2.array_merge($carros,$times); = junta os elementos dos array's e forma um novo array

			

			$cars= array("Porshe","Lamborguini");
			$times= array("Barcelona","Real Madrid");
			print_r($cars);
			echo "</br>";
			print_r($times);
			echo "</br>";
			$juncao=array_merge($times,$cars);

			print_r($juncao);

			echo "<hr>";
			echo "Eliminando o ultimo elemento !<br>";
			//3.array_pop($juncao); = Elimina o ultimo elemento do array

			array_pop($juncao);

			print_r($juncao);

			echo "<hr>";

			//4.array_push($juncoa,"Mustang","Elgrand");= Adiciona os novos elementos no final do array

			echo "Adicionando elementos nas ultimas posicoes do arra!</br>";

			array_push($juncao,"Mustang","El Grand"); 	

			print_r($juncao);

			//5.array_shift($juncao); = Elimina o primeiro elemento do array
			echo "<hr>";
			echo "Eliminando primeiro elemento do array !<br>";
			array_shift($juncao);
			print_r($juncao);

			echo "<hr>";

			//6.array_unshift($juncao,"elemento1","elemento2"); = Adiciona os novo elementos nas primeiras posicoes do array
			echo "Adicionando elementos nas primeiras posicoes do arra!</br>";
			array_unshift($juncao,"Mazda","Buggati");
			print_r($juncao);
			?>
	</body>
</html>