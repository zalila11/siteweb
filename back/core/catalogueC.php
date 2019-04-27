<?php 
	require_once("../../config.php");

	class catalogueC
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

public function affichercatalogue()
			{
				$sql="SELECT * FROM `catalogue`";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}	
			public  function recherchercatalogue($n)
	{
   
   	
   	$sql="SELECT * FROM `catalogue` WHERE idcatalogue = '".$n."' or nom ='".$n."' or datedebut ='".$n."' or datefin ='".$n."'";
   				$connexion=config::getConnexion();
  				$rep=$connexion->query($sql);
  			
				$rep->execute();
  					return $rep;

	}
public function supprimercatalogue($idcatalogue)
			{
			$sql="DELETE FROM catalogue where idcatalogue= :idcatalogue";
			$db = config::getConnexion();
       		$req=$db->prepare($sql);
			$req->bindValue(':idcatalogue',$idcatalogue);
		
            $req->execute();
	
	}
	function recuperercatalogue($idcatalogue){
		$sql="SELECT * from catalogue where idcatalogue=$idcatalogue";
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

