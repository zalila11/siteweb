<?php
include "../entities/tendance.php";
require_once "../core/tendance.php";
$vv=0;
if(($_POST['note']<=5)&&($_POST['note']>0))
{
$clientt=new tendenceaj();
$datee=date('d/m/Y');
$client1= new tendance($_POST['idproduit'],$_POST['nom'],$_POST['prix'],$datee,$_POST['note']);
$vv=$clientt->verifexist($client1);
if($vv==0)
$clientt->ajoutertendance($client1);
}
else
{
		echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>La note du produit doit etre compris entre 0 et 5
                </center></div>";
}
require_once("maps.php");
?>
