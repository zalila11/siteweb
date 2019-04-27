<?php 
	require_once("../../config.php");
		class promotionm
		{
			public function modifierpromotion($promotion,$idpromotion)
			{
				$sql="UPDATE `promotion` SET `idpromotion=:idpromotion` ,`nom`=:nom,`datedebut`=:datedebut,`datefin`=:datefin,`pourcentage`=:pourcentage WHERE idpromotion= '".$idpromotion."'; ";
	
		
				$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
				$rep->bindValue(":idpromotion",$promotion->getidpromotion())	;
				$rep->bindValue(":nom",$promotion->getnom());
				$rep->bindValue(":datedebut",$promotion->getdatedebut());
				$rep->bindValue(":datefin",$promotion->getdatefin());
				$rep->bindValue(":pourcentage",$promotion->getpourcentage());
				$rep->execute();
			}

}

?>