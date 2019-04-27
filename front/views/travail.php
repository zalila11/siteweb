<?php
include "../entities/client.php";
require_once "../core/client.php";

$clientt=new clientc();
$datee=date('d/m/Y');
$session="on";
$client1= new client($_POST['nomclient'],$_POST['nomcommerce'],$_POST['cin'],$_POST['mail'],$_POST['telephone'],$_POST['adresse'],$_POST['motdepasse'],$datee,$session);
$clientt->ajouterclient($client1);
require_once("register.html");
?>

