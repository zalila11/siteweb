
<?php
include "../entities/reclamation.php";
require "../core/modifierReclamation.php";

$reclamation=new reclamationm();
$reclamation1= new reclamation($_POST['nomRec'],$_POST['dateRec'],$_POST['messageRec'],$_POST['sujetRec'],$_POST['email']);
$reclamation->modifierReclamation($reclamation1,$_POST['nomRec']);
require_once("icons.php");
?>