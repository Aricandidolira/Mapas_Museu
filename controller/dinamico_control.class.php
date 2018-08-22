<?php
	include"funcao.php";
	class dinamico_control
	{
		 function mapa()
		 {
			
			 $museuDAO = new museuDAO();
			 $ret = $museuDAO->buscarTodas();
			 require_once "view/mapa.php";
		 }
	}
 ?>