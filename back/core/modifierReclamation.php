<?php 
require_once("../../config.php");
	class reclamationm
	{
		
			public function modifierReclamation($nomRec)
			{
						$sql="UPDATE `reclamation` SET `etat`='traite' WHERE nomRec =:nomRec ;";
        $connexion=config::getConnexion();
		$rep=$connexion->prepare($sql);
         $rep->bindValue(":nomRec",$nomRec);
           $rep->execute();
			}
			public function nombreReclamation()
			{
				$sql="SELECT COUNT(*) as nb FROM reclamation WHERE etat='non traiter' ;";
        $db=config::getConnexion();
		
			$nbr=$db->query($sql);
			foreach ($nbr as $nbr1) {
				$nbrrec=$nbr1['nb'];
			}
			return $nbrrec;
			}
			public function nombreReclamationt()
			{
				$sql="SELECT COUNT(*) as nbre FROM reclamation WHERE etat='traite' ;";
        $db=config::getConnexion();
		
			$nbr=$db->query($sql);
			foreach ($nbr as $nbr1) {
				$nbrrec=$nbr1['nbre'];
			}
			return $nbrrec;
			}

}
?>