<?php

	require_once 'head.php';	
	require_once 'head.php';	

	// Diferenca do require e include !

	// *require* quando arquivo nao e encontrado gera um erro fatal e para o script na linha onde foi 			detectada a excessao !

	// *include* quando arquivo nao e encontrado gero um erro mas o conteudo da pagina e exibido !

	/*
		*include_once e require_once* o #_once# certifica-se de que o ficheiro seja incluso apenas uma vez. 
	*/
?>
	<body>
		Francisco
	</body>
<?php
	
	require 'footer.php';
?>