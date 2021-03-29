<html>
	<head>
		
	</head>
	<body>
		<?php
			
			// loop while
			$controlador=0;
			while($controlador<100){

				echo "Francisco $controlador<br>";
				$controlador++;
			}

			echo "<hr>";

			do{
				echo "Francisco $controlador<br>";
				$controlador++;
			}while($controlador<110);
		?>

	</body>
</html>