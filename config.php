<?php
/**
 * Created by PhpStorm.
 * User: slafa
 * Date: 29.03.2017
 * Time: 13.23
 */
$host = "tek.westerdals.no";
$port = 3306;
$username = "lingle16_root";
$password = "webprosjekt21GKL";
$name = "lingle16_webprosjekt21";

try{
    $connection = new PDO("mysql:host={$host};dbname={$name};port={$port};", $username, $password);
    $connection-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    echo $e->getMessage();
}




