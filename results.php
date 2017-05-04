<?php
require("config.php");
require("header.php");
require("header_menu.php");
require("search.php")
?>
<link rel="stylesheet" type="text/css" href="css/results_style.css">

<body>
<div id="header">

    <div id="header_search_outer">
        <div class="header_search_inner">
            <? print_r($result); ?>
        </div>
    </div>
    <div class="header_img"></div>
</div>

<div id="wrapper">
    <div id="main">

        <div id="resultsflex">

            <?php require("card.php"); ?>

        </div>

    </div>
</div>

<?php
require("footer.php");
?>
</body>
</html>
