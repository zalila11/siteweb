<?php
include "../entities/catalogue.php";
require "../core/catalogueC.php";

$idc=0 ; 
$nomc=0;
$date=0 ; 



if((ctype_digit($_POST['idcatalogue']))&&(($_POST['idcatalogue'])<99))
{
    $idc=0 ; 

}
else 
{
    $idc++;
}
if (ctype_upper($_POST['nom']))
{
$nomc=0;
}
else
{
	$nomc++;
}
if(($_POST['datefin']>=$_POST['datedebut']))
{
    $date=0 ; 
}
else 
{
    $date++; 
}









if(($idc==0)&&($nomc==0)&&($date==0))
{

$cataloguee=new catalogueC();
$catalogue1= new Catalogue($_POST['idcatalogue'],$_POST['nom'],$_POST['datedebut'],$_POST['datefin']);
$cataloguee->ajoutercatalogue($catalogue1);
}
else

{
if($idc>0)
    {
    echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Code du catalogue
                <strong class='green'>doit contenir que des nombres et doit contenir 2 nombres</strong>
                </center></div>";
    }

    if($nomc>0)
    {
    		echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Le nom du catalogue doit contenir que 
                <strong class='green'>des lettres majuscule</strong>
                </center></div>";
    }
  if($date>0)
    {
            echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>La date
                <strong class='green'>date fin superieur a date debut</strong>
                </center></div>";
    }



}

require_once("cajouter.php");
?>