<?php 
	require_once("../../config.php");
	class reclamationm
	{
		
			public function modifierReclamation($reclamation,$idRec)
			{
						$sql="UPDATE `reclamation` SET `nomRec`=:nomRec,`messageRec`=:messageRec,`sujetRec`=:sujetRec WHERE nomRec=:nomRec";

				
		
				$connexion=config::getConnexion();
				
				$req=$db->prepare($sql);
         $rep->bindValue(":nomRec",$nomRec);
         $rep->bindValue(":messageRec",$messageRec);
         $rep->bindValue(":sujetRec",$sujetRec);
       
           $rep->execute();
			}

	}

?>