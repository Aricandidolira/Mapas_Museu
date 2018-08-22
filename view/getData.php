<?php 
	if($_GET)
	{
		session_start();
		$_SESSION["login"] = $_GET["login"];
	}
?>