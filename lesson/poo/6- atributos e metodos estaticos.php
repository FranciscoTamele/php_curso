<?php

	class Sistema{

		public static $user;

		public static function entrar(){

            /** @word self::
            Serve para acessar atributos estaticos nos metodos a palavra $this nao referencia atributos estaticos.
            */
            echo self::$user;
		}
	}

	/** metodos estaticos nao e necessario instancia-los para acessa-los. */

	Sistema::$user="Francisco<br>";
	echo Sistema::$user;
	Sistema::entrar();

?>