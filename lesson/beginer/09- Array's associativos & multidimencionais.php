<html>
	
	<head>
		
	</head>
	<body>
		<?php

			// Array associativos sao array's com indice string 

			$transportes= array("carro"=>"Lamborguini","moto"=>"toyota");

			print_r($transportes);
			echo "</br>";
			echo $transportes["carro"];

			$transportes[4]="aviao";
			
			// Os arrays associativos quando o indice nao e declarado automaticamente e atribuido um inteiro como indice !!!

			echo"<br>";

			$transportes[]="bicicleta";
			print_r($transportes);
			echo "<br>";
			echo count($transportes);
			echo "<br>";
			echo "<hr>";
			$avenidas= array("a"=>"Milagre mabote","FPML","d"=>"Joaquim Chissano","Filipe Samuel Magaia");

			print_r($avenidas);
			echo "</br>";

			foreach($avenidas as $avenida){
					echo $avenida;
					echo "<br>";
			}

			echo "<h4>Imprimindo o array com a respeciva posicao</h4>";

			foreach($avenidas as $posicao=>$avenida){
					echo "posicao :".$posicao. " e o valor :".$avenida;
					echo "<br>";
			}

			echo "<hr>";

			// Array's multidimensionais(array de array's)

			$equipes= array(
				array("Messi","Suarez"),
				array("Bale","Benzema")
			);

			echo $equipes[1][1]; // Saida: Benzema

			// array multidimensionais associativos

			$times=array(
			"Barcelona"=>array("Messi","Suarez"),
			"Real Madrid"=>array("Benzema","Bale"),
			array("Neymar","Mbape") // esse time tera como primeiro indice 'zero(0) pois nao foi especificado logo $times[0][0] a saida sera ='neymar'
			);

			print_r($times);

		?>
	</body>
</html>