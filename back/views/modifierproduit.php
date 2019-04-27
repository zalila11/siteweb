<?php
include "../entities/produit.php";
require_once( "../core/produitC.php");

$produittt=new produitC();

$produit1= new produit($_POST['idproduit'],$_POST['nomproduit'],$_POST['datev'],$_POST['quantite'],$_POST['prix']);
$produittt->modifierproduit($produit1,$_POST['idproduit']);
require_once("pmodifierproduit.php");
?> 