<?PHP
include "../../config.php";
class reclamationC {
function afficherReclamation ($reclamation){
		echo "nomRec: ".$reclamation->getnomRec()."<br>";
		echo "dateRec: ".$reclamation->getdateRec()."<br>";
		
		echo "messageRec: ".$reclamation->getmessageRec()."<br>";
		echo "sujetRec: ".$reclamation->getsujetRec()."<br>";
		echo "email: ".$reclamation->getemail()."<br>";
		echo "etat: ".$reclamation->getetat()."<br>";

	}
	
	function ajouterReclamation($reclamation){
		$sql="INSERT INTO `reclamation` (`nomRec`,`dateRec`,`messageRec`,`sujetRec`,`email`,`etat`) values (:nomRec,:dateRec,:messageRec,:sujetRec,:email,:etat)";
		$db = config::getConnexion();
		try{
			$d=date("y-m-j");
			$e="non traiter";
        $rep=$db->prepare($sql);
				$rep->bindValue(":nomRec",$reclamation->getnomRec());
				$rep->bindValue(":dateRec",$d);
				$rep->bindValue(":messageRec",$reclamation->getmessageRec());
				$rep->bindValue(":sujetRec",$reclamation->getsujetRec());
				$rep->bindValue(":email",$reclamation->getemail());
				$rep->bindValue(":etat",$e);

            $rep->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherReclamations(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerReclamation($nomRec){
		$sql="DELETE FROM reclamation where nomRec= :nomRec";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nomRec',$nomRec);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierReclamation($reclamation,$nomRec){
		$sql="UPDATE reclamation SET  nomRec=:nomRec,dateRec=:dateRec,messageRec=:messageRec,sujetRec=:sujetRec,email=:email WHERE nomRec=:nomRec";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
			
        $req=$db->prepare($sql);
         $rep->bindValue(":nomRec",$nomRec);
         $rep->bindValue(":dateRec",$dateRec);
        
         $rep->bindValue(":messageRec",$messageRec);
         $rep->bindValue(":sujetRec",$sujetRec);
         $rep->bindValue(":email",$email);
           $rep->execute();
        }
		
	function recupererRreclamation($nomRec){
		$sql="SELECT * from reclamation where nomRec=$nomRec";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeReclamations($nomRec){
		$sql="SELECT * from reclamation where nomRec=$nomRec";
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

?>