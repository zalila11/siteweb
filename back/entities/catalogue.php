<?PHP 

class catalogue 
{

private $idcatalogue ; 
private $nom ; 
private $datedebut ; 
private $datefin ; 

public  function __construct($idcatalogue,$nom,$datedebut,$datefin)
{


	$this->idcatalogue=$idcatalogue ; 
	$this->nom=$nom; 
	$this->datedebut=$datedebut ; 
	$this->datefin=$datefin ; 

}
public function getidcatalogue(){return $this->idcatalogue;}
public function getnomcatalogue(){return $this->nom;}
public function getdatedebutcatalogue(){return $this->datedebut;}
public function getdatefincatalogue(){return $this->datefin;}
public function setidcatalogue($idcatalogue){return $this->idcatalogue=$idcatalogue;}
public function setnomcatalogue($nom){return $this->nom=$nom;}
public function setdatedebutcatalogue($datedebut){return $this->datedebut=$datedebut;}
public function setdatefincatalogue($datefin){return $this->datefin=$datefin;}
}
?>