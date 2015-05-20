<?php 
	include_once("classes/Product.class.php");
	include_once("classes/FotoProduct.class.php");
	$prd = new Product();

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
<div class="zoekfilters">
	<h2>Zoekfilters</h2>
	<h3>Categorie</h3>
	<ul class="categorielist">
		<li>Fruit</li>
		<li>Groenten</li>
		<li>Kruiden</li>
		<li>Producten</li>	
	</ul>
	<div class="clear"></div>
	
</div>
<div class="zoekresultaten">
	<h2>Producten</h2>
			<?php $result = $prd->getMaandProducten();
				$number = $result->num_rows;
				$i = 1;
				while($s = $result->fetch_assoc())
				{
					
					$fto = new FotoProduct();
					$url = $fto->getFotoProduct($s['productid']);
					$str = "product";
				
			 ?>
	<a class="<?php echo $str ?>" href="detail.php?id=<?php echo $s['productid']?>">
	<?php 		
	while($u = $url->fetch_assoc())
				{		 ?>
		<img src="<?php echo $u['fotourl'] ?>"><?php } ?>
		<p class="prodtitel"><?php echo $s['titel'] ?></p>
		<p class="prodstad"><?php echo $s['gemeente'] ?></p>
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