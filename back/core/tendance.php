<?php 
	require_once("../../config.php");
	class tendenceaj
	{
		
			public function ajoutertendance($tendance)
			{
				$sql="INSERT INTO `tendance`(`idproduit`, `nom`, `prix`, `date`, `note`) VALUES (:idproduit,:nom,:prix,:datee,:note);";
				$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
				$rep->bindValue(":idproduit",$tendance->getidproduit());
				$rep->bindValue(":nom",$tendance->getnom());
				$rep->bindValue(":prix",$tendance->getprix());
				$rep->bindValue(":datee",$tendance->getdate());
				$rep->bindValue(":note",$tendance->getnote());
				$rep->execute();

				
			}
			public function verifexist($tendance)
			{
				$i=0;
				$sql="SELECT * FROM `tendance` WHERE idproduit = '".$tendance->getidproduit()."'";
   				$connexion=config::getConnexion();
  				$rep=$connexion->query($sql);
  				$donnees = $rep->fetch();
  				if($donnees['idproduit']==$tendance->getidproduit())
  				{
  					echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>La tendance est  
                <strong class='green'>deja existante</strong>
                </center></div>";
  					$i=1;
  				}
				return $i;
			}
			public function supprimertendance($idproduit)
			{
			$sql="DELETE FROM tendance where idproduit= :idproduit";
			$db = config::getConnexion();
       		$req=$db->prepare($sql);
			$req->bindValue(':idproduit',$idproduit);
		
            $req->execute();
	
	}
	
			public function affichertendance()
			{
				$sql="SELECT * FROM `tendance`";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}	
	}
?>