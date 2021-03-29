<?php

	class Dados{


			public function registarEmail($email){

				/**
				 * Na proxima vamos criar nossa propria excecao caso o email nao seja valido !
				 */
				if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
						throw new Exception("Email invalido !",1);
						/** para criarmos uma nova excecao passamos a mensagem da excecao e o codigo da mesma */
				}else{
					echo "Email registado com sucesso !";
				}
			}
	}

	$dado=new Dados();

    try{
        $dado->registarEmail("francisco.com");
    }catch(Exception $ex){
        echo $ex->getMessage()."<br>";// Retorna mensagem do erro
        echo $ex->getLine()."<br>"; // Retorna a linha em que ocorreu o erro
        echo $ex->getCode()."<br>"; // Retorna o codigo de erro
        echo $ex->getFile(); // Retorna o caminho do arquivo
    }

?>