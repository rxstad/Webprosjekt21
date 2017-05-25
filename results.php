<?php
require("config.php");
require("header.php");
require("header_menu.php");
require("search.php");
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

        <div id="not_found">
        <h2>Fant du ikke det du lette etter?</h2>
        <center><form method="post" action="results.php?go" id="searchform">
                <input type="text" id="search" name="search" placeholder="Søk + enter" onfocus="this.placeholder = ''"
                       onblur="this.placeholder = 'Søk + enter'">
                <input type="submit" name="submit" value="search">
            </form></center>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/require.js/2.1.10/require.js"></script>
<link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css">

<script type="text/javascript">
    //auto search function
    var duce = <?php require("Autocomplete.php") ?>;

    $(document).ready(function () {
        $("#search").autocomplete({
            source : duce,
            maxShowItems: 5
        });
    });




</script>
<?php
require("footer.php");
?>

</body>
</html>
