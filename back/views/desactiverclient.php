<?php
require_once ("../core/client.php");
if(isset($_POST['desactiver']))
{
$client=new clientr();
$client->desactiverclient($_POST["cin"]);
}
require_once ("gallery.php");
?>