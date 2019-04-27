<?php
include "../entities/produit.php";
require_once ("../core/produitC.php");
$idproduit=0;
$quantite=0;
$prix=0;
$nomproduit=0;
$cdate=0;
$today = date("Y-m-j");

for($i=0;$i<strlen($_POST['idproduit']);$i++)
{
	$idproduit++;
}
if (($_POST['datev'] >= $today))
{
$cdate=0;
}
else 
{
    $cdate++ ; 
}
if (ctype_digit($_POST['quantite']))
{
$quantite=0;
}
else
{
	$quantite++;
}
if (ctype_digit($_POST['prix']))
{
$prix=0;
}
else
{
	$prix++;
}
if(ctype_upper($_POST['nomproduit']))
{
	$nomproduit=0;
}
else
{
	$nomproduit++;
}
if(($idproduit==4)&&($quantite==0)&&($prix==0)&&($nomproduit==0)&&($cdate==0))
{

$produits=new produitC();

$produit1= new produit($_POST['idproduit'],$_POST['nomproduit'],$_POST['datev'],$_POST['quantite'],$_POST['prix']);
$produits->ajouterproduit($produit1);
}
else
{
	if(($idproduit==0)||($idproduit>4))
	{
	echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Id du produit
                <strong class='green'>doit contenir 4 nombres</strong>
                </center></div>";
    }
    
    if($quantite>0)
    {
    		echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>La quantite doit contenir que
                <strong class='green'>des chiffres</strong>
                </center></div>";
    }
    if($prix>0)
    {
    		echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Le prix doit contenir que
                <strong class='green'>des chiffres</strong>
                </center></div>";
    }
    if($nomproduit>0)
    {
    		echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Le nom du produit doit etre
                <strong class='green'>en majuscule</strong>
                </center></div>";
    }
     if($cdate>0)
    {
    		echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Le date doit etre superieur 
                <strong class='green'>a aujordh'ui</strong>
                </center></div>";
    }
    
}

require_once("pajouterproduit.php");
?>
