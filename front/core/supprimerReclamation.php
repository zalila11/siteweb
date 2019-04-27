

<?php 
	include "../../config.php";
	class reclamations
	{
		
			public function supprimerReclamation($nomRec)
			{
			$sql="DELETE FROM reclamation where nomRec= :nomRec";
			$db = config::getConnexion();
       		$req=$db->prepare($sql);
			$req->bindValue(':idRec',$idRec);
		
            $req->execute();
	
	}	
	}
?>