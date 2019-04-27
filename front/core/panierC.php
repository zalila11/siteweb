<?PHP
require_once "../../config.php";
class panierC {
/*public function afficherpanier ($panier){
		echo "ref: ".$panier->getrefProd()."<br>";
		echo "nom ".$panier->getnomProd()."<br>";
		echo "qte ".$panier->getqte()."<br>";
		echo "prix  ".$panier->getprixProd()."<br>";
		echo "subTotale ".$panier->getsubTot()."<br>";
	}*/
	


	public function ajouterpanier($panier)
	{
		$sql="INSERT INTO `panier`( `nomProd`, `qte`, `prixProd`, `subTot`) VALUES (:nomProd,:qte,:prixProd,:subTot);";
		$connexion=config::getConnexion();
		$rep=$connexion->prepare($sql);
		
		$rep->bindValue(":nomProd",$panier->getnomProd());
		$rep->bindValue(":qte",$panier->getqte());
		$rep->bindValue(":prixProd",$panier->getprixProd());
		$rep->bindValue(":subTot",$panier->getsubTot());
		$rep->execute();
		
	}

	public function modifierpanier($qte,$refProd,$prixProd)
			{
				$subTot=$prixProd*$qte;
			$sql="UPDATE  `panier` SET  `qte`=:qte , `subTot`=:subTot where nomProd= '".$refProd."';";
			$db = config::getConnexion();
       		$req=$db->prepare($sql);
			$req->bindValue(':qte',$qte);
			$req->bindValue(':subTot',$subTot);

		
            $req->execute();
	
	}	
	public function supprimerpanier($refProd)
			{
			$sql="DELETE FROM panier where nomProd= :nomProd";
			$db = config::getConnexion();
       		$req=$db->prepare($sql);
			$req->bindValue(':nomProd',$refProd);
		
            $req->execute();
	
	}	
	public function afficherpanier()
	{

		$sql="SELECT * FROM `panier`";
		$connexion=config::getConnexion();
		$rep=$connexion->query($sql);
		return $rep;
	}

	
	
	
	
	
	
}

?>