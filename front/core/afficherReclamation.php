
<?php 
         
	require_once("../../config.php");
	class reclamationa
	{
		public function afficherReclamation()
			{
				$sql="SELECT * FROM `reclamation`";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}	
	}
?>


