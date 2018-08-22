<?php
	class museuDAO extends conexao{
		
		function __construct()
		{
			parent:: __construct();
		}
		
		function buscarTodas(){
	
			$sql = "SELECT * FROM museu";
			
			try{
				$com = $this->db->prepare($sql);
				
				$ret = $com->execute();
				$this->db = null;
				if(!$ret){
					echo "Erro ao buscar todas os museus";
				}else{
					$res = $com->fetchAll(PDO::FETCH_ASSOC);
					return $res;
				}
			}catch(Exception $e){
				die($e->getMessage());
			}
		}
	}
?>