<?php 

$kullaniciadi="root";
$sifre="";
$sunucu="localhost";
$database="nikerunning";

$baglan=new mysqli($sunucu,$kullaniciadi,$sifre,$database) or die("Unable to connect");
$ayar_sorgula = $baglan->query("select * from ayarlar");
$ayar_cek = mysqli_fetch_assoc($ayar_sorgula);

$menu_sorgula = $baglan->query("select * from menu");
$menu_cek = mysqli_fetch_assoc($menu_sorgula);

$ders_id = $_GET["detay_id"];
$dersleri_sor = $baglan->query("select * from dersler where dersler_id='$ders_id'");
$dersleri_cek = mysqli_fetch_assoc($dersleri_sor);
?>

<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="bootstrap/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js" integrity="sha256-ivk71nXhz9nsyFDoYoGf2sbjrR9ddh+XDkCcfZxjvcM="
        crossorigin="anonymous"></script>
	<script src="bootstrap/bootstrap.min.js"></script>
	<script src="awesomplete/awesomplete.min.js"></script>
	<script src="bootstrap/bootstrap.min.js"></script>
	<script src="awesomplete/awesomplete.min.js"></script>
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="awesomplete/awesomplete.css" />
	<link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/d3_app.css">
	<link rel="stylesheet" href="css/style.css">

	<style>



</style>

</head>
<body >


<div id="page" class="site">
	

	<header class="header">

<div class="site-branding">
	
	<div class="site-identity">
					<p class="site-title"><a class="site-menu-link" href="<?php echo $menu_cek['menu_bir_url']; ?>" rel="home"><?php echo $ayar_cek['site_adi']; ?></a></p>
					<p class="site-description"><?php echo $ayar_cek['site_aciklama']; ?></p>
			</div>
				</div>

					<div id="">
						<div id="primary-menu-wrapper" class="menu-wrapper">
						<div class="menu-toggle-wrapper">	
						</div>

					<div >
					
					<nav>
									<ul class="nav_links" >
									<li ><a href="<?php echo $menu_cek['menu_bir_url']; ?>?detay_id=#" aria-current="page">Home</a></li>

									<?php
										$menuleri_sor = $baglan->query("select * from menuler");
										
										while($menuleri_cek = mysqli_fetch_assoc($menuleri_sor)) {
											$menu_isim =   $menuleri_cek["menu_ad"]; 
											echo '<li ><a href="'.$menuleri_cek["menu_link"].'?detay_id=#" aria-current="page">'.$menuleri_cek["menu_ad"].'</a></li>';

										}
									?>
										

										

	
									</ul>
				
				</nav>

							</div>
		</div>

			</div>
			</div>
		</div>
	</header>

	
<div class="custom-header header-media">
	<div class="wrapper">
				<div class="custom-header-media">
			<div id="wp-custom-header" class="wp-custom-header"></div>	
					</div>
			</div>
	<div class="custom-header-overlay"></div>
</div>



<div id="portfolio-content-section" class="section portfolio-section section-boxed no-section-heading">
	<div class="wrapper">
		
		<div class="section-content-wrapper layout-three">
			<div class="grid">
				
			</div>
		</div>
	</div>
</div>


	<div id="content" class="site-content">
		<div class="wrapper">

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="singular-content-wrap">	
				<hr style="border:none; height:1px; background:white; margin-left:10%; margin-right:10%;">

				<div class="shopping-box">
<div class="shopping-card"><a href="#"><i class="fa fa-cart-arrow-down" style="color:white; font-weight:bold; text-align:center; font-size:28px; margin-left:32%; margin-top:32%; " aria-hidden="true"></i></a></div>

</div>