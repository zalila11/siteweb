<?php 
	require_once("../../config.php");
	class rendezvousm
	{
		
			public function modifierRendezvous($rendezvous,$nomRen)
			{
				$sql="UPDATE `rendezvous` SET `nomRen`=:nomRen,`lieuRen`=:lieuRen,`dateRen`=:dateRen WHERE nomRen = '".$nomRen."' ;";
	
		
				$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
				$rep->bindValue(":nomRen",$rendezvous->getnomRen());
				$rep->bindValue(":lieuRen",$rendezvous->getlieuRen());
				$rep->bindValue(":dateRen",$rendezvous->getdateRen());
				
				$rep->execute();
			}

			public function recuperer($nomRen)
			{			$connexion = config::getConnexion();
				$req=$connexion->prepare('SELECT * from `rendezvous` WHERE `nomRen`=:nomRen');
				$req->bindParam(':nomRen',$nomRen);
				$req->execute();


			$liste=$req->fetch();
			return $liste;


			} 

	}

?>