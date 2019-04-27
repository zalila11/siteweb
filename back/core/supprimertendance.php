<?php 
	require_once("../../config.php");
	class tendances
	{
		
			public function supprimertendance($idproduit)
			{
			$sql="DELETE FROM tendance where idproduit= :idproduit";
			$db = config::getConnexion();
       		$req=$db->prepare($sql);
			$req->bindValue(':idproduit',$idproduit);
		
            $req->execute();
	
	}	
	}
?>