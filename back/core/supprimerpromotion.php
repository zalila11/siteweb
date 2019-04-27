<?php 
	require_once("../../config.php");
	class promotion
	{
		
			public function supprimerpromotion($idpromotion)
			{
			$sql="DELETE FROM promotion where idpromotion= :idpromotion";
			$db = config::getConnexion();
       		$req=$db->prepare($sql);
			$req->bindValue(':idpromotion',$idpromotion);
		
            $req->execute();
	
	}	
	}
?>