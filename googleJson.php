<?php
$maps_content = file_get_contents('https://maps.googleapis.com/maps/api/place/details/json?placeid=' . $object['json_place_id'] . '&language=no&key=AIzaSyD1IhX-ZfFJSXeY0rTkotYPIj8V2s2BXFs');
$maps_array = json_decode($maps_content, true);
?>


<script>
    var jSonReq;
    try {
        jSonReq = JSON.parse(<?=json_encode($maps_content)?>);
    } catch (error) {
        jSonReq = "feil";
    }

    function getOpeningtimes() {
        /*henter åpningstider fra googles database*/
        if (typeof jSonReq.result.opening_hours !== "undefined") {
            for (i = 0; i < jSonReq.result.opening_hours.weekday_text.length; i++) {
                document.write(jSonReq.result.opening_hours.weekday_text[i] + '<br>');
            }
        } else {
            document.write('Ingen åpningstider registrert for denne siden.');
        }
    }

    function getAdress() {
        /*henter adresse fra googles database*/
        if (typeof jSonReq.result !== "undefined") {
            document.write(jSonReq.result.formatted_address);
        } else {
            document.write('Ingen adresse registrert for denne siden.');
        }
    }

    function getLocation() {
        /*henter adresse fra googles database*/
        if (typeof jSonReq.result !== "undefined") {
            console.log("kjører getLocation: = ", jSonReq.result.geometry.location);
            return jSonReq.result.geometry.location;
        } else {
            return fjerdingen;
        }
    }

    function getMarkerTitle() {
        /*henter navn fra googles database*/
        if (typeof jSonReq.result !== "undefined") {
            return jSonReq.result.name;
        }
    }

    function getUrl() {
        /*henter url fra googles database*/
        if (typeof jSonReq.result.website !== "undefined") {
            return jSonReq.result.website;
        }else{
            return "undefined";
        }
    }

    function getIsOpen() {
        /*sjekker om stedet er åpent*/
        if (typeof jSonReq.result.opening_hours !== "undefined") {
            return jSonReq.result.opening_hours.open_now;
        }else{
            return "undefined";
        }

    }

    function getOpeningTime() {
        /*henter åpningstid*/
        var a = new Date;
        var day = (a.getDay() -1)%7;
        var actualDay = jSonReq.result.opening_hours.weekday_text[(day)];
        if (typeof jSonReq.result.opening_hours.weekday_text !== "undefined") {
            return actualDay;
        }else{
            return "undefined";
        }

    }




</script>
