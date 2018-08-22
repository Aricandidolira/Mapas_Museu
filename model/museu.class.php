<?php
	class museu
	{
		private $id;
		private $nomemuseu;
		private $latitude;
		private $longitude;
	
		function __construct($id=null, $nomemuseu=null, $latitude=null, $longitude=null)
		{
			$this->id = $id;
			$this->nomemuseu = $nomemuseu;
			$this->latitude= $latitude;
			$this->longitude= $longitude;
		}
		
		function getId()
		{
			return $this->id;
		}
		
		function getNomemuseu()
		{
			return $this->nomemuseu;
		}
		
		function getLatitude()
		{
			return $this->latitude;
		}
		
		function getLongitude()
		{
			return $this->longitude;
		}
		
	
	}
?>