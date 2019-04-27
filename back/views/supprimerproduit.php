<?php
require_once ("../core/produitC.php");
$produit=new produitC();
$produit->supprimerproduit($_POST["idproduit"]);
require_once("button.php")
?>