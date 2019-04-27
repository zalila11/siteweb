<?php 
	require_once("../../config.php");
	class promotiona
	{
		public function afficherpromotion()
			{
				$sql="SELECT * FROM `promotion` ORDER BY datefin";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}	
	}
?>