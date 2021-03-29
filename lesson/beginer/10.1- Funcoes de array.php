<html>
	<head>
		
	</head>
	<body>
		<?php
			// Continuacao

			//8.array_sum($notas); = soma os valores de um array

			$notas=array(1,2,5,4,10,6.5,54);

			$soma=array_sum($notas);

			echo "O total e $soma";

			echo "<hr>";

			//8.array_combine($indices,$valores); = combina dois array's transformando o primeiro array em indice do segundo

			$carros= array("BMW","Mazda","Nissan");
			$donos= array("Francisco","Carlos","Marcos");

			// Se um dos array estiver vazio, um erro sera disparado, e a quantidade dos indices deve ser igual a quantidade dos valores

			$combinacao= array_combine($donos,$carros);

			print_r($combinacao);

			echo "<hr>";

			//9.explode("separador","String"); = transforma string em array

			$data="04/04/2001";

			$pedacos=explode("/",$data);

			print_r($pedacos);
				echo "<hr>";
			$texto="meu nome e carla !";
			$divisao=explode(" ",$texto);
			print_r($divisao);

			echo "<hr>";

			//10.implode("juncao",$array); = transforma array em string

			$frutas = array("Maca","Banana","Pera","Goiaba");

			$frase=implode(", ",$frutas);

			print_r($frase);
			var_dump($frase);


		?>
	</body>
</html>