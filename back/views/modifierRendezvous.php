<?php
include "../entities/rendezvous.php";
require "../core/modifierRendezvous.php";

$rendezvoust=new rendezvousm();
$dateRen=$_POST['dateRen'];

$rendezvous1= new rendezvous($_POST['nomRen'],$_POST['lieuRen'],$dateRen);
$rendezvoust->modifierRendezvous($rendezvous1,$_POST['nomRen']);
require_once("afficherRen.php");
?>