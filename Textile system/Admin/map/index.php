
<?php 
include('include/header.php');
include('include/navbar.php');
   include('include/scripts.php');
?>
<div class="main-panel">
      <div class="content">
        <div class="page-inner">
  
Your IP-Address Located in :- 
       
<?php
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
//locate the IP
$geoplugin->locate();
$geoplugin->city;
echo $geoplugin->countryName; 
$geoplugin->latitude;
$geoplugin->longitude;
?>
<!--  My api :-  AIzaSyBVJHCP2m2F9tAXQ2ao348CL2ppnaNi4t4 -->
<!DOCTYPE html>
<html>
  <head>
    <title>Add Map</title>

    <style type="text/css">
      /* Set the size of the div element that contains the map */
      #map {
        height: 80%;
      
        width: 100%;
       
      }
    </style>
    <script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        const uluru = { lat: 22.28870082863191 , lng: 73.36340574954586 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 19,
          center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
          position: uluru,
          map: map,
        });
      }
    </script>
  </head>
  <body>
  <!--   <h3>My Google Maps Demo</h3> -->
    <!--The div element for the map -->
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVJHCP2m2F9tAXQ2ao348CL2ppnaNi4t4&callback=initMap&libraries=&v=weekly"
      async
    ></script>
  </body>
</html></div>