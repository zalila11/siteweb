<?php 
	require_once("../../config.php");

	class promotionP
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
public function afficherpromotion()
			{
				$sql="SELECT * FROM `promotion` ORDER BY datefin";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}

public function afficherpromotiontri($crit)
			{
				$sql="SELECT* FROM promotion ORDER BY(".$crit.") ";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}
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
public  function rechercherpromotion($n)
	{
   
   	
   	$sql="SELECT * FROM `promotion` WHERE idpromotion = '".$n."' or nom ='".$n."' or datedebut ='".$n."' or datefin ='".$n."' or pourcentage ='".$n."'";
   				$connexion=config::getConnexion();
  				$rep=$connexion->query($sql);
  			
				$rep->execute();
  					return $rep;

	}

public function supprimerpromotion($idpromotion)
			{
			$sql="DELETE FROM promotion where idpromotion= :idpromotion";
			$db = config::getConnexion();
       		$req=$db->prepare($sql);
			$req->bindValue(':idpromotion',$idpromotion);
		
            $req->execute();
	
	}	
	function recupererpromotion($idpromotion){
		$sql="SELECT * from promotion where idpromotion=$idpromotion";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		
        }

        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }






	}