<?php 
	
require_once("../../config.php");
	class rendezvousa
	{
		public function afficherRendezvous()
			{
				$sql="SELECT * FROM `rendezvous`";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}	
	}
?>