<?php
include "../entities/client.php";
require_once "../core/client.php";
$vv=0;
$clientt=new clientc();
$datee=date('d/m/Y');
$session="activer";
$mail=0;
$count=0;
$cin=0;
$tel=0;
$nomc=0;
$nomh=0;
for($i=0;$i<strlen($_POST['mail']);$i++)
{
	if($_POST['mail'][$i]=="@")
	{
		$mail++;
	}
}
for($i=0;$i<strlen($_POST['motdepasse']);$i++)
{
	$count++;
}
if (ctype_digit($_POST['cin']))
{
$cin=0;
}
else
{
	$cin++;
}
if (ctype_digit($_POST['telephone']))
{
$tel=0;
}
else
{
	$tel++;
}
if(ctype_alpha($_POST['nomclient']))
{
	$nomc=0;
}
else
{
	$nomc++;
}
if(ctype_alpha($_POST['nomcommerce']))
{
	$nomh=0;
}
else
{
	$nomh++;
}
if(($mail==1)&&($cin==0)&&($tel==0)&&($nomc==0)&&($nomh==0))
{
$client1= new client($_POST['nomclient'],$_POST['nomcommerce'],$_POST['cin'],$_POST['mail'],$_POST['telephone'],$_POST['adresse'],$_POST['motdepasse'],$datee,$session);
$vv=$clientt->verifexist($client1);
if($vv==0)
$clientt->ajouterclient($client1);
}
else
{
	if(($mail==0)||($mail>1))
	{
	echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               Adresse mail 
                <strong class='green'>invalide</strong>
                </div>";
    }
    if($count<7)
    {
    	echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               Le mot de passe saisi est 
                <strong class='green'>trop court</strong>
                </div>";
    }
    if($cin>0)
    {
    		echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               Le numéro de la carte d'identité doit contenir que 
                <strong class='green'>des chiffres</strong>
                </div>";
    }
    if($tel>0)
    {
    		echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               Le numéro du téléphone doit contenir que 
                <strong class='green'>des chiffres</strong>
                </div>";
    }
    if($nomc>0)
    {
    		echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               Le nom du client doit contenir que 
                <strong class='green'>des lettres</strong>
                </div>";
    }
    if($nomh>0)
    {
    		echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               Le nom de l'hotel ou du restaurant doit contenir que 
                <strong class='green'>des lettres</strong>
                </div>";
    }
}
require_once("register.html");
?>

