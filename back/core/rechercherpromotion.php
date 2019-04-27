<?php 
	require_once("../../config.php");
	class promo
	{
	public  function rechercherpromotion($n)
	{
   
   	
   	$sql="SELECT * FROM `promotion` WHERE idpromotion = '".$n."' or nom ='".$n."' or datedebut ='".$n."' or datefin ='".$n."' or pourcentage ='".$n."'";
   				$connexion=config::getConnexion();
  				$rep=$connexion->query($sql);
  			
				$rep->execute();
  					return $rep;

	}
}

 ?>