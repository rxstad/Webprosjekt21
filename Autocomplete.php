<?php

/**
 * Created by PhpStorm.
 * User: slafa
 * Date: 06.05.2017
 * Time: 19.21
 */
require_once ("config.php");

//$search="";

$search = htmlspecialchars("", ENT_QUOTES, "UTF-8");



$json=array();
$grr =array();


$sql = ("SELECT DISTINCT * FROM steder
        LEFT JOIN info ON steder.sted_id = info.sted_id
        LEFT JOIN kategori_kopling ON steder.sted_id = kategori_kopling.sted_id
        LEFT JOIN søkeord ON kategori_kopling.kategori = søkeord.kategori
        WHERE upper(søkeord) LIKE upper ('%$search%')
        OR UPPER (navn) LIKE upper ('%$search%')
        GROUP BY steder.sted_id")
or die("could not search");


try {
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $connection->prepare($sql);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            array_push($json, $row['navn']);
            $pieces = explode(", ", $row['søkeord']);
            foreach ($pieces as $piece) {
                array_push($json, $piece);
            }
        }

    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

$grr = array_values(array_unique($json, SORT_REGULAR));

echo json_encode($grr);



?>

