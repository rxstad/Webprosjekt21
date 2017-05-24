<?php
$events = [];
$temp = [];
require("config.php");
if (isset($_POST['submit'])) {
    if (isset($_GET['go'])) {
        $search = $_POST['search'];
        $search = htmlspecialchars($_POST['search'], ENT_QUOTES, "UTF-8");

        $sql = ("SELECT DISTINCT * FROM steder
        LEFT JOIN info ON steder.sted_id = info.sted_id
        LEFT JOIN kategori_kopling ON steder.sted_id = kategori_kopling.sted_id
        LEFT JOIN søkeord ON kategori_kopling.kategori = søkeord.kategori
        WHERE upper(søkeord) LIKE upper ('%$search%')
        OR UPPER (navn) LIKE upper ('%$search%')
        GROUP BY steder.sted_id")

        or die("could not search");

        $res = $connection->query($sql);
        $num_rows = $res->fetchColumn();
        $result;
        if ($num_rows == 0) {
            $result = 'there was no search results for "' . $search . '"';
        } else {
            $result = 'Resultater for "' . $search . '"';
            $statement = $connection->prepare($sql);
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $events[] = $row;
            }
        }
    }
}
