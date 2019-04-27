<?php 
	require_once("../../config.php");
	class promotionaf
	{
		public function afficherpromotion()
			{
				$sql="SELECT * FROM `promotionproduit` ORDER BY prix desc";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}	
	}
?>