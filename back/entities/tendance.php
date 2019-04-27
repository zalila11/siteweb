<?php

class tendance
{
	private $idproduit;
	private $nom;
	private $prix;
	private $date;
	private $note;
	public function __construct($idproduit,$nom,$prix,$date,$note)
	
	{
		$this->idproduit=$idproduit;
		$this->nom=$nom;
		$this->prix=$prix;
		$this->date=$date;
		$this->note=$note;
		
	}
	public function getidproduit(){return $this->idproduit;}
	public function getnom(){return $this->nom;}
	public function getprix(){return $this->prix;}
	public function getdate(){return $this->date;}
	public function getnote(){return $this->note;}
	public function setidproduit($idproduit){$this->idproduit=$idproduit;}
	public function setnom($nom){$this->nom=$nom;}
	public function setprix($prix){$this->prix=$prix;}
	public function setdate($date){$this->date=$date;}
	public function setnote($note){$this->note=$note;}
}
?>