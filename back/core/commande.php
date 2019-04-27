<?php 
	require_once "../../config.php";
	class commande
	{
		public function affichercommande()
			{
				$sql="SELECT * FROM `commande` order by totale desc";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}	
	


	public  function recherchercommande($n)
	{
   
   	/*$sql="SELECT * FROM `client` WHERE cin like '".$n."%' or nomclient like '".$n."%' or nomcommerce like '".$n."%' or telephone like '".$n."%'or mail like '".$n."%'";*/
   	$sql="SELECT * FROM `commande` WHERE cin = '".$n."' or idcommande ='".$n."' ";
   				$connexion=config::getConnexion();
  				$rep=$connexion->query($sql);
  			
				$rep->execute();
  					return $rep;

	}

	public function supprimercommande($idcommande)
			{
			$sql="DELETE FROM commande where idcommande= :idcommande";
			$db = config::getConnexion();
       		$req=$db->prepare($sql);
			$req->bindValue(':idcommande',$idcommande);
		
            $req->execute();
	
	}	

}
?>