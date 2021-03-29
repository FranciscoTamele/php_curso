<html>
	
	<head>
		
	</head>
	<body>
			<?php

				// Verificar quantos elementos tem no array

				$carros= array("Mercedez","BMW",8=>"Toyota","Lamborguini");

				print_r($carros);
				echo "<br>";

				// O metodo *count(array)* retorna o numero de elementos
				echo "O array tem ".count($carros)." elementos";
				echo "</br>";

				// imprensao do array

				foreach($carros as $carro){
					echo $carro;
					echo"</br>";
				}

			?>
	</body>
</html>