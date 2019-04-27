<?php 
	require_once("../../config.php");
	class catalogue
	{
		
			public function supprimercatalogue($idcatalogue)
			{
			$sql="DELETE FROM catalogue where idcatalogue= :idcatalogue";
			$db = config::getConnexion();
       		$req=$db->prepare($sql);
			$req->bindValue(':idcatalogue',$idcatalogue);
		
            $req->execute();
	
	}	
	}
?>