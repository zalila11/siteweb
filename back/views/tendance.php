<?php
include "../entities/tendance.php";
require_once "../core/tendance.php";

$clientt=new tendenceaj();
$datee=date('d/m/Y');
echo $datee;
$session="on";
echo "okkkkkk";
$client1= new client($_POST['nomclient'],$_POST['nomcommerce'],$_POST['cin'],$_POST['mail'],$_POST['telephone'],$_POST['adresse'],$_POST['motdepasse'],$datee,$session);
//$clientt->afficherclient($employe2);
//var_dump($employe2);
//$clientt->ajouteremployer($Employe1);
$clientt->ajouterclient($client1);
//$clientt->afficheremployerbase();
//$clientt->modifieremploye(07,"ok","ca",20,20);
?>