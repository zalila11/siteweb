<?PHP
class PromotionProduit{
	
	private $nom;
	private $nom_produit;
	private $prix;
	private $pourcentage;
	private $date_debut;
	private $date_fin;

	
	
	function __construct($nom,$nom_produit,$prix,$pourcentage,$date_debut,$date_fin){
		
		$this->nom=$nom;
		$this->nom_produit=$nom_produit;
		$this->prix=$prix ; 
		$this->pourcentage=$pourcentage;
		$this->date_debut=$date_debut;
		$this->date_fin=$date_fin;
		
	}
	
	function getNom(){
		return $this->nom;
	}
	function getRef(){
		return $this->nom_produit;
	}
	function getPrix(){
		return $this->prix;
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
	function setReferance($nom_produit){
		$this->nom_produit=$nom_produit;
	}
	function setPrix($nom_produit){
		$this->prix=$prix;
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