<?php
require_once ("../core/client.php");
if(isset($_POST['activer']))
{
$client=new clientr();
$client->activerclient($_POST["cin"]);
}
require_once ("gallery.php");
?>