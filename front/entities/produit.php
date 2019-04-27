<?PHP 

class Produit
{

private $idcproduit ; 
private $nomproduit ; 
private $prix ;
private $quantite ;  

public  function __construct($idcproduit,$nomproduit,$prix,$quantite)
{


	$this->idcproduit=$idcproduit ; 
	$this->nomproduit=$nomproduit; 
	$this->prix=$prix ;
	$this->quantite=$quantite; 

}
public function getidproduit(){return $this->idcproduit;}
public function getnomproduit(){return $this->nomproduit;}
public function getprix(){return $this->prix;}
public function getquatite(){return $this->quantite;}
public function setidproduit($idcproduit){return $this->idcproduit=$idcproduit;}
public function setnomproduit($nomproduit){return $this->nomproduit=$nomproduit;}
public function setprix($prix){return $this->prix=$prix;}
public function setquantite($quantite){return $this->quantite=$quantite;}
}
?>