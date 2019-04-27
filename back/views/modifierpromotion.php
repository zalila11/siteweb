<?php
include "../entities/promotion.php";
require "../core/modifierprmotion.php";

if(isset($_POST['modif']))
{
$idpromotion=$_POST['idp'];
$nom=$_POST['nomp'];
$datedebut=$_POST['dated'];
$datefin=$_POST['datef'];
$pourcentage=$_POST['pour'];

}
else if(isset($_POST['modifier']))
{
$promotion=new promotionm();
$promotion1= new promotion($_POST['idpromotion'],$_POST['nom'],$_POST['datedebut'],$_POST['datefin'],$_POST['pourcentage']);
$promotion->modifierpromotion($promotion1,$_POST['idpromotion']);
require_once("pmodifier.php");

}
?>