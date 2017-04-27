<?php
require("search.php");
header('Content-Type: text/html; charset=UTF-8');
?>

<link rel="stylesheet" type="text/css" href="results_style.css">
    <?php foreach ($events as $event) { ?>

<!-- Start Event Card -->
<div class="mdl-card mdl-shadow--2dp">
   <a href="info.php?go&pictureId=<?= $event['sted_id']?>" method="post" id="id"  value="<?= $event['sted_id']?>">
       <img src="<?= $event['img'] ?>" height="200" width="300">
        <div class="mdl-card__title">
        <h2 class="mdl-card__title-text"><?= $event['navn'] ?></h2>
   </a>
        </div>

    <div class="mdl-card__supporting-text timestamp"><?= $event['adresse'] ?></div>
    <div class="mdl-card__supporting-text"><?= $event['kategori'] ?></div>

    <div class="mdl-card__supporting-text"> <a href="<?= $event['url'] ?>">url</a> </div>
    <div class="mdl-card__supporting-text"> <a href="<?= $event['facebook'] ?>">Facebook</a> </div>

    </div>
    <!-- End Event Card -->

<?php }
