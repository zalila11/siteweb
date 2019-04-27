
<?php

include "../entities/promotion.php";
require "../core/promotionP.php";



include "../entities/PromotionProduit.php";
require '../core/PromotionProduitP.php';

/*
$promotion = new PromotionProduit($_POST["nom"],$_POST["tauxdereduction"],$_POST["datedebut"],$_POST["datefin"]);
$pe = new PromotionP();
$pe-> AjouterPromotion($promotion);*/


$db=config::getConnexion();
$req1= $db->query("SELECT  COUNT(*) as nb1  from produit" );
$nb1 = $req1->fetch();

$pe = new promotionP();

if (isset($_POST['checkbox']))
{
  $idpromotion=$_POST['checkbox'];

  echo $_POST['checkbox'];
   $result=$pe->recupererpromotion($idpromotion);
  foreach($result as $row)
  {
    
   $nom=$row['nom']; 
    $pourcentage=$row['pourcentage'];
    $datedebut=$row['datedebut'];
    $datefin=$row['datefin'];
  }

}

$db=config::getConnexion();
$reqq1= $db->query("SELECT  *  from produit" );
$donnee = $reqq1->fetch();



for ($i=1; $i <$nb1['nb1']+1; $i++) 
{ 
  $name="checkbox".$i;
  $prix=$donnee["prix"];
 
   if (isset($_POST[$name]))
{
  $ref=$_POST[$name];
  //$prix=$row['prix'] ; 

   $promotion = new PromotionProduit($nom,$ref,$prix,$pourcentage,$datedebut,$datefin);
$pe = new PromotionProduitP();
$pe->Ajouter($promotion);
}




}



   


header('location:affectpromo');




?>