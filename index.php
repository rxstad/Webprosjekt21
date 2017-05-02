<?php
require("header.php");
require("header_menu.php");

?>
<link rel="stylesheet" type="text/css" href="front_style.css">

<body>
<div id="header">
    <source src="img/snow_footage.mp4" type="video/mp4">

    <div id="header_search_outer">
        <div class="header_search_inner">
            <h2>Jeg vil</h2>
            <form method="post" action="results.php?go" id="searchform">
                <input type="text" name="search" placeholder="Søk + enter" onfocus="this.placeholder = ''"
                       onblur="this.placeholder = 'Søk + enter'">
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
            <source src="img/backgrounds/video_bg2.mp4" type="video/mp4">
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
                    <button type="submit" name="submit" value="mat">
                        <img src="img/shops/mat1.jpg" class="imgitem_main" width="100%"></button>
                </form>

                <div class="imgdesc_main">Spise</div>
                </a>
            </div>
            <div class="mainflex_item">

                <form method="post" action="results.php?go" id="searchform">
                    <input type="text" value="opera" name="search" hidden="true">
                    <button type="submit" name="submit" value="opera">
                        <img src="img/shops/opera.jpg" class="imgitem_main" width="100%"></button>
                </form>


                <div class="imgdesc_main">Musem</div>
            </div>
            <div class="mainflex_item">
                <form method="post" action="results.php?go" id="searchform">
                    <input type="text" value="uteliv" name="search" hidden="true">
                    <button type="submit" name="submit" value="uteliv">
                        <img src="img/shops/nightlife.jpg" class="imgitem_main" width="100%"></button>
                </form>


                <div class="imgdesc_main">Uteliv</div>
            </div>
            <div class="mainflex_item">

                <form method="post" action="results.php?go" id="searchform">
                    <input type="text" value="park" name="search" hidden="true">
                    <button type="submit" name="submit" value="park">
                        <img src="img/shops/park3.jpg" class="imgitem_main" width="100%"></button>
                </form>

                <div class="imgdesc_main">Parker</div>
            </div>
            <div class="mainflex_item">
                <form method="post" action="results.php?go" id="searchform">
                    <input type="text" value="kaffe" name="search" hidden="true">
                    <button type="submit" name="submit" value="kaffe">
                        <img src="img/shops/coffeeshop2.jpg" class="imgitem_main" width="100%"></button>
                </form>

                <div class="imgdesc_main">Kaffe</div>
            </div>
            <div class="mainflex_item">
                <input type="text" value="butikk" name="search" hidden="true">
                <button type="submit" name="submit" value="butikk">
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

<script type="text/javascript" src="js/arrow.js"></script>
<?php
require("footer.php");
?>

</body>
</html>
