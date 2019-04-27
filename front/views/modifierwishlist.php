<?php
include "../entities/wishlist.php";
require_once ("../core/wishlistC.php");

$wishlisttt=new wishlistC();

$wishlist1= new wishlist($_POST['idwishlist'],$_POST['nomproduit'],$_POST['quantitep']);
$wishlisttt->modifierwishlist($wishlist1,$_POST['idwishlist']);
require_once("modificationwishlist.php");
?> 