<?PHP
require_once "../../config.php";
class lignecommandeC {
/*function afficherlignecommande ($lignecommande){
		echo "idligne: ".$commande->getidligne()."<br>";
		
		echo "idcommande: ".$commande->getidcommandee()."<br>";
		echo "idproduit: ".$commande->getidproduit()."<br>";
		
	}*/
	
function ajouterlignecommande($lignecommande){
		


		$sql="INSERT into lignedecommande (idcommande,idproduit,qte,prixProd) values (:idcommande,:idproduit,:qte,:prixProd)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
    //    $idligne=$lignecommande->getidligne();
        
        $idcommande=$lignecommande->getidcommandee();
        $idproduit=$lignecommande->getidproduit();

        $qte=$lignecommande->getqte();
        $prixProd=$lignecommande->getprixProd();
        
	//	$req->bindValue(':idligne',$idligne);
		
		$req->bindValue(':idcommande',$idcommande);
		$req->bindValue(':idproduit',$idproduit);
		$req->bindValue(':qte',$qte);
		$req->bindValue(':prixProd',$prixProd);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function recuppanier()
	{
		$sql="SELECT * FROM `panier`";
		$connexion = config::getConnexion();
		$rep=$connexion->query($sql);
		return $rep;




	}
	
	
	
}

?>