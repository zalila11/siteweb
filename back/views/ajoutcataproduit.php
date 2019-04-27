<?php

include "../entities/catalogue.php";
require "../core/catalogueC.php";


include "../entities/CatalogueProduit.php";
require '../core/CatalogueProduitP.php';

/*
$promotion = new PromotionProduit($_POST["nom"],$_POST["tauxdereduction"],$_POST["datedebut"],$_POST["datefin"]);
$pe = new PromotionP();
$pe-> AjouterPromotion($promotion);*/


$db=config::getConnexion();
$req1= $db->query("SELECT  COUNT(*) as nb1  from produit" );
$nb1 = $req1->fetch();

$pe = new catalogueC();

if (isset($_POST['checkbox']))
{
  $idcatalogue=$_POST['checkbox'];

  
   $result=$pe->recuperercatalogue($idcatalogue);
  foreach($result as $row)
  {
    
   $nom=$row['nom'];
    $datedebut=$row['datedebut'];
    $datefin=$row['datefin'];
  }

}





for ($i=1; $i <$nb1['nb1']+1; $i++) 
{ 
  $name="checkbox".$i;

 
   if (isset($_POST[$name]))
{
  $ref=$_POST[$name];

   $catalogue = new CatalogueProduit($nom,$ref,$datedebut,$datefin);
$pe = new CatalogueProduitP();
$pe->Ajouter($catalogue );
}




}



   

         header("location:affectcata.php");
         




?>