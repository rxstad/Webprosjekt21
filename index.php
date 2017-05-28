<?php
require("header.php");
require("header_menu.php");

?>
<link rel="stylesheet" type="text/css" href="css/front_style.css">

<body>
<div id="header">
    <source src="img/snow_footage.mp4" type="video/mp4">

    <div id="header_search_outer">
        <div class="header_search_inner">
        	<center><img src="img/icons/index_header_search.png" width="80px"></center>
            <h2>Søk</h2>
            <form method="post" action="results.php?go" id="searchform">
                <input type="text" id="search" name="search" placeholder="skriv her + enter" onfocus="this.placeholder = ''"
                       onblur="this.placeholder = 'skriv her + enter'">
                <input type="submit" name="submit" value="search">
            </form>
        </div>
    </div>


    <div class="fullscreen_bg">
        <div class="arrow">
            <div class="arrow_wave"><span></span><span></span><span></span>
            </div>
        </div>
        <video loop muted autoplay loop class="fullscreen_bg_video">
            <source src="img/backgrounds/video_bg_compressed.mp4" type="video/mp4">
        </video>
    </div>

</div>
<div id="wrapper">
    <div id="main">
    <br>
        <center><h1>Vet du ikke hva du vil?</h1></center>
        <br>
        <div id="mainflex">
            <div class="mainflex_item">

                <form method="post" action="results.php?go" id="searchform">
                    <input type="text" value="mat" name="search" hidden="true">
                    <button type="submit" name="submit" value="mat" class="hide_button">
                        <img src="img/temp/mat1.jpg" class="imgitem_main" width="100%"></button>
                </form>

                <div class="imgdesc_main">Spise</div>
                </a>
            </div>
            <div class="mainflex_item">

                <form method="post" action="results.php?go" id="searchform">
                    <input type="text" value="Museum" name="search" hidden="true">
                    <button type="submit" name="submit" value="Museum" class="hide_button">
                        <img src="img/temp/opera.jpg" class="imgitem_main" width="100%"></button>
                </form>


                <div class="imgdesc_main">Museum</div>
            </div>
            <div class="mainflex_item">
                <form method="post" action="results.php?go" id="searchform">
                    <input type="text" value="uteliv" name="search" hidden="true">
                    <button type="submit" name="submit" value="uteliv" class="hide_button">
                        <img src="img/temp/nightlife.jpg" class="imgitem_main" width="100%"></button>
                </form>


                <div class="imgdesc_main">Uteliv</div>
            </div>
            <div class="mainflex_item">

                <form method="post" action="results.php?go" id="searchform">
                    <input type="text" value="park" name="search" hidden="true">
                    <button type="submit" name="submit" value="park" class="hide_button">
                        <img src="img/temp/park3.jpg" class="imgitem_main" width="100%"></button>
                </form>

                <div class="imgdesc_main">Parker</div>
            </div>
            <div class="mainflex_item">
                <form method="post" action="results.php?go" id="searchform">
                    <input type="text" value="kaffe" name="search" hidden="true">
                    <button type="submit" name="submit" value="kaffe" class="hide_button">
                        <img src="img/temp/coffeeshop2.jpg" class="imgitem_main" width="100%"></button>
                </form>

                <div class="imgdesc_main">Kaffe</div>
            </div>
            <div class="mainflex_item">
                <form method="post" action="results.php?go" id="searchform">
                    <input type="text" value="butikk" name="search" hidden="true">
                    <button type="submit" name="submit" value="butikk" class="hide_button">
                        <img src="img/temp/windowpants.jpg" class="imgitem_main" width="100%"></button>
                </form>

                <div class="imgdesc_main">Shopping</div>
            </div>
        </div>


    </div><br>

    <div id="main_info">
        <div class="main_info_wrap">

            <div style="float:left; width: 45%; margin-left: 5%; margin-top: 80px">
                <h1>WesterLife</h1>
                WesterLife er en interaktiv løsning som er rettet mot studenter og ansatte på westerdals hvor de kan søke opp relevante aktiviteter og steder på området rundt campusene.<br><br>

                <a href="about.php">
                    Les mer om oss
                </a>
            </div>

            <div style="float:left; width: 40%">
                <img src="img/backgrounds/westerlife_iphone.png" class="iphone" width="340px">
            </div>

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
        $("#search").autocomplete({source : duce});
    });

$( ".selector" ).autocomplete({
    select: function(event, ui) {
        $('#search').submit();
    }
});


</script>
<script type="text/javascript" src="js/arrow.js"></script>


<?php
require("footer.php");
?>

</body>
</html>
