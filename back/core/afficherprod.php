<?php 
	require_once("../../config.php");
	class tendancea
	{
		public function afficherprod()
			{
				$sql="SELECT * FROM `produit`";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}	
	}
?>