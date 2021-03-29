
<?php
	
	// Para gerar datas umas das funcoes que e possivel usar e a funcao date que leva parametros de acordo com a informacao que precisamos. Os parametros que podemos usar sao os seguintes:

	/*
	*
	*	Datas 
	*	d- dia actual
	*	D- dia da semana abreviado
	*	l- Dia da semana
	*	m- Mes em formato numero
	*	M- Mes em formato texto
	*	y- Ano em 2 digitos
	*	Y- Ano com 4 digitos
	*
	*	Horarios
	*	h- horario no formato 12horas
	*	H- horario no formato 24horas
	*	i- minutos
	*	s- segundos
	*	A- retorna AM ou PM
	*/

	// Exemplos

	echo 'Data actual: '.date('d/m/Y');


	echo '<hr>Horario actual sem definir o time zone: '.date('H:i:s');
	date_default_timezone_set('harare,pretoria');
	echo '<br>Horario com time zone definido: '.date('H:i:s');


?>