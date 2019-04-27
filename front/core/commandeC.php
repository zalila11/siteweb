<?PHP
require_once "../../config.php";
class commandeC {
function affichercommande ($commande){
		echo "idcommande: ".$commande->getidcommande()."<br>";
		
		echo "date: ".$commande->getdate()."<br>";
		echo "cin: ".$commande->getcin()."<br>";
		echo "nbproduit: ".$commande->getnbproduit()."<br>";
	}
	
function ajoutercommande($commande){
		


		$sql="INSERT into commande (date,cin,nbproduit,totale) values (:date,:cin,:nbproduit,:totale)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
    //    $idcommande=$commande->getidcommande();
        
        $date=$commande->getdate();
        $cin=$commande->getcin();
        $nbproduit=$commande->getnbproduit();
        $totale=$commande->gettotale();
        
	//	$req->bindValue(':idcommande',$idcommande);
		
		$req->bindValue(':date',$date);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nbproduit',$nbproduit);
		$req->bindValue(':totale',$totale);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	public function recuperercommande($idcommande){
				$sqll="select * from commande where idcommande='".$idcommande."'"; 
				$connexion=config::getConnexion();
				$repp=$connexion->query($sqll);
				$donnees = $repp->fetch();
				echo $donnees['idcommande'];
				$h=$donnees['idcommande'];
				return $donnees;
				//echo $donnees['status'];
		
        
	}
	public function recupererid(){
				$sqll="SELECT idcommande FROM commande ORDER BY idcommande DESC LIMIT 0, 1"; 
				$connexion=config::getConnexion();
				$repp=$connexion->query($sqll);
				$donnees = $repp->fetch();
				echo $donnees['idcommande'];
				$h=$donnees['idcommande'];
				return $h;
				//echo $donnees['status'];
		
        
	}

	function nbProduits()
	{
						$connexion=config::getConnexion();
 						$res = $connexion->query('select count(*) as nb from panier');
						$data = $res->fetch();
						$nb = $data['nb'];
						return $nb;
	}
	
	
	public function supprimerpanier(){
				$sqll="DELETE FROM `panier` "; 
				$connexion=config::getConnexion();
				$repp=$connexion->query($sqll);
				$repp->execute();

				
				
				
		
        
	}
	
	function totale()
	{


						$connexion=config::getConnexion();
				
 						$res = $connexion->query('SELECT SUM(subTot) as prix from panier');
						$data = $res->fetch();
						$nb = $data['prix'];
						return $nb;
	}
	
}

?>