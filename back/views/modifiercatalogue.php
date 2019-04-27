<?php
include "../entities/catalogue.php";
require "../core/modifiercatalogue.php";
if(isset($_POST['modif']))
{
$idcatalogue=$_POST['idc'];
$nom=$_POST['nomc'];
$datedebut=$_POST['datedc'];
$datefin=$_POST['datefc'];

}
else if(isset($_POST['modifier']))
{
$catalogue=new cataloguetm();
$catalogue1= new catalogue($_POST['idcatalogue'],$_POST['nom'],$_POST['datedebut'],$_POST['datefin']);
$catalogue->modifiercatalogue($catalogue1,$_POST['idcatalogue']);
}
require_once("cmodifier.php");
?>