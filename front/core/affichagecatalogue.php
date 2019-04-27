<?php 
	require_once("../../config.php");
	class catalogueaf
	{
		public function affichercataloguee()
			{
				$sql="SELECT * FROM `catalogueproduit`";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}	
	}
?>