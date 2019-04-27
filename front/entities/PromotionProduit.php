<?PHP
class PromotionProduit{
	
	private $nom;
	private $referance_produit;
	private $pourcentage;
	private $date_debut;
	private $date_fin;

	
	
	function __construct($nom,$referance_produit,$pourcentage,$date_debut,$date_fin){
		
		$this->nom=$nom;
		$this->referance_produit=$referance_produit;
		$this->pourcentage=$pourcentage;
		$this->date_debut=$date_debut;
		$this->date_fin=$date_fin;
		
	}
	
	function getNom(){
		return $this->nom;
	}
	function getRef(){
		return $this->referance_produit;
	}
	function getPourcentage(){
		return $this->pourcentage;
	}
	function getDateDebut(){
		return $this->date_debut;
	}
	function getDateFin(){
		return $this->date_fin;
	}
	

	function setNom($nom){
		$this->nom=$nom;
	}
	function setReferance($referance_produit){
		$this->referance_produit=$referance_produit;
	}
	function setPourcentage($pourcentage){
		$this->pourcentage=$pourcentage;
	}
	function setDateDebut($date_debut){
		$this->date_debut=$date_debut;
	}
	function setDateFin($date_fin){
		$this->date_fin=$date_fin;
	}
	
	
}

?>