<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<title>Mer bleue</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Shoppe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//for-mobile-apps -->
<!--Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//Custom Theme files -->
<!--js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<!--//js-->
<!--cart-->
<script src="js/simpleCart.min.js"></script>
<!--cart-->
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Fascinate' rel='stylesheet' type='text/css'>
<!--web-fonts-->
<!--animation-effect-->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--//animation-effect-->
<!--start-smooth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smooth-scrolling-->
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="top-header navbar navbar-default"><!--header-one-->
			<div class="container">
				<div class="nav navbar-nav wow fadeInLeft animated" data-wow-delay=".5s">
					<?php
				require_once "../../config.php";
				
				$tt=0;
			//session_start();
				if(isset($_SESSION['nomclient']))
				{
					?><p>Bienvenue <a href="profilclient.php"><?php echo $_SESSION['nomclient'];?></a>
					<form action="sedeconnecter.php"><a href="sedeconnecter.php">Se deconnecter </a></form></p>
					<?php
				}
				else{?>
					<p>Welcome to Mer bleue <a href="register.html">S'enregistrer </a> Or <a href="signin.html">Se connecter </a></p>
				</div>
				<div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated" data-wow-delay=".5s">
				<?php }?>
				
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header-two navbar navbar-default"><!--header-two-->
			<div class="container">
				<div class="nav navbar-nav header-two-left">
					<ul>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+216 53 625 844</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">Mer.blue@hotmail.com</a></li>			
					</ul>
				</div>
				<div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s">
					<h1><a href="index.html">Mer <b>bleue</b><span class="tag">Produits maritimes</span> </a></h1>
				</div>
				<div class="nav navbar-nav navbar-right header-two-right">
					<div class="header-right my-account">
						<a href="contact.html"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Contacter nous</a>						
					</div>
					<div class="header-right cart">
						<a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
						<h4><a href="checkout.html">
								<span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>) 
						</a></h4>
						<div class="cart-box">
							<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="top-nav navbar navbar-default"><!--header-three-->
			<div class="container">
				<nav class="navbar" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!--navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav top-nav-info">
							<li><a href="index.php" class="active">Acceuil</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle active" data-toggle="dropdown">Produits<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column multi-column1">
									<div class="row">
										<div class="col-sm-4 menu-grids menulist1">
											
											<ul class="multi-column-dropdown ">
												<li><a class="list" href="wishlist.php"><h4>Wishlist</h4></a></li>
												
											</ul>
											
										</div>																		
										<div class="col-sm-2 menu-grids">
											<a href="products.php"><h4>Poisson</h4></a>
											<ul class="multi-column-dropdown">
												
											</ul>
										</div>
										
										
										<div class="clearfix"> </div>
									</div>
								</ul>
							</li>
							<li class="dropdown grid">
								<a href="#" class="dropdown-toggle list1" data-toggle="dropdown">Réclamation<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column multi-column2">
									<div class="row">
										<div class="col-sm-3 menu-grids">
											<h4>Reclamation</h4>
											<ul class="multi-column-dropdown">
												<li><a class="list" href="reclamation.php">Passer une reclamation</a></li>
												<li><a class="list" href="rendezvous.php">Prendre un rendez-vous</a></li>
												<li><a class="list" href="afficherRec.php">Mes reclamations</a></li>
												
											</ul>
										</div>																		
										
										
										
										<div class="clearfix"> </div>
									</div>
								</ul>
							</li>
							
							<li><a href="catalogue.php">Catalogue</a></li>
							
							<li><a href="codes.html">A propos</a></li>
						</ul> 
						<div class="clearfix"> </div>
						<!--//navbar-collapse-->
						<header class="cd-main-header">
							<ul class="cd-header-buttons">
								<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
							</ul> <!-- cd-header-buttons -->
						</header>
					</div>
					<!--//navbar-header-->
				</nav>
				<div id="cd-search" class="cd-search">
					<form>
						<input type="search" placeholder="Search...">
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--//header-->
	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Acceuil</a></li>
				<li class="active">Wishlist</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--products-->
	
<div class="new">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title">Wish<span>List</span></h3>
				<p>Wishlist</p>
			


<h2 align="left">Liste des wishlist</h2>
<?PHP
require_once ("../core/wishlistC.php");
$wishlist=new wishlistC();
$listeWishlists=$wishlist->afficherwishlist($_SESSION['cin']);
?>
<br><table border="3">
<tr>

<td>Nom Produit</td>
<td>Quantiet Produit</td>
</tr>
<?PHP
foreach($listeWishlists as $row){
	?>
	<tr>
	
	<td><?PHP echo $row['nomproduit']; ?></td>
	<td><?PHP echo $row['quantitep']; ?></td>
</form>
<?PHP
}
?>
</table>
</form>
</table>
<h2>Rechercher un wishlist</h2>
<?PHP
require_once ("../core/wishlistC.php");
$wishlist=new wishlistC();
if (isset($_POST["rechr"]))
{
$rech=$_POST["rechr"];
$listeWishlists=$wishlist->rechercherwishlist($rech,$_SESSION['cin']);
}

?>
<form method="POST" action="#">
<input type="text" name="rechr">
<input type="submit" name="rechercher" value="rechercher">
<table border="3">
<tr>
<td>Nom Produit</td>
<td>Quantite Produit</td>
</tr>
<?PHP
foreach($listeWishlists as $row){
	?>
	<tr>
<td><?PHP echo $row['nomproduit']; ?></td>
<td><?PHP echo $row['quantitep']; ?></td>
</tr>
	<?PHP
}
?>
</table>
	</form>

<a href="wishlist.php">Home</a>	
			





				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//products-->
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-info">
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".5s">
					<h4 class="footer-logo"><a href="index.html">Mer <b>Bleue</b> <span class="tag">Produits maritimes </span> </a></h4>
					<p>© 2016 Mer bleue . All rights reserved | Design by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p>
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".7s">
					<h3>Popular</h3>
					<ul>
						<li><a href="codes.html">About Us</a></li>
						<li><a href="products.html">new</a></li>
						<li><a href="contact.html">Contacter nous</a></li>
						<li><a href="checkout.html">Wishlist</a></li>
					</ul>
				
	<!--//footer-->			
	<!-- the jScrollPane script -->
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
			<script type="text/javascript" id="sourcecode">
				$(function()
				{
					$('.scroll-pane').jScrollPane();
				});
			</script>
	<!-- //the jScrollPane script -->
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<!-- the mousewheel plugin -->
	<!--search jQuery-->
	<script src="js/main.js"></script>
	<!--//search jQuery-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!--//smooth-scrolling-of-move-up-->
	<!--Bootstrap core JavaScript
    ================================================== -->
    <!--Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>