<?php 
	require_once("../../config.php");
	class reclamationre
	{
	public  function rechercherReclamation($n)
	{
   
   	/*$sql="SELECT * FROM `client` WHERE cin like '".$n."%' or nomclient like '".$n."%' or nomcommerce like '".$n."%' or telephone like '".$n."%'or mail like '".$n."%'";*/
   	$sql="SELECT * FROM `reclamation` WHERE  nomRec ='".$n."' or sujetRec ='".$n."' or email ='".$n."'";
   				$connexion=config::getConnexion();
  				$rep=$connexion->query($sql);
  			
				$rep->execute();
  					return $rep;

	}
}

 ?>