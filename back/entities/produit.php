<?php

class produit
{
	private $idproduit;
	private $nomproduit;
	private $datev;
	private $quantite;
	private $prix;
	public function __construct($idproduit,$nomproduit,$datev,$quantite,$prix)
	
	{
		$this->idproduit=$idproduit;
		$this->nomproduit=$nomproduit;
		$this->datev=$datev;
		$this->quantite=$quantite;
		$this->prix=$prix;
		
	}
	public function getidproduit(){return $this->idproduit;}
	public function getnomproduit(){return $this->nomproduit;}
	public function getdatev(){return $this->datev;}
	public function getquantite(){return $this->quantite;}
		public function getprix(){return $this->prix;}
	
	
	
	public function setidproduit($idproduit){$this->idproduit=$idproduit;}
	public function setnomproduit($nomproduit){$this->nomproduit=$nomproduit;}
	public function setdatev($datev){$this->datev=$datev;}
	public function setquantite($quantite){$this->quantite=$quantite;}
	public function setprix($prix){$this->prix=$prix;}
	}
?>