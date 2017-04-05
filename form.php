<?php
/**
 * Created by PhpStorm.
 * User: slafa
 * Date: 05.04.2017
 * Time: 13.29
 */
require("header.php");
?>

<form method="post"  id="register">
    <p>Navn på event/sted:
			<input type="text" name="name" placeholder="name" onfocus="this.placeholder = ''" >
    </p>
    <p>Er dette en event eller et sted?:
        <select id="type" name="type" onchange="checkForEvent(this.value)">
            <option id="sted" value="sted" >sted</option>
            <option  id="event" value="event">event</option>
        </select>
        <br>
        <input id="tid" style="display: none" type="date" name="tid" placeholder="datetime" min="2017-01-01" max="3017-01-01" onfocus="this.placeholder = ''" >

    </p>
            </datalist>
    <?php
    //if (get_id('type') == 'event')
    ?>
    <br><br>
            <input  type="submit" name="submit" value="Submit">
</form>


<script>

function checkForEvent(type) {
    //var type = document.getElementById("type").value;
    console.log(type);

    if (type === 'event') {
    document.getElementById('tid').style.display = "block";
    } else{
    document.getElementById('tid').style.display = "none";
    }
}
</script>
</div>
</body>
</html>