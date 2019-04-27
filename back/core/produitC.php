<?php 
	require_once("../../config.php");
	class produitC
	{
	
function trierproduit(){
    $asc_query = "SELECT * FROM produit ORDER BY idproduit ASC";
                $connexion=config::getConnexion();
				$rep=$connexion->prepare($asc_query);
				$rep->execute();
			


	}			
public function affichernbrproduit($nb1)
			{
				$sql='SELECT COUNT(*) as nb1 
				FROM `produit` WHERE idproduit=idproduit';
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				$rep->bindValue(':nb1',$nb1);
			    $nb1=$rep->fetch(PDO::FETCH_OBJ);
			    return $nb1;
			
			}	

public function afficherproduit()
			{
				$sql="SELECT * FROM `produit`";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}	
public function afficherproduitperime()
			{
				$sql="SELECT * FROM `produit` Where (`datev`<CURRENT_DATE)";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}	
public function afficherproduittri($crit)
			{
				$sql="SELECT* FROM produit ORDER BY(".$crit.") DESC ";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}
			
public function ajouterproduit($produit)//$idproduit,$nomproduit,$datev,$quantite,$prix)
			{
				$sql="INSERT INTO `produit`(`idproduit`, `nomproduit`, `datev`, `quantite`, `prix`) VALUES (:idproduit,:nomproduit,:datev,:quantite,:prix)";
				$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
				$rep->bindValue(":idproduit",$produit->getidproduit());
				$rep->bindValue(":nomproduit",$produit->getnomproduit());
				$rep->bindValue(":datev",$produit->getdatev());
				$rep->bindValue(":quantite",$produit->getquantite());
				$rep->bindValue(":prix",$produit->getprix());

				$rep->execute();

				
			}

			public function modifierproduit($produit,$idproduit)
			{
				$sql="UPDATE `produit` SET `idproduit`=:idproduit,`nomproduit`=:nomproduit,`datev`=:datev,`quantite`=:quantite,`prix`=:prix WHERE idproduit = '".$idproduit."' ;";
	
		
				$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
				$rep->bindValue(":idproduit",$produit->getidproduit());
				$rep->bindValue(":nomproduit",$produit->getnomproduit());
				$rep->bindValue(":datev",$produit->getdatev());
				$rep->bindValue(":quantite",$produit->getquantite());
				$rep->bindValue(":prix",$produit->getprix());

				$rep->execute();
			}
public  function rechercherproduit($rech)
	{
   
   
   	$sql="SELECT * FROM `produit` WHERE idproduit ='".$rech."'  or nomproduit ='".$rech."' or datev ='".$rech."' or quantite ='".$rech."' or prix ='".$rech."'" ;
   				$connexion=config::getConnexion();
  				$rep=$connexion->query($sql);
  			    $rep->execute();
  					return $rep;

	}
	public function supprimerproduit($idproduit)
			{
			$sql="DELETE FROM produit where idproduit= :idproduit";
			$db = config::getConnexion();
       		$req=$db->prepare($sql);
			$req->bindValue(':idproduit',$idproduit);
		
            $req->execute();
	
	}	
}

?>