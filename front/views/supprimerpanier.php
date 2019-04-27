<?php
require_once "../core/panierC.php";
$panier=new panierC();
$panier->supprimerpanier($_POST["nomProd"]);
require_once("checkout.html")
?>