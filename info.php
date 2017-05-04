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
<div id="topbar"></div>
<div id="header">
    <?php require("map.php"); ?>

    <br><br><br><br><br><br><br><br><br><br>
    <center><h3>Kart</h3></center>
</div>
<div id="wrapper">

    <div id="main">
        <div class="place_title">
            <script>
            //location = getUrl();
            document.write('<a href="' + getUrl() + '"><?= $object['navn'];?></a>');
            </script>



            </div>


        <div class="read_more" tabindex="0">
            <?= $object['beskrivelse'] ?>

        </div>

        <div class="place_photos">
            <center><h2>
                    <?php
                    for ($i = 1; $i < sizeof($imgList); $i++) {
                        echo '<img src="' . $object['img'] . "/" . $imgList[$i] . '" width="240px" height="240px">';
                    }
                    ?>
                </h2></center>
        </div>

    </div>
    <div id="sidebar">

        <div class="side_thumbnail">
            <img src="<? echo $object['img'] . "/" . $imgList[0]; ?>" width="240px" height="240px">
        </div>

        <img src="img/icons/Phone.png" width="20px"> <?= $object['tlf'] ?>
        <hr>

        <script> /*henter adresse fra googles database*/
            getAdress();
        </script>

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

</div>


<script type="text/javascript" src="mapAPI.js"></script>

</body onload="initialize()">