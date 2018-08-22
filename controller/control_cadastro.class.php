<?php
require_once"funcao.php";

class control_cadastro
{
	
		function cadastro()
		{
			require_once "view/cadastrar.php";
			if($_POST)
			{
				$usuario = new usuario(null,$_POST["nome"],$_POST["email"],$_POST["senha"]);
				$usuDAO = new usuarioDAO();
				$usuDAO->inserir($usuario); 
				echo "<script>alert('Cadastro realizado com sucesso')</script>";
				echo '<script>location.href="index.php?controle=home_control&metodo=iniciar";</script>';
			}
		}	
		

} 
?>