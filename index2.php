<?php
require("header.php");
require("header_menu.php");
require ("search.php");

?>
<link rel="stylesheet" type="text/css" href="css/front_style.css">
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />

<body>
<div id="header">
    <source src="img/snow_footage.mp4" type="video/mp4">

    <div id="header_search_outer">
        <div class="header_search_inner">
            <h2>Jeg vil</h2>
            <form method="post" action="results.php?go" id="searchform">
                <input type="text" name="search" value="" class="auto" placeholder="Søk + enter" onfocus="this.placeholder = ''"
                       onblur="this.placeholder = 'Søk + enter'">
                <input type="submit" name="submit" value="search">
            </form>

            <form class="sansserif" action="view.php" method="post">
                Name: <input type="text" id="hint" name="hint" />
                <input type="submit" name="submit" value="View">
            </form>

            <form method="post" action="results.php?go" id="searchform">
            <p><input type='text' name='search' id="search" autocomplete="off" value=''></p>
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
            <source src="img/backgrounds/video_bg6.mp4" type="video/mp4">
        </video>
    </div>

</div>
<div id="wrapper">
    <div id="main">
        <center><h1>Vet du ikke hva du vil?</h1></center>
        <br>
        <div id="mainflex">
            <div class="mainflex_item">

                <form method="post" action="results.php?go" id="searchform">
                    <input type="text" value="mat" name="search" hidden="true">
                    <button type="submit" name="submit" value="mat" class="hide_button">
                        <img src="img/shops/mat1.jpg" class="imgitem_main" width="100%"></button>
                </form>

                <div class="imgdesc_main">Spise</div>
                </a>
            </div>
            <div class="mainflex_item">

                <form method="post" action="results.php?go" id="searchform">
                    <input type="text" value="opera" name="search" hidden="true">
                    <button type="submit" name="submit" value="opera" class="hide_button">
                        <img src="img/shops/opera.jpg" class="imgitem_main" width="100%"></button>
                </form>


                <div class="imgdesc_main">Musem</div>
            </div>
            <div class="mainflex_item">
                <form method="post" action="results.php?go" id="searchform">
                    <input type="text" value="uteliv" name="search" hidden="true">
                    <button type="submit" name="submit" value="uteliv" class="hide_button">
                        <img src="img/shops/nightlife.jpg" class="imgitem_main" width="100%"></button>
                </form>


                <div class="imgdesc_main">Uteliv</div>
            </div>
            <div class="mainflex_item">

                <form method="post" action="results.php?go" id="searchform">
                    <input type="text" value="park" name="search" hidden="true">
                    <button type="submit" name="submit" value="park" class="hide_button">
                        <img src="img/shops/park3.jpg" class="imgitem_main" width="100%"></button>
                </form>

                <div class="imgdesc_main">Parker</div>
            </div>
            <div class="mainflex_item">
                <form method="post" action="results.php?go" id="searchform">
                    <input type="text" value="kaffe" name="search" hidden="true">
                    <button type="submit" name="submit" value="kaffe" class="hide_button">
                        <img src="img/shops/coffeeshop2.jpg" class="imgitem_main" width="100%"></button>
                </form>

                <div class="imgdesc_main">Kaffe</div>
            </div>
            <div class="mainflex_item">
                <form method="post" action="results.php?go" id="searchform">
                    <input type="text" value="butikk" name="search" hidden="true">
                    <button type="submit" name="submit" value="butikk" class="hide_button">
                        <img src="img/shops/windowpants.jpg" class="imgitem_main" width="100%"></button>
                </form>

                <div class="imgdesc_main">Shopping</div>
            </div>
        </div>


    </div>

    <div id="main_info">
        <div class="main_info_wrap">

            <div style="float:left; width: 45%; margin-left: 5%; margin-top: 80px">
                <h1>WesterLife</h1>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere diam nec magna ultrices luctus.
                Nunc sed purus eu quam aliquam laoreet. Donec laoreet justo eu varius aliquet. <br><br>Praesent
                tincidunt neque id mauris rutrum venenatis. Aliquam tincidunt felis sem, quis auctor neque consequat in.
                Phasellus nec leo sit amet dui aliquet tempus.<br><br>

                <a href="about.php">
                    <button>Les mer om oss</button>
                </a>
            </div>

            <div style="float:left; width: 40%">
                <img src="img/westerlife_iphone.png" class="iphone" width="340px">
            </div>

        </div>
    </div>

</div>


<script type="text/javascript">

    $(function() {

        $("#topic_title").autocomplete({
            source: "Autocomplete.php",
            minLength: 2,
            select: function(event, ui) {
                var url = ui.item.id;
                if(url != '#') {
                    location.href = '/blog/' + url;
                }
            },

            html: true, // optional (jquery.ui.autocomplete.html.js required)

            // optional (if other layers overlap autocomplete list)
            open: function(event, ui) {
                $(".ui-autocomplete").css("z-index", 1000);
            }
        });

    });
</script>
<script type="text/javascript" src="js/arrow.js"></script>

<?php
require("footer.php");

?>

</body>
</html>
