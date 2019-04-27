<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start();  
 if(!isset($_SESSION['active'])) 
{
		include "signin.php";
}
else
{
	require_once ("../../config.php");
$db=config::getConnexion();
$req1=$db->query("SELECT COUNT(*) as nb1 FROM client WHERE status='desactiver' "  );
$nb1 = $req1->fetch();

?>
<?PHP
require_once "../core/client.php";
$clientstat=new clientr();
$listeEmployes=$clientstat->nbclient();
$cl=0;
$annee=0;
$mois=0;
$jour=0;
$datee=date('d/m/Y');
$testannee="";
$testannee1="";
$testannee=substr($datee,6,4);
$testmois="";
$testmois1="";
$testmois=substr($datee,3,7);
$testjour="";
$testjour1="";
$testjour=substr($datee,0,10);
foreach($listeEmployes as $row){
$cl++;
$testannee1=substr($row['datee'],6,4);
$testmois1=substr($row['datee'],3,7);
$testjour1=substr($row['datee'],0,10);
if($testannee==$testannee1)
{
	$annee++;
}
if($testmois==$testmois1)
{
	$mois++;
}
if($testjour==$testjour1)
{
	$jour++;
}
}
{
	//echo $testannee1;
	//echo $testannee;
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Dashboard Mer bleue</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<!-- tables -->
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="logo-w3-agile">
								<h1><a href="index.php">Mer bleue</a></h1>
							</div>
					<div class="w3layouts-left">
							
							<!--search-box-->
								<div class="w3-search-box">
									<form action="#" method="post">
										<input type="text" placeholder="Search..." required="">	
										<input type="submit" value="">					
									</form>
								</div><!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 <div class="w3layouts-right">
							<div class="profile_details_left"><!--notifications of menu start -->
								<ul class="nofitications-dropdown">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge"><?php if ($nb1 > 0 ){echo 1;}?></span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3></h3>
													
												</div>
											</li>
											<li><a href="#">
											   <div class="notification_desc">
												<p>Vous avez <?php echo $nb1['nb1']?> Compte Client Désactiver.</p>
												
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											 
										</ul>
									</li>
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue"><?php if ($jour > 0 ){echo 1;}?></span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have new notification</h3>
													
												</div>
											</li>
											<li><a href="#">
											   <div class="notification_desc">
												<p>Vous avez <?php echo $jour?> Client inscrit aujourd'hui.</p>
												
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											 
										</ul>
									</li>	
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1"><?php echo $cl?></span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have new notification</h3>
													
												</div>
											</li>
											<li><a href="#">
											   <div class="notification_desc">
												<p>Vous avez <?php echo $cl?> Client inscrit.</p>
												
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											 
										</ul>
									</li>	
									<div class="clearfix"> </div>
								</ul>
								<div class="clearfix"> </div>
							</div>
							<!--notification menu end -->
							
							<div class="clearfix"> </div>				
						</div>
						<div class="profile_details w3l">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/in4.jpg" alt=""> </span> 
												<div class="user-name">
													<p><?php if(isset($_SESSION['active']))echo $_SESSION['identifiant']; else echo "Non connecté"?></p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<?php $i=0;if(isset($_SESSION['active']))$i=1;{?>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href=<?php if($i==1)echo "profil.php"?>><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="deconnexion.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<?php }?>
							
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Gestion client</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info">
						<div class="agile-tables">

					<div class="w3l-table-info">
	<div class="four-grids">
					<div class="col-md-3 four-grid">
						<div class="four-agileits">
							<div class="icon">
								<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</div>
							<div class="four-text">
									

								<h3>Clients</h3>
								<h4><?php echo $cl;?></h4>
								
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-agileinfo">
							<div class="icon">
								<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Cette année</h3>
								<h4><?php echo $annee; ?></h4>

							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-w3ls">
							<div class="icon">
								<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Ce mois-ci</h3>
								<h4><?php echo $mois; ?></h4>
								
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-wthree">
							<div class="icon">
								<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Aujourd'hui</h3>
								<h4><?php echo $jour; ?></h4>
								
							</div>
							
						</div>
					</div>
					<?php }?>
					<div class="clearfix"></div>
				</div>
<h2>Rechercher un client</h2>
<form method="POST" action="#">
<input type="text" name="rech"><input type="submit" name="rechercher" value="rechercher">
	</form>
	<?PHP
require_once "../core/client.php";
$e=0;
if(isset($_POST['rech']))
{
$client=new clientr();
if($_POST['rech']=="")
{
$listeEmployes=$client->afficherclient();
}
else
{
//echo ($_POST["rech"]);
$n=$_POST["rech"];
$listeEmployes=$client->rechercherclient($n);
}
?>
<div class="w3l-table-info">
<table id="table">
	<thead>
<tr>
<th>Nom client</th>
<th>Nom hotel ou restaurant</th>
<th>cin</th>
<th>mail</th>
<th>telephone</th>
<th>adresse</th>
<th>motdepasse</th>
<th>date inscription</th>
<th>session</th>
</tr>
</thead>
<?PHP
foreach($listeEmployes as $row){
	?>
	<tbody>
	<tr>
	<td><?PHP echo $row['nomclient']; ?></td>
	<td><?PHP echo $row['nomcommerce']; ?></td>
	<td><?PHP echo $row['cin']; ?></td>
	<td><?PHP echo $row['mail']; ?></td>
	<td><?PHP echo $row['telephone']; ?></td>
	<td><?PHP echo $row['adresse']; ?></td>
	<td><?PHP echo $row['motdepasse']; ?></td>
	<td><?PHP echo $row['datee']; ?></td>
	<td><?PHP echo $row['status']; ?></td>
	<td><form method="POST" action="supprimerclient.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
	</form>
	<td><form method="POST" action="desactiverclient.php">
	<input type="submit" name="desactiver" value="desactiver">
	<input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
	</form>
	<td><form method="POST" action="activerclient.php">
	<input type="submit" name="activer" value="activer">
	<input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
	</form>
	
	</tr>
	</tbody>
	<?PHP
}
?>
</table>
</div>
<h2><a href="imprimerlisteclient.php">Imprimer Liste clients</h2>
<?php }?>
<?php if(isset($_POST['modif'])){?>
<form method="POST" action="modifierclient.php">
<table>
			<h2>Modifier Client</h2>
<tr>
<td>Nom client</td>
<td><input type="text" required="" name="nomclient" value="<?PHP echo $nom; ?>"></td>
</tr>
<tr>
<td>Nom Hotel ou restaurant</td>
<td><input type="text" required="" name="nomcommerce" value="<?PHP echo $nomc; ?>"></td>
</tr>
<tr>
<td>CIN</td>
<td><input type="text" required="" name="" value="<?PHP echo $cin; ?>" disabled></td>
<input type="hidden" value="<?PHP echo $cin; ?>" name="cin">
</tr>
<tr>
<td>Mail</td>
<td><input type="text" required="" name="mail" value="<?PHP echo $mail; ?>"></td>
</tr>
<tr>
<td>Telephone</td>
<td><input type="text" required="" name="telephone" value="<?PHP echo $tel; ?>"></td>
</tr>
<tr>
<td>Adresse</td>
<td><input type="text" required="" name="adresse" value="<?PHP echo $adresse; ?>"></td>
</tr>
<tr>
<td>Mot de passe</td>
<td><input type="text" required="" name="motdepasse" value="<?PHP echo $motdepasse; ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="Modifier"></td>
</tr>

</table>
</form>	
<?php }?>
	</div>
</div>
</div>
					 
			</div>
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Pooled . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>
										
										
										 <li id="menu-academico" ><a href="inbox.html"><i class="fa fa-envelope nav_icon"></i><span>Inbox</span><div class="clearfix"></div></a></li>
									<li><a href="gallery.php"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Gestion clients</span><div class="clearfix"></div></a></li>
									<li id="menu-academico" ><a href="charts.php"><i class="fa fa-bar-chart"></i><span>Gestion commande</span><div class="clearfix"></div></a></li>
									 <li id="menu-academico" ><a href="afficherRec.php"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Gestion reclamation</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                       
                    </li>
                  <li id="menu-academico" ><a href="afficherRen.php"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Gestion rendez_vous</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                       <ul id="menu-academico-sub" >
                       <li id="menu-academico-avaliacoes" ><a href="rendez.php">Ajouter rendez_vous</a></li>
                       <li id="menu-academico-avaliacoes" ><a href="statistiques.php">statistiques rendez_vous</a></li>
                  
                      </ul>
                    </li>
									<li id="menu-academico" ><a href="button.php"><i class="fa fa-bar-chart"></i><span>Gestion produit</span><div class="clearfix"></div></a></li>
									
									 <li id="menu-academico" ><a href="calendar.php"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Gestion promotion</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="pajouter.php">Ajouter</a></li>
											<li id="menu-academico-avaliacoes" ><a href="form.php">Modifier</a></li>
											<li id="menu-academico-avaliacoes" ><a href="psupprimer.php">Supprimer</a></li>
											<li id="menu-academico-avaliacoes" ><a href="prechercher.php">Rechercher</a></li>
											<li id="menu-academico-avaliacoes" ><a href="affectpromo">Affecter une promotion</a></li>
										  </ul>
										</li>




									<li id="menu-academico" ><a href="catalogue.php"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Gestion catalogue</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="cajouter.php">Ajouter</a></li>
											<li id="menu-academico-avaliacoes" ><a href="form1.php">Modifier</a></li>
											<li id="menu-academico-avaliacoes" ><a href="csupprimer.php">Supprimer</a></li>
											<li id="menu-academico-avaliacoes" ><a href="crechercher.php">Rechercher</a></li>
											<li id="menu-academico-avaliacoes" ><a href="prechercher.php">Affecter un catalogue</a></li>
										  </ul>
										</li>
										
									<li><a href="AjouterLivraison.php"><i class="fa fa-table"></i>  <span>Ajouter Livraison</span><div class="clearfix"></div></a></li>
                    <li><a href="AjouterLivreur.php"><i class="fa fa-table"></i>  <span>Ajouter Livreur</span><div class="clearfix"></div></a></li>
                    <li><a href="Afficherlivraison.php"><i class="fa fa-table"></i>  <span>Afficher Livraison</span><div class="clearfix"></div></a></li>
                    <li><a href="AfficherLivreur.php"><i class="fa fa-table"></i>  <span>Afficher Livreur</span><div class="clearfix"></div></a></li>
                    <li><a href="Statisques.php"><i class="fa fa-table"></i>  <span>Statisques Livreurs</span><div class="clearfix"></div></a></li>
									<li><a href="maps.php"><i class="fa fa-map-marker" aria-hidden="true"></i>  <span>Gestion tendance</span><div class="clearfix"></div></a></li>
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>
<?php }
?>