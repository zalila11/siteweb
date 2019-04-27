<?php
require_once("../../config.php");
class CatalogueProduitP
{




public function Ajouter($p)
{
	$nom=$p->getNom();
	$nom_produit=$p->getRef();
	$date_debut=$p->getDateDebut();
	$date_fin=$p->getDateFin();


	$sql = "INSERT INTO `catalogueproduit`(`nom`, `nom_produit`, `datedebut`, `datefin`) VALUES (:nom,:nom_produit,:date_debut,:date_fin);";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':nom_produit',$nom_produit);
		$req->bindValue(':date_debut',$date_debut);
    	$req->bindValue(':date_fin',$date_fin);
		$req->execute();

}

public function ListeCatalogueProduit()
{
$sql="SELECT * FROM  catalogueproduit ";
$db=config::getConnexion();
	return $db->query($sql);


}


public function Modifier($p)
{

    $nom_modif=$p->getNom();
    $referance_modif=$p->getRef();
	$date_debut_modif=$p->getDateDebut();
	$date_fin_modif=$p->getDateFin();


$sql="UPDATE catalogueproduit set Nom=:nom_modif,nom_produit=:referance_modif,Date_debut=:date_debut_modif,Date_fin=:date_fin_modif WHERE (`Nom`=:nom_modif) ";
		$db=config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':nom_modif',$nom_modif);
		$req->bindValue(':referance_modif',$referance_modif);
        $req->bindValue(':date_debut_modif',$date_debut_modif);
        $req->bindValue(':date_fin_modif',$date_fin_modif);
		$req->execute();

}


public function Rechercher($valeur)
{
	
	$sql=" SELECT * FROM catalogueproduit WHERE (`Nom`=:valeur)  ";
    $db=config::getConnexion();
	return $db->query($sql);


}


public function Supprimer($numerosupp)
{

$sql="DELETE FROM catalogueproduit where (`Numero`=:numerosupp) ";
		$db=config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':numerosupp',$numerosupp);
		$req->execute();


}

public function Recuperer($nom){
		$sql="SELECT * from catalogueproduit where (Numero=$nom)";
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