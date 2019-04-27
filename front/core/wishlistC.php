<?php 
	require_once("../../config.php");
	class wishlistC
	{
		
			public function trierwishlist()
			{
			$sql="SELECT FROM wishlist  ORDER BY nomproduit Desc";
			$db = config::getConnexion();
       		$req=$db->prepare($sql);
		    $req->execute();
		}
	public function afficherwishlist($cin)
			{
				$sql="SELECT * FROM `wishlist` where cin ='".$cin."'";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}	
	
	public function afficherwishlisttri($cin,$crit)
			{
				$sql="SELECT * FROM wishlist  where(cin ='".$cin.")'  ORDER BY(".$crit.") ";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}	
public function ajouterwishlist($wishlist)//$idwishlist,$nomwishlist,$datev,$quantite,$prix)
			{
				$sql="INSERT INTO `wishlist`( `nomproduit`, `quantitep`,`cin`) VALUES (:nomproduit,:quantitep,:cin)";
				$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
				
				$rep->bindValue(":nomproduit",$wishlist->getnomproduit());
				$rep->bindValue(":quantitep",$wishlist->getquantitep());
				$rep->bindValue(":cin",$wishlist->getcin());
				$rep->execute();

				header("location:consulterwishlist.php");
			}
public function modifierwishlist($wishlist)
			{
				$sql="UPDATE `wishlist` SET nomproduit`=:nomproduit,`quantitep`=:quantitep WHERE nomproduit = '".$nomproduit."' ;";
	
		
				$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
				$rep->bindValue(":nomproduit",$wishlist->getnomproduit());
				$rep->bindValue(":quantitep",$wishlist->getquantitep());
				

				$rep->execute();
			}

public  function rechercherwishlist($rech,$cin)
	{
   
   	/*$sql="SELECT * FROM `client` WHERE cin like '".$n."%' or nomclient like '".$n."%' or nomcommerce like '".$n."%' or telephone like '".$n."%'or mail like '".$n."%'";*/
   	$sql="SELECT * FROM `wishlist` WHERE(cin ='".$cin."') and (idwishlist ='".$rech."'  or nomproduit ='".$rech."' or quantitep ='".$rech."') " ;
   				$connexion=config::getConnexion();
  				$rep=$connexion->query($sql);
  			    $rep->execute();
  					return $rep;

	}

			public function supprimerwishlist($idwishlist)
			{
			$sql="DELETE FROM wishlist where idwishlist= :idwishlist";
			$db = config::getConnexion();
       		$req=$db->prepare($sql);
			$req->bindValue(':idwishlist',$idwishlist);
		
            $req->execute();
	}
	public function afficherproduit()
			{
				$sql="SELECT * FROM `produit`";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
}
}

	
?>