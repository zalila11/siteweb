<?php 
	require_once("../../config.php");
	class produita
	{
		public function afficherproduit()
			{
				$sql="SELECT * FROM `produit` ORDER BY prix";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}	
	}
?>