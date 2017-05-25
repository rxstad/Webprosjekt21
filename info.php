<?php
require("header.php");
require("inforesults.php");
require("googleJson.php");
require("getImages.php");
?>

    <link rel="stylesheet" type="text/css" href="css/info_style.css">

<?php
require("header_menu.php");
?>

    <a href="javascript:history.back()">
        <div id="go_back">&larr; Tilbake til søkeresultatene</div>
    </a>

    <body>
    <div id="header">
        <?php require("map.php"); ?>

        <br><br><br><br><br><br><br><br><br>
        <center><h3>Kart mangler &#x1F937;</h3></center>
    </div>
    <div id="wrapper">

        <div id="top_info">

            <div class="top_thumbnail">
                <center><img class="thumbnail_radius" src="<? echo $object['img'] . "/" . $imgList[0]; ?>" width="200px"
                             height="200px"></center>
            </div>

            <div class="place_title">
                <script>

                    if (getUrl() !== "undefined") {
                        document.write('<a href="' + getUrl() + '"><?= $object['navn']?></a>');
                    }
                    else {
                        document.write("<?= $object['navn']?>");
                    }
                </script>


            </div>

            <div class="top_address">
                <script> /*henter adresse fra googles database*/
                    getAdress();
                </script>
            </div>

            <div class="time_open_close">

                <h3></h3>

                <script>
                    $(document).ready(function () {
                        if (getIsOpen() == true) {
                            if (document.body) {
                                $('.time_open_close').css('background', '#AEC671');
                                $(".time_open_close h3").html('Åpent <br />'  + getOpeningTime());
                            }
                        }
                        else if (getIsOpen() == false) {
                            if (document.body) {
                                $('.time_open_close').css('background', '#AD4949');
                                $(".time_open_close h3").html('Stengt <br />'  + getOpeningTime());
                            }
                        } else {
                            if (document.body) {
                                $('.time_open_close').css('display', 'none');
                            }
                        }
                    })
                </script>
            </div>
            <img src="img/icons/Phone.png" width="20px"> <?= $object['tlf'] ?>
            <hr>


            <hr>
            <h4>Åpningstider</h4>
            <script> /*henter åpningstider fra googles database*/
                getOpeningtimes();
            </script>
            <hr>

            <div class="side_social">
                <center>
                    <?php
                    $faceb = '<a href="' . $object["facebook"] . '"> <img src="img/icons/Facebook.png" width="35px"><a/>';
                    $twitter = '<a href="' . $object["twitter"] . '"> <img src="img/icons/Twitter.png" width="35px"><a/>';
                    $googlepluss = '<a href="' . $object["googlepluss"] . '"> <img src="img/icons/Google Plus.png" width="35px"><a/>';

                    if ($object['facebook'] == !null) echo $faceb;
                    if ($object['twitter'] == !null) echo $twitter;
                    if ($object['googlepluss'] == !null) echo $googlepluss;


                    ?>
                </center>
            </div>
        </div>

        <div id="main">

            <div class="read_more" tabindex="0">

                <?php

                if (file_exists($object['beskrivelse'])) {
                    $beskrivelse = htmlspecialchars($object['beskrivelse'], ENT_QUOTES, 'UTF-8');
                    echo '<p id="beskrivelse">' . file_get_contents($beskrivelse) . '</p>';
                } else {
                    echo '<p id="beskrivelse"> Ingen beskrivelse for denne siden </p>';
                }
                ?>


                <!--           <? //= $object['beskrivelse'] ?> -->

            </div>

            <div class="place_photos">
                <center><h2>
                        <?php
                        for ($i = 1; $i < sizeof($imgList); $i++) {
                            echo '<img class="place_photos_size" src="' . $object['img'] . "/" . $imgList[$i] . '">';
                        }
                        ?>
                    </h2></center>
            </div>

        </div>

    </div>


    <script type="text/javascript" src="mapAPI.js"></script>


    </body onload="initialize()">
<?php
require("footer.php");
?>