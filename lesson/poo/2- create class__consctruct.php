<?php

class Pessoa{

	private $nome;
	private $idade;
	private $email;

	public function __construct($nome,$idade,$email){
		$this->nome=$nome;
		$this->idade=$idade;
		$this->setEmail($email); // como o email precisa de ser filtrado para nao criar redundancia(ter que filtrar de novo), atribuimos o atributo email apartir do metodo setEmail	
	}

	public function setNome($nome){
		$this->nome=$nome;
	}

	public function setIdade($idade){
		$this->idade=$idade;
	}

	public function setEmail($email){
		$email=filter_var($email,FILTER_SANITIZE_EMAIL);
		$this->email=$email;
	}

	public function getNome(){
		return $this->nome;
	}

	public function getIdade(){
		return $this->idade;
	}

	public function getEmail(){
		return $this->email;
	}

}

$france=new Pessoa("Francisco Tamele","24","franciscot()///amelle@gmail.com");

echo $france->getNome()."<br>";
echo $france->getIdade()."<br>";
echo $france->getEmail();

?>
