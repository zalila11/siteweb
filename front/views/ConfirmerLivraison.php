<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 01/05/2018
 * Time: 01:46
 */

require_once '../entities/livraison.php';
require_once '../core/livraisonC.php';
$id=$_GET["id"];
$livraisonC=new livraisonC();
$livraisonC->updateStatuslivraison($id);
header("location: Afficher_Livraison_Client.php");



