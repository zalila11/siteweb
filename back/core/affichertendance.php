<?php 
	require_once("../../config.php");
	class tendanceaf
	{
		public function affichertendance()
			{
				$sql="SELECT * FROM `tendance`";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}	
	}
?>