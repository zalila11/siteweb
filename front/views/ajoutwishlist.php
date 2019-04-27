<?php
include "../entities/wishlist.php";
require_once ("../core/wishlistC.php");



$wishlists=new wishlistC();

$wishlist1= new wishlist($_POST['idwishlist'],$_POST['nomproduit'],$_POST['quantitep'],$_POST['cin']);
$wishlists->ajouterwishlist($wishlist1);


require_once("ajouterwishlist.php");
?>
