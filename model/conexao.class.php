<?php
	/**
	 * Ações de banco de dados (acesso, validação, etc.)
	 * @autor Original: Janson Lengstorf
	 * @livro:Pro PHP e jQuery
	 * @arquivo modificado por Vânia
	*/
	abstract class conexao {
		protected $db;
		
		protected function __construct()
		{
			$dsn="mysql:host=localhost;dbname=museu";
			try
			{
				$this->db = new PDO($dsn, "root", "");
			}
			catch ( Exception $e )
			{
				die ($e->getMessage());
			}
		}
	}
?>