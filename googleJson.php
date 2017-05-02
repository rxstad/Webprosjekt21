<?php
//$maps_content = file_get_contents('https://maps.googleapis.com/maps/api/place/details/json?placeid=ChIJN1t_tDeuEmsRUsoyG83frY4&language=ja&key=AIzaSyD1IhX-ZfFJSXeY0rTkotYPIj8V2s2BXFs');


$maps_content = file_get_contents('https://maps.googleapis.com/maps/api/place/details/json?placeid=' . $object['json_place_id'] . '&language=no&key=AIzaSyD1IhX-ZfFJSXeY0rTkotYPIj8V2s2BXFs');
$maps_array = json_decode($maps_content, true);
//$dstOffset = $maps_array['dstOffset'];
//var_dump($maps_array);
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
        if (typeof jSonReq.result !== "undefined") {
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

</script>
