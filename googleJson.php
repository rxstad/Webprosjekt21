<?php
//$maps_content = file_get_contents('https://maps.googleapis.com/maps/api/place/details/json?placeid=ChIJN1t_tDeuEmsRUsoyG83frY4&key=AIzaSyD1IhX-ZfFJSXeY0rTkotYPIj8V2s2BXFs');



$maps_content = file_get_contents('https://maps.googleapis.com/maps/api/place/details/json?placeid='.$object['json_place_id'].'&key=AIzaSyD1IhX-ZfFJSXeY0rTkotYPIj8V2s2BXFs');
$maps_array = json_decode($maps_content, true);
//$dstOffset = $maps_array['dstOffset'];
//var_dump($maps_array);
?>


<script>
    var jSonReq = JSON.parse(<?=json_encode($maps_content)?>);
    console.log(jSonReq.result.opening_hours.weekday_text);
    //console.log(jSonReq.result.opening_hours.weekday_text[1]);
    //var day = jSonReq.result.opening_hours.weekday_text[];

    for()
</script>
