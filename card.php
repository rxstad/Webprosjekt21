<?php
$statement = $connection->prepare("SELECT * from places");
$statement->execute();


$events =[];

while($row = $statement->fetch(PDO::FETCH_ASSOC)){
$events[] = $row;
}
?>

    <?php foreach ($events as $event) { ?>

<!-- Start Event Card -->
<div class="mdl-card mdl-shadow--2dp">
   <a href="info.php">
       <img src="<?= $event['pictures'] ?>" height="200">
        <div class="mdl-card__title">
        <h2 class="mdl-card__title-text"><?= $event['navn'] ?></h2>
   </a>
        </div>

    <div class="mdl-card__supporting-text timestamp"><?= $event['adress'] ?></div>
    <div class="mdl-card__supporting-text"><?= $event['type'] ?></div>

    <div class="mdl-card__supporting-text"> <a href="<?= $event['http'] ?>">url</a> </div>
    <div class="mdl-card__supporting-text"> <a href="<?= $event['facebook'] ?>">Facebook</a> </div>


    <!-- <?php if ($event['is_free']) { ?>

                        <div class="mdl-card__supporting-text">(Gratis)</div>

                    <?php } ?>-->

    </div>
    <!-- End Event Card -->

<?php }
