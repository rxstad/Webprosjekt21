<?php
require("config.php");
require ("header.php");
require ("search.php")
?>
	<link rel="stylesheet" type="text/css" href="results_style.css">

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
		<h2><?print_r($result);?></h2>
		</div>
	</div>
	<div class="header_img"></div>
</div>

	<div id="wrapper">
		<div id="main">

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

<?php
require("footer.php");
?>
</body>
</html>
