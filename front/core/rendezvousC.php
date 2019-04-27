<?php 
	include "../../config.php";
	class rendezvousC
	{
		public function ajouterRendezvous($rendezvous)
			{
				$sql="INSERT INTO `rendezvous`( `nomRen`, `lieuRen`, `dateRen`) VALUES (:nomRen,:lieuRen,:dateRen);";
				$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
				
				$rep->bindValue(":nomRen",$rendezvous->getnomRen());
				$rep->bindValue(":lieuRen",$rendezvous->getlieuRen());
				$rep->bindValue(":dateRen",$rendezvous->getdateRen());
				$rep->execute();
			}
	}
?>