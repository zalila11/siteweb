<?php 
	require_once("../../config.php");
	class produita
	{
		public function afficherproduit()
			{
				$sql="SELECT * FROM `produit` where datev>Current_date";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}	
	}
?>