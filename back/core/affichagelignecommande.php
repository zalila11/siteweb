<?php 
	require_once "../../config.php";
	class lignecommande
	{
		public function afficherlignecommande()
			{
				$sql="SELECT * FROM `lignedecommande`";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}	
	}
?>