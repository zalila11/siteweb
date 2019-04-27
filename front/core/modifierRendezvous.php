<?php 
	require_once("../../config.php");
	class rendezvousm
	{
		
			public function modifierRendezvous($rendezvous,$idRen)
			{
				$sql="UPDATE `rendezvous` SET `idRen`=:idRen,`nomRen`=:nomRen,`lieuRen`=:lieuRen,`dateRen`=:dateRen WHERE idRen = '".$idRen."' ;";
	
		
				$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
				$rep->bindValue(":idRen",$rendezvous->getidRen());
				$rep->bindValue(":nomRen",$rendezvous->getnomRen());
				$rep->bindValue(":lieuRen",$rendezvous->getlieuRen());
				$rep->bindValue(":dateRen",$rendezvous->getdateRen());
				
				$rep->execute();
			}

	}

?>