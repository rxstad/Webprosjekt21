<?php
/**
 * Created by PhpStorm.
 * User: slafa
 * Date: 26.04.2017
 * Time: 11.04
 */

error_reporting(E_ALL);

require("config.php");


$id = htmlentities($_GET['pictureId'], ENT_QUOTES, 'UTF-8');


$sql = ("SELECT * FROM steder
        LEFT JOIN info ON steder.sted_id = info.sted_id
        WHERE steder.sted_id = $id");


$res = $connection->query($sql);


$statement = $connection->prepare($sql);
$statement->execute();
$object = $statement->fetch(PDO::FETCH_ASSOC);
