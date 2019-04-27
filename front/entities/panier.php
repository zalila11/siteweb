<?php

  class panier {
  
  
  private $nomProd ;
  private $qte ;
  private $prixProd;
  private $subTot ;
 
 public function __construct($nomProd,$qte,$prixProd,$subTot)
        {
        	
        	$this->nomProd=$nomProd;
        	$this->qte=$qte;
            $this->prixProd=$prixProd;
            $this->subTot=$subTot;


        }


        
        public function getnomProd(){return $this->nomProd;}
        public function getqte(){return $this->qte;}
        public function getprixProd(){return $this->prixProd;}
        public function getsubTot(){return $this->subTot;}


             
             public function setnomProd($nomProd){$this->nomProd=$nomProd;}
             public function setqte($qte){$this->qte=$qte;}
             public function setprixProd($refProd){$this->prixProd=$prixProd;}
             public function setsubTot($subTot){$this->subTot=$subTot;}






   

}
  ?>