<?php 
	require_once("../../config.php");
	class tendancea
	{
		public function affichertendancee()
			{
				$sql="SELECT * FROM `tendance`  ORDER BY note desc";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}
			public function nomtendance()
			{
				$sqll="select * from tendance"; 
				$connexion=config::getConnexion();
				$repp=$connexion->query($sqll);
				$donnees = $repp->fetchall();
				
				/*$repp=$connexion->query($sql);
				$n=$repp->execute();*/
				
				return $donnees;		
			}		
	}
?>