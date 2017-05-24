<?php

/**
 * Created by PhpStorm.
 * User: slafa
 * Date: 06.05.2017
 * Time: 19.21
 */
require ("config.php");

$searchTerm=$_REQUEST["term"];
$return_arr;

$json=array();


    $sql = ("SELECT DISTINCT * FROM steder
        LEFT JOIN info ON steder.sted_id = info.sted_id
        LEFT JOIN kategori_kopling ON steder.sted_id = kategori_kopling.sted_id
        LEFT JOIN søkeord ON kategori_kopling.kategori = søkeord.kategori
        WHERE upper(søkeord) LIKE upper ('%$searchTerm%')
        OR UPPER (navn) LIKE upper ('%$searchTerm%')
        GROUP BY steder.sted_id
        ORDER BY navn ASC ");


    try {
        $conn = new PDO("mysql:host={$host};dbname={$name};port={$port};", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($json, $row['kategori']);
        }

        echo json_encode($json);
        var_dump("fitte");
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }


require_once ('config.php');

$q=$_REQUEST["q"];
$sql="SELECT `fname` FROM `Property` WHERE fname LIKE '%$q%'";
$result = mysql_query($sql);

$json=array();

while($row = mysql_fetch_array($result)) {
    array_push($json, $row['fname']);
}

echo json_encode($json);



?>

