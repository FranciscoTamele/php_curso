<html>
	<head>
		
	</head>
	<body>
		<?php
			/*
			*	number_format
			*	round
			*	ceil
			*	floor
			*	rand
			*/
			// number_format($numero,n,",","."); = serve para formatar recebe 4 parametros
			/*
			*	$numero = o numero a ser formatado
			*	n = o numero de casas decimais
			*	"," = separador decimal
			*	"." = separador de milhares
			*/

			$preco=12.5;

			echo "Numero formatado : ".number_format($preco,2,",",".")."mt.<hr>";

			// round($numero); = arredonda o numero

			$preco2=3.4;

			echo "Aredondando 3.4 metodo round(): ".round($preco2);
			echo "<hr>";

			// ceil($numero); = arredonda valores para cima

			echo "Arendondando 3.4 com metodo ceil(): ".ceil($preco2);
			echo "<hr>";

			// floor($numero); = arredondando valor para baixo

			echo "Aredondando 3.7 com metodo floor(): ".floor(3.7);
			echo "<hr>";

			// rand(); = Gera numero aleatorio no intervalo recebido nos parametros

			echo "Numero aleatorio no intervalo de 50 a 100 pelo metodo rand(inicio,fim): ".rand(50,100);
		?>
	</body>
</html>