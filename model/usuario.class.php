<?php
	class usuario
	{
		private $id;
		private $nome;
		private $email;
		private $senha;
		
		//método construtor
		function __construct($id="", $nome="", $email="", $senha="")
		{
			$this->id = $id;
			$this->nome = $nome;
			$this->email = $email;
			$this->senha = $senha;
		}
		function getId()
		{
			return $this->id;
		}	

		function getNome()
		{
			return $this->nome;
		}	
		function getEmail()
		{
			return $this->email;
		}
		function getSenha()
		{
			return $this->senha;
		}		
	}//classe
?>