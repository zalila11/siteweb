<?PHP
class commande{
	private $idcommande;
	
	private $date;
	private $cin;
	private $nbproduit;
	private $totale;
	function __construct($date,$cin,$nbproduit,$totale){
		//$this->idcommande=$idcommande;
	
		$this->date=$date;
		$this->cin=$cin;
		$this->nbproduit=$nbproduit;
		$this->totale=$totale;
	}
	
	function getidcommande(){
		return $this->idcommande;
	}
	
	function getdate(){
		return $this->date;
	}
	function getcin(){
		return $this->cin;
	}
	function getnbproduit(){
		return $this->nbproduit;
	}
	function gettotale(){
		return $this->totale;
	}

	function setidcommande($idcommande){
		$this->idcommande=$idcommande;
	}
	
	function setdate($date){
		$this->date=$date;
	}
	function setcin($cin){
		$this->cin=$cin;
	}
	function setnbproduit($nbproduit){
		$this->nbproduit=$nbproduit;
	}
	function settotale($totale){
		$this->totale=$totale;
	}
	
}

?>