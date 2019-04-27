<?php 
	require_once("../../config.php");
	class rendezvousre
	{
	public  function rechercherRendezvous($n)
	{
   
   	/*$sql="SELECT * FROM `client` WHERE cin like '".$n."%' or nomclient like '".$n."%' or nomcommerce like '".$n."%' or telephone like '".$n."%'or mail like '".$n."%'";*/
   	$sql="SELECT * FROM `rendezvous` WHERE idRen = '".$n."' or nomRen ='".$n."' or lieuRen ='".$n."' or dateRen ='".$n."'";
   				$connexion=config::getConnexion();
  				$rep=$connexion->query($sql);
  			
				$rep->execute();
  					return $rep;

	}
}

 ?>