<?php

class wishlist
{
	private $idwishlist;
	private $idproduit;
	private $nomproduit;
	private $quantitep;
	public function __construct($idwishlist,$idproduit,$nomproduit,$quantitep)
	
	{
		$this->idwishlist=$idwishlist;
		$this->idproduit=$idproduit;
		$this->nomproduit=$nomproduit;
		$this->quantitep=$quantitep;
		}
	public function getidproduit(){return $this->idproduit;}
	public function getnomproduit(){return $this->nomproduit;}
	public function getidwishlist(){return $this->idwishlist;}
	public function getquantitep(){return $this->quantitep;}
	
	
	
	public function setidproduit($idproduit){$this->idproduit=$idproduit;}
	public function setnomproduit($nomproduit){$this->nomproduit=$nomproduit;}
	public function setidwishlist($idwishlist){$this->idwishlist=$idwishlist;}
	public function setquantitep($quantitep){$this->quantitep=$quantitep;}
	
	}
?>