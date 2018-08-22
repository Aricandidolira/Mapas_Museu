<?php
	include"funcao.php";
	class mapa_control
	{
		 function rota()
		 {
			 $museuDAO = new museuDAO();
			 $ret = $museuDAO->buscarTodas();
			 require_once "view/rota.php";
		 }
	}
 ?>