<?php 
	require_once("../../config.php");
	class catalogueaa
	{
		public function affichercatalogue()
			{
				$sql="SELECT * FROM `catalogue`";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}	
	}
?>