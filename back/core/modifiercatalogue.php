<?php 
	require_once("../../config.php");
	class cataloguetm
	{
		
			public function modifiercatalogue($catalogue,$idcatalogue)
			{
				$sql="UPDATE `catalogue` SET `idcatalogue`=:idcatalogue,`nom`=:nom,`datedebut`=:datedebut,`datefin`=:datefin  WHERE idcatalogue = '".$idcatalogue."' ;";
	
		
				$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
				$rep->bindValue(":idcatalogue",$catalogue->getidcatalogue());
				$rep->bindValue(":nom",$catalogue->getnomcatalogue());
				$rep->bindValue(":datedebut",$catalogue->getdatedebutcatalogue());
				$rep->bindValue(":datefin",$catalogue->getdatefincatalogue());
				$rep->execute();
			}

	}

?>