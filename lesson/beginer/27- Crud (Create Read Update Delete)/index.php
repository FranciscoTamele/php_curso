
		<link type="text/css" rel="stylesheet" href="includes/styleindex.css"/>
		<title>Meu crud</title>
	</head>
	<body>
		<?php

			// Adicionar conexao 
			include_once "php_action/connection.php";

			$sql="select * from clientes";

			$resultado=mysqli_query($connection,$sql);

			?>
		
		<h1> Lista of clients </h1>
		<table>
			<thead>
				<tr><th>Nome</th><th>Morada</th><th>Contacto</th><th>Editar</th><th>Remover</th></tr>
			</thead>
			<tbody>
				<?php
					while($dados=mysqli_fetch_array($resultado)):
				?>
				<tr><td><?php echo $dados['nome'];?></td><td><?php echo $dados['morada']?></td><td><?php echo $dados['contacto']?></td><td><a href="" class="func">Edit</a></td><td><a href="php_action/drop_cliente.php?id=<?php echo $dados['id'];?>" class="func">Remover</a></td></tr>
				<?php
					endwhile;
				?>
			</tbody>
		</table>
		<br>
		<p><a href="adicionar.php" id="btn">Add Contact</a></p>
	</body>
