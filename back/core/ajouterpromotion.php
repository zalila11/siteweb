<?php
	require_once("../../config.php");
class promotiontr
{

public function ajouterpromotion($promotion)
{

$sql="INSERT INTO `promotion`(`idpromotion`, `nom`, `datedebut`, `datefin`, `pourcentage`) VALUES  (:idpromotion,:nom,:datedebut,:datefin,:pourcentage);";

$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
				$rep->bindValue(":idpromotion",$promotion->getidpromotion());
				$rep->bindValue(":nom",$promotion->getnom());
				$rep->bindValue(":datedebut",$promotion->getdatedebut());
				$rep->bindValue(":datefin",$promotion->getdatefin());
				$rep->bindValue(":pourcentage",$promotion->getpourcentage());
				$rep->execute();




}
}
?>