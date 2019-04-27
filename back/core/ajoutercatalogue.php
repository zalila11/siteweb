<?php
	require_once("../../config.php");
class cataloguetr
{

public function ajoutercatalogue($catalogue)
{

$sql="INSERT INTO `catalogue`(`idcatalogue`, `nom`, `datedebut`, `datefin`) VALUES  (:idcatalogue,:nom,:datedebut,:datefin);";

$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
				$rep->bindValue(":idcatalogue",$catalogue->getidcatalogue());
				$rep->bindValue(":nom",$catalogue->getnomcatalogue());
				$rep->bindValue(":datedebut",$catalogue-> getdatedebutcatalogue());
				$rep->bindValue(":datefin",$catalogue->getdatefincatalogue());
				
				$rep->execute();




}
}
?>
