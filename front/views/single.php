<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?PHP
				require_once ("../../config.php");
 function afficherproduit($idproduit)
	{
		$idproduit;
		$db = config::getConnexion();
		$sql = 'SELECT * FROM produit WHERE idproduit= :idproduit';
		$req = $db->prepare($sql);
		$req->bindValue(':idproduit',$idproduit);
		$req->execute();
		$result = $req->fetch(PDO::FETCH_OBJ);
		return $result;
	}
	$affe=afficherproduit($_GET['idproduit']);
	
?>

<!DOCTYPE html>
<html>
<head>
<title>Modern Shoppe a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
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
<!--//js-->
<!--flex slider-->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider1.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<!--flex slider-->
<script src="js/imagezoom.js"></script>
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
				session_start();
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
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active"><?PHP echo $affe->nomproduit;?></li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--single-page-->



	<a href="products.php"><img src= "images/prev.png" class="img-responsive" alt=""/></a>
	<div class="single">
		<div class="container">
			<div class="single-info">		
				<div class="col-md-6 single-top wow fadeInLeft animated" data-wow-delay=".5s">	
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="images/s1.jpg">
								<div class="thumb-image"> <img src=<?php echo "'images/".$affe->nomproduit.".jpg'"?> data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							
						</ul>
					</div>
				</div>
				

				<div class="col-md-6 single-top-left simpleCart_shelfItem wow fadeInRight animated" data-wow-delay=".5s">
						<form method="POST" action="ajoutpanier.php">
					<h3 ><?PHP echo $affe->nomproduit;?></h3>
					<input type="hidden" value="<?PHP echo $affe->nomproduit;?>" name="nomProd">
					<h6 class="item_price" ><?PHP echo $affe->prix. "DT";?></h6>	
					<input type="hidden" value="<?PHP echo $affe->prix;?>" name="prixProd">
					<h6 class="item_price" ><?php echo $affe->quantite. "Kg"?></h6>	
					<h6 class="item_price"><?php echo  "A Consommer Avant Le ". $affe->datev?></h6>		
					
					<div class="clearfix"> </div>
					<div class="quantity">
						<p class="qty"> Qty :  </p><input min="1" max="<?PHP echo $affe->quantite
;?>" type="number" value="0" class="item_quantity " name="qte" >

					</div>
					<div class="btn_form">
						<input type="submit" value= "ADD TO CARTr">	
					</div>
				</form>
				</div>
			   <div class="clearfix"> </div>
			</div>
			<!--collapse-tabs-->
			<div class="collpse tabs">
				<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default wow fadeInUp animated" data-wow-delay=".5s">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								  Description
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								On offre une quantite de <?php echo $affe->quantite ?> KG de <?php echo $affe->nomproduit ?> frais avec un prix de <?php echo $affe->prix ?> DT pour le 1 Kg et avec un date de validite de <?php echo $affe->datev ?> 
							</div>
						</div>
					</div>
					
			<!--//collapse -->
			<!--related-products-->
			<div class="related-products">
				<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
					<h3 class="title">Other<span> Products</span></h3>
				</div>
				

				<div class="related-products-info">
					<div class="col-md-3 new-grid simpleCart_shelfItem wow flipInY animated" data-wow-delay=".5s">
						<div class="new-top">
							<a href="products.php"><img src= "images/thon.jpg" class="img-responsive" alt=""/></a>
							
						</div>
						<div class="new-bottom">
							<h5><a class="name" href="products.php">Thon</a></h5>
				
							</div>	
							
						</div>
					</div>
					<div class="related-products-info">
					<div class="col-md-3 new-grid simpleCart_shelfItem wow flipInY animated" data-wow-delay=".5s">
						<div class="new-top">
							<a href="products.php"><img src= "images/espadon.jpg" class="img-responsive" alt=""/></a>
							
						</div>
						<div class="new-bottom">
							<h5><a class="name" href="products.php?">Espadon</a></h5>
				
							</div>	
							
						</div>
					</div>
					<div class="related-products-info">
					<div class="col-md-3 new-grid simpleCart_shelfItem wow flipInY animated" data-wow-delay=".5s">
						<div class="new-top">
							<a href="products.php"><img src= "images/dorade.jpg" class="img-responsive" alt=""/></a>
							
						</div>
						<div class="new-bottom">
							<h5><a class="name" href="products.php">Dorade</a></h5>
				
							</div>	
							
						</div>
					</div>
					<div class="related-products-info">
					<div class="col-md-3 new-grid simpleCart_shelfItem wow flipInY animated" data-wow-delay=".5s">
						<div class="new-top">
							<a href="products.php"><img src= "images/sardine.jpg" class="img-responsive" alt=""/></a>
							
						</div>
						<div class="new-bottom">
							<h5><a class="name" href="products.php>">Sardine</a></h5>
				
							</div>	
							
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!--//related-products-->
		</div>
	</div>
	<!--//single-page-->
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-info">
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".5s">
					<h4 class="footer-logo"><a href="index.html">Modern <b>Shoppe</b> <span class="tag">Everything for Kids world </span> </a></h4>
					<p>© 2016 Modern Shoppe . All rights reserved | Design by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p>
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".7s">
					<h3>Popular</h3>
					<ul>
						<li><a href="about.html">About Us</a></li>
						<li><a href="products.html">new</a></li>
						<li><a href="contact.html">Contact Us</a></li>
						<li><a href="faq.html">FAQ</a></li>
						<li><a href="checkout.html">Wishlist</a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".9s">
					<h3>Subscribe</h3>
					<p>Sign Up Now For More Information <br> About Our Company </p>
					<form>
						<input type="text" placeholder="Enter Your Email" required="">
						<input type="submit" value="Go">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//footer-->			
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