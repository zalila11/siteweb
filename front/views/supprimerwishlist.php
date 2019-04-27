<?php
require_once ("../core/wishlistC.php");
$wishlist=new wishlistC();
$wishlist->supprimerwishlist($_POST["idwishlist"]);
require_once("modificationwishlist.php")
?>