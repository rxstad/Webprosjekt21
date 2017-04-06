<?php
require("config.php");
require ("header.php");
?>
	<link rel="stylesheet" type="text/css" href="results_style.css">

<body>
<div id="header">
<div id="top_menu_fadein">
	
	<div class="top_menu">
		<a href="index.html">Hjem</a>
		<a href="#">Kategorier</a>
		<a href="#">Om</a>
		<a href="#">Hjelp</a>
	</div>

	</div>
	<div id="header_search_outer">
		<div class="header_search_inner">
		<h2>Resultater for "navn"</h2>
		</div>
	</div>
	<div class="header_img"></div>
</div>

	<div id="wrapper">
		<div id="main">
		<h2>Resultater</h2>

		<div id="resultsflex">

            <?php require("card.php"); ?>
            <!--
			<div class="resultsflex_item">
				<img src="img/shops/mathallen.jpg" class="imgitem_results" width="100%">
				<div class="imgdesc_title_results">Mathallen</div>
				<div class="imgdesc_address_results">Vulkan 5, 0178 Oslo</div>
			</div>
			<div class="resultsflex_item">
				<img src="img/shops/mathallen.jpg" class="imgitem_results" width="100%">
				<div class="imgdesc_title_results">Mathallen</div>
				<div class="imgdesc_address_results">Vulkan 5, 0178 Oslo</div>
			</div>
			<div class="resultsflex_item">
				<img src="img/shops/mathallen.jpg" class="imgitem_results" width="100%">
				<div class="imgdesc_title_results">Mathallen</div>
				<div class="imgdesc_address_results">Vulkan 5, 0178 Oslo</div>
			</div>
			<div class="resultsflex_item">
				<img src="img/shops/mathallen.jpg" class="imgitem_results" width="100%">
				<div class="imgdesc_title_results">Mathallen</div>
				<div class="imgdesc_address_results">Vulkan 5, 0178 Oslo</div>
			</div>*-->

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
</body>
</html>
