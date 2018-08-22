<?php
	class usuarioDAO extends conexao{
		
		function __construct(){
			parent:: __construct();
		}
		
		
		function inserir($usuario)
		{
			$sql = "INSERT INTO usuario (idusuario, nome, email, senha) VALUES (?,?,?,?)";
			try
			{
				$stmt = $this->db->prepare($sql);
				$stmt->bindValue(1,$usuario->getId());
				$stmt->bindValue(2,$usuario->getNome());
				$stmt->bindValue(3,$usuario->getEmail());
				$stmt->bindValue(4,$usuario->getSenha());
				$ret = $stmt->execute();
				$this->db = null;
				if(!$ret)
				{
					die("Erro ao Inserir Usuário");
				}
				
			}
			catch (PDOException $e)
			{
				die ($e->getMessage());
			}
		}
		
			function autenticar($usu)
		{
			$sql = "SELECT idusuario, nome FROM usuario WHERE email = ? AND senha=?";
			try
			{
				//preparar frase
				$stmt = $this->db->prepare($sql);
				//substituir os pontos de interrogação
				$stmt->bindValue(1,$usu->getEmail());
				$stmt->bindValue(2,$usu->getSenha());
				$ret = $stmt->execute();
				$this->db = null;
				if(!$ret)
					echo "Erro ao Autenticar Usuário";
				else
				{
					$resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
					return $resultado;
				}
			}
			catch ( Exception $e )
			{
				die ($e->getMessage());
			}
		}	
	}
?>