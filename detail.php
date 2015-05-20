<?php
	include_once("classes/Product.class.php");
	include_once("classes/FotoProduct.class.php");
	$prd = new Product(); 
	$id=$_REQUEST['id'];
 ?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>T.A.G.</title>
<link href="assets/css/stylesheet.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Nunito:400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
<script src="assets/js/jquery-1.11.0.min.js"></script>
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
</head>

<body>
<div class="website">
<header>
	<div class="head">
		<a href="" class="inloglink">Inloggen</a>
	</div>
	<div class="clear"></div>
</header>
<section class="sectionmenu">
	<div class="headmenu">
	<a href="index.php"><img src="assets/img/logo.png" alt="TAG"></a>
	<span class="title">Trade And Grow</span>
	<form class="navbar-form" action="/search/" method="get" role="search">
				<div class="input-group">
					<input type="text" class="form-control" name="search" placeholder="Zoek op product of trefwoord">
					<div class="input-group-addon"><i class="fa fa-search"></i></div>
				</div>
		</form>
		
	</div>
</section>
<section class="sectionnav">
<div class="navmenu">
<nav>
		<ul>
			<li><a href="index.php" class="navknop">Home</a></li>
			<li><a href="overzicht.php" class="navknop">Overzicht</a></li>
			<li><a href="forum.php" class="navknop">Forum</a></li>
			<li><a href="aanmelden.html" class="navknop">Over T.A.G.</a></li>
		</ul>
		</nav>
		</div>
</section>		
<section class="contain">
<div class="content">
<?php $result = $prd->getProductDetail($id);
				while($s = $result->fetch_assoc())
				{
					
					$fto = new FotoProduct();
					$url = $fto->getFotoProduct($id);
				
			 ?>
	<div class="imageproduct">
		<?php 		
	while($u = $url->fetch_assoc())
				{		 ?>
		<img src="<?php echo $u['fotourl'] ?>"><?php } ?>
	</div>
	<div class="detailproduct">
		<h2><?php echo $s['titel'] ?></h2>
		<p><?php echo $s['gemeente'] ?></p>
		<div class="beschrijving"><?php echo $s['beschrijving'] ?>.</div>
		<a href="" class="button4">Map</a>
		<a href="" class="button4">Afspraak</a>
	</div>
	<div class="clear"></div>
	<?php } ?>
</div>
<div class="overeenkomen">
<h3>Overeenkomende producten</h3>
<?php $result = $prd->getMaandProducten();
				$number = $result->num_rows;
				$i = 1;
				while($s = $result->fetch_assoc())
				{
					
					$fto = new FotoProduct();
					$url = $fto->getFotoProduct($s['productid']);
				if($i < $number){
					$str = "overproduct";
				}else{
					$str = "overproductp";
				}
				
			 ?>
	<a class="<?php echo $str ?>" href="detail.php?id=<?php echo $s['productid']?>">
	<?php 		
	while($u = $url->fetch_assoc())
				{		 ?>
		<img src="<?php echo $u['fotourl'] ?>"><?php } ?>
		<p class="prodtitel"><?php echo $s['titel'] ?></p>
		<p class="prodstad"><?php echo $s['gemeente'] ?></p>
		<div class="clear"></div>
	</a>
	<?php $i++;} ?>
	<div class="clear"></div>
</div>
</section>
<div class="push"></div>
</div>
<footer>
<div class="footercontent">
<div class="footerblock">
	<h3 class="footertitel">Informatie</h3>
	<ul>
		<li>Home</li>
		<li>Overzicht</li>
		<li>Forum</li>
	</ul>
</div>
<div class="footerblock">
	<h3 class="footertitel">Copyright</h3>
	<p>&copy;Copyright T.A.G.</p>
</div>
<div class="footerblock">
	<h3 class="footertitel">Over T.A.G.</h3>
	<ul>
		<li>Over T.A.G.</li>
		<li>Contact</li>
	</ul>
</div>
</div>
</footer>
</body>

</html>