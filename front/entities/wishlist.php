<?php

class wishlist
{
	private $idwishlist;
	private $idproduit;
	private $nomproduit;
	private $quantitep;
	private $cin;
	public function __construct($idwishlist,$nomproduit,$quantitep,$cin)
	
	{
		$this->idwishlist=$idwishlist;
		$this->nomproduit=$nomproduit;
		$this->quantitep=$quantitep;
		$this->cin=$cin;

		}
	public function getnomproduit(){return $this->nomproduit;}
	public function getidwishlist(){return $this->idwishlist;}
	public function getquantitep(){return $this->quantitep;}
	public function getcin(){return $this->cin;}
	
	
	
	
	public function setnomproduit($nomproduit){$this->nomproduit=$nomproduit;}
	public function setidwishlist($idwishlist){$this->idwishlist=$idwishlist;}
	public function setquantitep($quantitep){$this->quantitep=$quantitep;}
	
	}
?>