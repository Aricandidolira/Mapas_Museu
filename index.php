<?php
	
	
if($_GET)
{
      //as demais vezes
	  
	$controle=$_GET["controle"];
	$metodo=$_GET["metodo"];
	require_once "controller/" .$controle. ".class.php";
	$control= new $controle();
	$control->$metodo();
}
else
{
	//primeira vez que entra na aplicacao
	require_once "controller/home_control.class.php";
	$home = new home_control();
	$home->iniciar();
}



?>