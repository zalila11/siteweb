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
        $rep=$db->prepare($sql);
				$rep->bindValue(":nomRec",$reclamation->getnomRec());
				$rep->bindValue(":dateRec",$reclamation->getdateRec());
				$rep->bindValue(":messageRec",$reclamation->getmessageRec());
				$rep->bindValue(":sujetRec",$reclamation->getsujetRec());
				$rep->bindValue(":email",$reclamation->getemail());
				$rep->bindValue(":etat",$reclamation->getetat());
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
	
        function modifierReclamation($reclamation)
    {
        
       $db = config::getConnexion();
        $req = $db->prepare('update reclamation set nomRec=:nomRec,dateRec=:dateRec,messageRec=:messageRec,sujetRec=:sujetRec,email=:email WHERE nomRec=:nomRec');
        $req->execute(array(
      'nomRec' => $reclamation->getnomRec(),
      'dateRec' => $reclamation->getdateRec(),
      'messageRec' => $reclamation->getmessageRec(),
      'sujetRec' => $reclamation->getsujetRec(),
      'email' => $reclamation->getemail(),
      'etat' => $reclamation->getetat()
        ));
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