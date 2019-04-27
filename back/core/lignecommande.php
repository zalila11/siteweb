<?php 
	require_once "../../config.php";
	class lignecommande
	{
		public function afficherlignecommande()
			{
				$sql="SELECT * FROM `lignedecommande`";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}	


			public  function rechercherlignecommande($n)
	{
   
   	/*$sql="SELECT * FROM `client` WHERE cin like '".$n."%' or nomclient like '".$n."%' or nomcommerce like '".$n."%' or telephone like '".$n."%'or mail like '".$n."%'";*/
   	$sql="SELECT * FROM `lignedecommande` WHERE idligne = '".$n."' or idcommande ='".$n."' ";
   				$connexion=config::getConnexion();
  				$rep=$connexion->query($sql);
  			
				$rep->execute();
  					return $rep;

	}
	
	}
?>