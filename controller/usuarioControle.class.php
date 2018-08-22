<?php
require_once"funcao.php";

 class usuarioControle
 {
   
function login()
	 {
		 require_once "view/identificacao.php";
		 		
		 if($_POST)
		 {
			$_SESSION ["login"] = "interno";
			//echo "<script>location.href='index.php?controle=home_control&metodo=iniciar';</script>";
			
			$email=$_POST["email"];
			$senha=$_POST["senha"];
			$usu= new usuario(null,null,$email,$senha);
			$usuDAO = new usuarioDAO();
			$ret = $usuDAO->autenticar($usu);
			
			
				if(count($ret)>0)
				{
					//encontrou o usuario
					session_start();
					$_SESSION["id"]= $ret[0]["idusuario"];
					$_SESSION ["login"] = "interno";
					echo "<script>alert('Seja Bem-vindo!')</script>";
					echo "<script>location.href='index.php?controle=home_control&metodo=iniciar';</script>";
				}
				else
				{
				//nao encrontrou usuario
					echo"<script>alert('email/senha nao conferem');</script>";
				
				}
		  
		 }
	  
	 }//login
	 
	 function logout()
	{
		session_start();
		unset($_SESSION["id"]);
		$_SESSION = array();
		session_destroy();//destroi a sessão //sair
		header('location:index.php?controle=home_control&metodo=iniciar');
		
	}
 
 }//class
?>
