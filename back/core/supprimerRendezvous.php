<?php 
	include "../../config.php";
	class rendezvouss
	{
		
			public function supprimerRendezvous($nomRen)
			{
			$sql="DELETE FROM rendezvous where nomRen= :nomRen";
			$db = config::getConnexion();
       		$req=$db->prepare($sql);
			$req->bindValue(':nomRen',$nomRen);
		
            $req->execute();
	
	}	
	}
?>