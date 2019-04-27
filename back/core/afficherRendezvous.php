<?php 
	
require_once("../../config.php");
	class rendezvousa
	{
		public function afficherRendezvous()
			{
				$sql="SELECT * FROM `rendezvous` ORDER BY nomRen";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}	
	}
?>