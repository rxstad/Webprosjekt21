<?php

$coords = $object['coordinater'];

$lat = explode(',', explode('lat: ', $coords)[1])[0];
$lng = explode('lng: ', $coords)[1];


//$maps_content = file_get_contents('https://maps.googleapis.com/maps/api/place/details/json?placeid=ChIJN1t_tDeuEmsRUsoyG83frY4&key=AIzaSyD1IhX-ZfFJSXeY0rTkotYPIj8V2s2BXFs');
//$maps_array = json_decode($maps_content, true);
//$dstOffset = $maps_array['dstOffset'];
//var_dump($maps_array);
?>


<div id="map" style="z-index: 10"></div>
    <script>


        function initMap() {

          var sted = {<?php echo $coords ?>};
          var fjerdingen = {lat: 59.9160539, lng: 10.7599923};
          var brenneriveien = {lat: 59.9197317, lng: 10.7473439};
          var vulkan = {lat: 59.923429, lng: 10.751666};
          var map = new google.maps.Map(document.getElementById('header'), {
          zoom: 14,
          center: sted,
            mapTypeControl: false,
            streetViewControl: false,
            rotateControl: false,
            scaleControl: false,
            scrollwheel: false,
            styles: [
    {
        "featureType": "administrative",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#444444"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.attraction",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi.business",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.medical",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "poi.school",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#6dafc7"
            },
            {
                "visibility": "on"
            }
        ]
    }
]
        });

        var fjerdingenImg = {
              url: 'img/westerdalslogo.png',

          scaledSize: new google.maps.Size(50 ,50)};


        var fjerdingenMrk = new google.maps.Marker({
          position: fjerdingen,
          map: map,
          icon: fjerdingenImg,
            title: "fjerdingen"
        });

        var brenneriveienmrk = new google.maps.Marker({
            position: brenneriveien,
            map: map,
            icon: fjerdingenImg,
            title: "brenneriveien"
          });
        var vulkanmrk = new google.maps.Marker({
            position: vulkan,
            map: map,
            icon: fjerdingenImg,
            title: "vulkan"
          });
        var stedMrk = new google.maps.Marker({
            position: sted,
            map: map
          });

        var stedinf = new google.maps.Data({
            placeId: 'ChIJN1t_tDeuEmsRUsoyG83frY4'
          });

        var request = {
            placeId: 'ChIJN1t_tDeuEmsRUsoyG83frY4'
        };



      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1IhX-ZfFJSXeY0rTkotYPIj8V2s2BXFs&libraries=places&callback=initMap">
    </script>

