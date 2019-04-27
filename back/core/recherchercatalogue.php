<?php 
	require_once("../../config.php");
	class catal
	{
	public  function recherchercatalogue($n)
	{
   
   	
   	$sql="SELECT * FROM `catalogue` WHERE idcatalogue = '".$n."' or nom ='".$n."' or datedebut ='".$n."' or datefin ='".$n."'";
   				$connexion=config::getConnexion();
  				$rep=$connexion->query($sql);
  			
				$rep->execute();
  					return $rep;

	}
}

 ?>