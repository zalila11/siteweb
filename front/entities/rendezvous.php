<?php

class rendezvous
{
	
	private $nomRen;
	private $lieuRen;
	private $dateRen;
	
	public function __construct($nomRen,$lieuRen,$dateRen)
	
	{
	
		$this->nomRen=$nomRen;
		$this->lieuRen=$lieuRen;
		$this->dateRen=$dateRen;
		
	}
	
	public function getnomRen(){return $this->nomRen;}
	public function getlieuRen(){return $this->lieuRen;}
	public function getdateRen(){return $this->dateRen;}
	
	public function setnomRen($nomRen){$this->nomRen=$nomRen;}
	public function setlieuRen($lieuRen){$this->lieuRen=$lieuRen;}
	public function setdateRen($dateRen){$this->dateRen=$dateRen;}
}
?>