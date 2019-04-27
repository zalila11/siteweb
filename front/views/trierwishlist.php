<?php
require_once  ("../core/wishlistC.php");
$wishlist=new wishlistC();
$wishlist->trierwishlist(/*$_POST["idproduit"]*/);
require_once("consulterwishlist.php")
?>