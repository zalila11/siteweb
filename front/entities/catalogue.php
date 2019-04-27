<?PHP 

class Catalogue 
{

private $idcatalogue ; 
private $nom ; 
private $date ; 

public  function __construct($idcatalogue,$nom,$date)
{


	$this->idcatalogue=$idcatalogue ; 
	$this->nom=$nom; 
	$this->date=$date ; 

}
public function getidcatalogue(){return $this->idcatalogue;}
public function getnomcatalogue(){return $this->nom;}
public function getdatecatalogue(){return $this->date;}
public function setidcatalogue($idcatalogue){return $this->idcatalogue=$idcatalogue;}
public function setnomcatalogue($nom){return $this->nom=$nom;}
public function setdatecatalogue($date){return $this->date=$date;}
}
?>