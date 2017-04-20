<?php
require("search.php");
?>

    <?php foreach ($events as $event) { ?>

<!-- Start Event Card -->
<div class="mdl-card mdl-shadow--2dp">
   <a href="info.php">
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
