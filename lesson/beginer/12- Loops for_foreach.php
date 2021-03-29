<html>
	<head>
		
	</head>
	<body>
		<?php
			
			// loop for

			for($i=0;$i<=10;$i++):
				echo "Volta do loop: ".$i."<br>";
			endfor;


			// o loop foreach e mais usados em array's
			echo "<hr>";
			$carros= array("BMW","Porshe","Surf","RangRover");

			foreach($carros as $carro):
				echo "$carro <br>";
			endforeach;
		?>

	</body>
</html>