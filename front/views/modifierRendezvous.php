<?php
include "../entities/rendezvous.php";
require "../core/modifierRendezvous.php";

$rendezvoust=new rendezvousm();
$dateRen=date('d/m/Y');
$rendezvous1= new rendezvous($_POST['idRen'],$_POST['nomRen'],$_POST['lieuRen'],$dateRen);
$rendezvoust->modifierRendezvous($rendezvous1,$_POST['idRen']);
require_once("icons.php");
?>