<?php
$events =[];
require("config.php");
if(isset($_POST['submit'])){
    if(isset($_GET['go'])){
        $search = htmlentities($_POST['search'], ENT_QUOTES, 'UTF-8');

        $sql=("SELECT * FROM places where UPPER (type) LIKE upper ('%$search%') 
        OR UPPER (navn) LIKE upper ('%$search%')  
        OR upper (products) LIKE upper ('%$search%') 
        OR upper (adress) LIKE upper ('%$search%')")
        or die("could not search");

           $res = $connection->query($sql);
           $num_rows = $res->fetchColumn();
           $result;
            if($num_rows == 0){
                $result = 'there was no search results for "' . $search .'"';
            }else {
                $result = 'Resultater for "' . $search.'"';
                $statement = $connection->prepare($sql);
                $statement->execute();
                while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                    $events[] = $row;
                }

            }
    }
}
