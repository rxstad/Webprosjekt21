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
			<input type="text" name="name" placeholder="name" onfocus="this.placeholder = ''" required >
    </p>
    <p>Er dette en event eller et sted?:
        <select id="type" name="type" onchange="addtime(this.value)">
            <option id="sted" value="sted" >sted</option>
            <option  id="event" value="event">event</option>
        </select>
        <div id="timeCont" style="height: 1px">
            <div id="tidDiv">
                <!--  input for dato kommer her              -->
            </form>
        </div>
    </p>
            </datalist>

    <br><br>
            <input  type="submit" name="submit" value="Submit">
</form>


<script>
    var d = new Date();
   var dateNow = d.getFullYear()+"-"+d.getDate()+"-"+d.getMonth();
   var dateMax = d.getFullYear()+100+"-"+d.getDate()+"-"+d.getMonth();

function addtime(type) {
    var para=document.createElement("p");
    var text = document.createTextNode("Når starter eventen?:");
    var input = document.createElement("input");
    var input2 = document.createElement("input");
    input.type ="date";
    input.id="dato";
    input.name="dato";
    input.required="true";
    input.min= dateNow;
    input.max= dateMax;
    input2.id="tid";
    input2.type="time";




    var tilDiv = document.getElementById("tidDiv");
    if (type === 'event') {
        tilDiv.appendChild(para);
        para.appendChild(text);
        para.appendChild(input);
        para.appendChild(input2);
        console.log(para);
        console.log(tilDiv.childElementCount);
    } else{

        tilDiv.removeChild(tilDiv.childNodes[tilDiv.childNodes.length-1]);
    }
}
//ikke i bruk
function checkForEvent(type) {
    //var type = document.getElementById("type").value;
    var t = document.getElementById('tidDiv')

    if (type === 'event') {
    t.style.display = "block";
    document.getElementById("tid").attributes["required"]="true";
    } else{
        t.style.display = "none";
        document.getElementById("tid").attributes["required"]="false";
    }
}
</script>
</div>
</body>
</html>