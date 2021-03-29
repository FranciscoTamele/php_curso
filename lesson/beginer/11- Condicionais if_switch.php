<html>
	<head>
		
	</head>
	<body>
			<?php

				// Condicao if

				$numero=20;

				if($numero==10):
					echo "O numero e maior que 10 !";
				elseif($numero<15):
					echo "O numero e menor que quinze !";
				else:
					echo "Nenhuma das condicoes acima foi satisfeita !";
				endif;

				// Condicao switch

				echo "<hr>";

				$fruta="Maca";

				switch($fruta){

					case "Manga";
						echo "A fruta escolhida e manga !";
					break;

					case "Maca";
						echo "A fruta escolhida e maca";
					break;

					default:
						echo "A fruta selecionada nao consta na lista !";
				}



			?>
	</body>
</html>