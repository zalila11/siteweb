<?php 
	include "../config.php";
	class tendancec
	{
		public function ajoutertendance($tendance)
			{
				$sql="INSERT INTO `tendance`(`idproduit`, `nom`, `prix`, `quantite`) VALUES (:idproduit,:nom,:prix,:quantite);";
				$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
				$rep->bindValue(":idproduit",$tendance->getidproduit());
				$rep->bindValue(":nom",$tendance->getnom());
				$rep->bindValue(":prix",$tendance->getprix());
				$rep->bindValue(":quantite",$tendance->getquantite());
				$rep->execute();
			}
	}
?>