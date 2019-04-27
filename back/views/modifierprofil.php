<?php
require_once "../core/admin.php";
//echo $_POST['mail'];

$clientt=new admin();
$clientt->modifier($_POST['id'],$_POST['mdp']);
 if(isset($_SESSION['active']))
session_start();
session_unset();
//session_destroy();
//session_start();
 
$_SESSION['identifiant']=$_POST['id'];
$_SESSION['motdepasse']=$_POST['mdp'];
$_SESSION['active'] = 1; 
echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Mot de passe changé avec 
                <strong class='green'>succés</strong>
                </center></div>";
require_once("profil.php");
?>
