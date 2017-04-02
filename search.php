<?php

require("config.php");
if(isset($_POST['submit'])){
    if(isset($_GET['go'])){
        $search = htmlentities($_POST['search'], ENT_QUOTES, 'UTF-8');
            //$search=$_POST['search'];
            //-query the database table
            $sql="SELECT * FROM places where type LIKE '%$search%'";

            //$results[]= $connection->query($sql);
            foreach ($connection->query($sql) as $r){
                echo  htmlentities($r['places_ID']) .htmlentities($r['creater']) ." ". htmlentities($r['navn']) ." ". htmlentities($r['type']) ." ". htmlentities($r['products']) ." ". htmlentities($r['adress']) ." ". htmlentities($r['http']) ." ". htmlentities($r['facebook']) ." ". htmlentities($r['pictures']). "<br>";
            }

    }
}
else{
    echo "<p> Skriv noe i søkefeltet</p>";
    print_r($_POST);
}