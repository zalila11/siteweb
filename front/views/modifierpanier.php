<?php
require_once "../core/panierC.php";
$panier=new panierC();
$panier->modifierpanier($_POST["qten"],$_POST["nomProd"],$_POST["prixProd"]);
require_once("checkout.html")
?>