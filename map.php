<?php

$coords = $object['coordinater'];

$lat = explode(',', explode('lat: ', $coords)[1])[0];
$lng = explode('lng: ', $coords)[1];


?>


    <!--<form>
      <input type="text" id="search" class="controls" placeholder="Search Box"/>
      <input type="submit" value="Submit">
    </form>-->
    <div id="map" style="z-index: 10"></div>
    <script>
      function initMap() {


          var sted = {<?php echo $coords ?>};
          var fjerdingen = {lat: 59.9160539, lng: 10.7599923};
          var vulkan = {lat: 59.9197317, lng: 10.7473439};
          var center = {lat: 59.9195837, lng: 10.750899};
        var map = new google.maps.Map(document.getElementById('header'), {
          zoom: 14,
          center: center,
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
                "color": "#46bcec"
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
          scaledSize: new google.maps.Size(60,30)};

        var fjerdingenMrk = new google.maps.Marker({
          position: fjerdingen,
          map: map,
          icon: fjerdingenImg
        });

          var vulkan = new google.maps.Marker({
              position: vulkan,
              map: map,
              icon: fjerdingenImg
          });

          var stedMrk = new google.maps.Marker({
              position: sted,
              map: map
          });

          console.log(fjerdingenMrk);
          console.log(stedMrk);


      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1IhX-ZfFJSXeY0rTkotYPIj8V2s2BXFs&libraries=places&callback=initMap">
    </script>