<?php

class Pessoa{


	private $nome;
	private $idade;
	private $email;

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


$france=new Pessoa();

$france->setNome("Francisco Tamele");
$france->setIdade("24");
$france->setEmail("francisco()@gmail.com");

echo $france->getNome()."<br>";
echo $france->getIdade()."<br>";
echo $france->getEmail()."<br>";

?>