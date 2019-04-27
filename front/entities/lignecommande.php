<?PHP
class lignecommande{
	private $idligne;
	
	private $idcommande;
	private $idproduit;
	
	function __construct($idcommande,$idproduit,$qte,$prixProd){
	//	$this->idligne=$idligne;
	
		$this->idcommande=$idcommande;
		$this->idproduit=$idproduit;
		$this->qte=$qte;
		$this->prixProd=$prixProd;
		
	}
	
	function getidligne(){
		return $this->idligne;
	}
	
	function getidcommandee(){
		return $this->idcommande;
	}
	function getidproduit(){
		return $this->idproduit;
	}
	function getqte(){
		return $this->qte;
	}
	function getprixProd(){
		return $this->prixProd;
	}

	function setidcommande($idligne){
		$this->idligne=$idligne;
	}
	
	function setidcommandee($idcommande){
		$this->idcommande=$idcommande;
	}
	function setidproduit($idproduit){
		$this->idproduit=$idproduit;
	}
	function setqte($qte){
		$this->qte=$qte;
	}
	function setprixProd($prixProd){
		$this->prixProd=$prixProd;
	}
	
	
}

?>