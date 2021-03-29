<html>

	<head>
		
	</head>
	<body>
		<?php

			// Existem 3 formas de criar array's


			// PRIMEIRA FORMA DE CRIAR UM ARRAY

			$carros= array("Mercedez","BMW","Toyota","Nissan","Porche");



			print_r($carros); // Imprensao array

			echo "<br>";

			// Para criar o array e atribuindo logo o indice
			// Ao adicionar ao array um elemento sem definir o indice o php adicionara o elemento na ultima posicao existente no array

			$moedas= array(0=>"Metical",1=>"Dolar",10=>"Euro","Libra");

			// Por exemplo no exemplo anterior o libra apesar de nao existirem as posicoes 3,4,5,etc assumira posicao 11, e o rand asseguir a posicao 12

			$moedas[]="rand";

			print_r($moedas);
			echo "<br>";

			// SEGUNDA FORMA DE CRIAR UM ARRAY

			$telemoveis=array();

			$telemoveis[]="Tecno";
			$telemoveis[5]="Samsung";
			$telemoveis[]="Nokia";

			print_r($telemoveis);
			echo "<br>";

			// TERCEIRA FORMA DE CRIAR UM ARRAY

			$laptops=["Hp",2=>"Lenovo","Samsung"];
			print_r($laptops);

		?>
	</body>

</html>