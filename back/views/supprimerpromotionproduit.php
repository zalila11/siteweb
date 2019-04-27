<?php
require_once ("../core/PromotionProduitP.php");
$promotionproduit=new PromotionProduitP();
$promotionproduit->Supprimer($_POST["nom"]);
require_once("calendar.php")
?>