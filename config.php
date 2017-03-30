<?php
/**
 * Created by PhpStorm.
 * User: slafa
 * Date: 29.03.2017
 * Time: 13.23
 */
$port = 3333;
$username = "root";
$password = "root";
$name = "webprosjekt21";

try{
    $connection = new PDO("mysql:host=localhost;dbname={$name};port={$port};", $username, $password);
    $connection-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    echo $e->getMessage();
}




