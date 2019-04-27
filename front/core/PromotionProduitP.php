<?php
require_once("../../config.php");
class PromotionProduitP
{




public function Ajouter($p)
{
	$nom=$p->getNom();
	$referance_produit=$p->getRef();
	$pourcentage=$p->getPourcentage();
	$date_debut=$p->getDateDebut();
	$date_fin=$p->getDateFin();


	$sql = "INSERT INTO `promotionproduit`(`nom`, `referance_produit`, `pourcentage`, `date_debut`, `date_fin`) VALUES (:nom,:referance_produit,:pourcentage,:date_debut,:date_fin);";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':referance_produit',$referance_produit);
		$req->bindValue(':pourcentage',$pourcentage);
		$req->bindValue(':date_debut',$date_debut);
    	$req->bindValue(':date_fin',$date_fin);
		$req->execute();

}

public function ListePromotionProduit()
{
$sql="SELECT * FROM  promotionproduit ";
$db=config::getConnexion();
	return $db->query($sql);


}


public function Modifier($p)
{

    $nom_modif=$p->getNom();
    $referance_modif=$p->getRef();
	$pourcentage_modif=$p->getPsourcentage();
	$date_debut_modif=$p->getDateDebut();
	$date_fin_modif=$p->getDateFin();


$sql="UPDATE promotionproduit set Nom=:nom_modif,Referance_produit=:referance_modif,pourcentage=:pourcentage_modif,Date_debut=:date_debut_modif,Date_fin=:date_fin_modif WHERE (`Nom`=:nom_modif) ";
		$db=config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':nom_modif',$nom_modif);
		$req->bindValue(':referance_modif',$referance_modif);
        $req->bindValue(':pourcentage_modif',$pourcentage_modif);
        $req->bindValue(':date_debut_modif',$date_debut_modif);
        $req->bindValue(':date_fin_modif',$date_fin_modif);
		$req->execute();

}


public function Rechercher($valeur)
{
	
	$sql=" SELECT * FROM promotionproduit WHERE (`Nom`=:valeur) OR  (`pourcentage`=:valeur) ";
    $db=config::getConnexion();
	return $db->query($sql);


}


public function Supprimer($numerosupp)
{

$sql="DELETE FROM promotionproduit where (`Numero`=:numerosupp) ";
		$db=config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':numerosupp',$numerosupp);
		$req->execute();


}

public function Recuperer($nom){
		$sql="SELECT * from promotionproduit where (Numero=$nom)";
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