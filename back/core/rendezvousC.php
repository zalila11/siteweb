<?php 
	include "../../config.php";
	class rendezvousC
	{
		public function ajouterRendezvous($rendezvous)
			{
				$sql="INSERT INTO `rendezvous`( `nomRen`, `lieuRen`, `dateRen`) VALUES (:nomRen,:lieuRen,:dateRen);";
				$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
				
				$rep->bindValue(":nomRen",$rendezvous->getnomRen());
				$rep->bindValue(":lieuRen",$rendezvous->getlieuRen());
				$rep->bindValue(":dateRen",$rendezvous->getdateRen());
				$rep->execute();
			}
	}
	function modifierRendezvous($rendezvous,$nomRen){
		$sql="UPDATE rendezvous SET nomRen=:nomRen,lieuRen=:lieuRen,dateRen=:dateRen WHERE nomRen=:nomRen";
		$db = config::getConnexion();

try{		
        $req=$db->prepare($sql);
        $nomRen=$rendezvous->getnomRen();
        $dateRen=$rendezvous->getdateRen();
        $lieuRen=$rendezvous->getlieuRen();
        
		
		
		$req->bindValue(':nomRen',$nomRen);
		$req->bindValue(':lieuRen',$lieuRen);
		$req->bindValue(':dateRen',$dateRen);
		
		
            $s=$req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}
	function recupererRendezvous($nomRen){
		$sql="SELECT * from rendezvous where nomRen=$nomRen";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
?>