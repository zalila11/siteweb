<?php 
	include "../../config.php";
	class rendezvouss
	{
		
			public function supprimerRendezvous($idRen)
			{
			$sql="DELETE FROM rendezvous where idRen= :idRen";
			$db = config::getConnexion();
       		$req=$db->prepare($sql);
			$req->bindValue(':idRen',$idRen);
		
            $req->execute();
	
	}	
	}
?>