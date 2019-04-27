<?php 
	require_once("../../config.php");
	class catalogueaff
	{
		public function affichercatalogue()
			{
				$sql="SELECT * FROM `catalogue` WHERE nom=nom";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}	
	}
?>