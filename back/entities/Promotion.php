<?php

class promotion 
{

private $idpromotion ; 
private $nom  ; 
private $datedebut  ;
private $datefin ; 
private $pourcentage ;  

 function __construct($idpromotion,$nom,$datedebut,$datefin,$pourcentage)
{

$this->idpromotion=$idpromotion ; 
$this->nom=$nom ; 
$this->datedebut=$datedebut ; 
$this->datefin=$datefin ; 
$this->pourcentage=$pourcentage ; 
}

public function getidpromotion(){return $this->idpromotion ; }
public function getnom(){return $this->nom;}
public function getdatedebut(){return $this->datedebut;} 
public function getdatefin(){return $this->datefin;}
public function getpourcentage(){return $this->pourcentage;}
public function setidpromotion($idpromotion){$this->idpromotion=$idpromotion;}
public function setnom($nom){$this->nom=$nom;}
public function setdatedebut($datedebut){$datedebut->datedebut=$datedebut;}
public function setdatefin($datefin){$datefin->datefin=$datefin;}
public function setpourcentage($pourcentage){$pourcentage->pourcentage=$pourcentage;}
}

?>