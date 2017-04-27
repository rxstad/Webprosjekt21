<?php
require("header.php");

?>
<link rel="stylesheet" type="text/css" href="front_style.css">

<body>
<div id="header">
	<div id="header_menu">
	<div class="header_menu_inner">
	<div class="header_menu_logo"><a href="index.php"><img src="img/logo_greenblue.png" width="50px"></a></div>
	<div class="header_menu_child">
	<a href="index.php">Hjem</a>
	<a href="#">Kategorier</a>
	<a href="#">Om</a>
	<a href="#">Hjelp</a>
	</div>
	</div>
	</div>
	
	<div id="header_search_outer">
		<div class="header_search_inner">
			<h2>Jeg vil</h2>


            <form method="post" action="results.php?go" id="searchform">
			<input type="text" name="search" placeholder="Søk + enter" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Søk + enter'">
			<input  type="submit" name="submit" value="Search">
            </form>


		</div>
	</div>
	<div class="header_img"></div>
</div>
<div id="wrapper">
	<div id="main">
		<center><h1>Vet du ikke hva du vil?</h1></center><br>
		<div id="mainflex">
			<div class="mainflex_item">
				<img src="img/shops/mat1.jpg" class="imgitem_main" width="100%">
				<div class="imgdesc_main">Spise</div>
			</div>
			<div class="mainflex_item">
				<img src="img/shops/opera.jpg" class="imgitem_main" width="100%">
				<div class="imgdesc_main">Musem</div>
			</div>
			<div class="mainflex_item">
				<img src="img/shops/nightlife.jpg" class="imgitem_main" width="100%">
				<div class="imgdesc_main">Uteliv</div>
			</div>
			<div class="mainflex_item">
				<img src="img/shops/park3.jpg" class="imgitem_main" width="100%">
				<div class="imgdesc_main">Parker</div>
			</div>
			<div class="mainflex_item">
				<img src="img/shops/coffeeshop2.jpg" class="imgitem_main" width="100%">
				<div class="imgdesc_main">Kaffe</div>
			</div>
			<div class="mainflex_item">
				<img src="img/shops/windowpants.jpg" class="imgitem_main" width="100%">
				<div class="imgdesc_main">Shopping</div>
			</div>
		</div>

	</div>
</div>
<div id="footer">
	<div class="inner_footer">
		<div style="float:left; padding-top: 4%; width:60%">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
				<br><br>
				<img src="img/social/facebook.svg" width="20px" class="footer_social_img">&nbsp;&nbsp;
				<img src="img/social/instagram.svg" width="20px" class="footer_social_img">&nbsp;&nbsp;
				<img src="img/social/tumblr.svg" width="20px" class="footer_social_img">&nbsp;&nbsp;
				<img src="img/social/twitter.svg" width="20px" class="footer_social_img">&nbsp;&nbsp;
		</div>
		<div style="float:left; padding-top: 9%; text-align: right; width:40%">
				<div class="footer_copyright">
				Vilkår for bruk &#8226; Personvernerklæring<br>
				MADE IN OSLO, NORWAY © 2017
		</div>
	</div>
		
</div>
</div>

</body>
</html>
