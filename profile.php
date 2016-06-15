<?php



?>
<!DOCTYPE html>
<html>
 <head>
   <meta http-equiv="content-type" content="text/html; charset=utf-8" />
   	   
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="bower_components/Materialize/dist/css/materialize.css" type="text/css" />
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5G9JFJu-6F4zbj3POdmAVGDi2mCQ7coE&callback=initMap"></script>
  <title></title>
 </head>
 <body>



<!--_______________________________NAVBAR_______________________________________ -->    
<nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Campusflats</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse" ><i class="material-icons">menu</i></a>
      
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html"></a></li>
        <li><a href="badges.html">Compare</a></li>
        <li><a href="collapsible.html">Login</a></li>
        <li><a href="mobile.html">Register</a></li>
         <li><a href="mobile.html">Logged in name</a></li>
      </ul>
       
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
</nav>
<!--_______________________________NAVBAR_______________________________________ -->



  
<!--__________________________________________TABS_______________________________________________________-->

  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3 "><a class="active" href="#add-prop">Add Property</a></li>
        <li class="tab col s3"><a class="active" href="#view-prop">View Properties</a></li>
      </ul>
    </div>
    <div class="space"></div>
    <!----------------------------------------ADD PROPERTY------------------------------------------------->
    <div id="add-prop" class="col s12">
     
           <p><center><span class="map-label">Click to <span class="color">ADD MARKER</span> to the community in which your home is located.</span></center></p>
           
           <div id="map"></div>
           
           
           <p><center><strong><span class="map-label larger-text">Enter your <span class="color">home</span> details</span></strong></center></p>
    <form action="" method="GET" enctype="multipart/form-data">
      <div class="input-field col s12">
              <input id="location" type="text" class="validate">
              <label for="location">Location</label>
            </div>
            
            
            <div class="input-field col s12 l6">
              <input id="telephone" type="text" class="validate">
              <label for="telephone">Telephone</label>
            </div>
            
            
             <div class="input-field col s12 l6">
              <input id="price" type="text" class="validate">
              <label for="price">Price</label>
            </div>
           
            <div class="input-field col l6 s12">
                <select>
                  <option value="" disabled selected>Select Accomodation</option>
                  <option value="1">Single</option>
                  <option value="2">Shared</option>
                </select>
                <label>Accomodation</label>
            </div>
            
            <div class="input-field col l6 s12">
                <select>
                  <option value="" disabled selected>Select Rent Type</option>
                  <option value="1">All Inclusive</option>
                  <option value="2">Utilities Seperate</option>
                </select>
                <label>Rent Type</label>
            </div>
            
             <div class="input-field col l12 s12">
                <select>
                  <option value="" disabled selected>Gender Preference</option>
                  <option value="1">Males Only</option>
                  <option value="2">Female Only</option>
                  <option value="2">Both</option>
                </select>
                <label>Gender Preference</label>
            </div>
           
            
            <input class="col l6 s6 waves-effect waves-light btn" type="submit" name="finish" value="Finish"/>
            <input class="col l6 s6 waves-effect waves-light btn" type="submit" name="add-more" value="Add More"/>
     </form>
     
    </div>
    <!----------------------------------------ADD PROPERTY------------------------------------------------->
    
    
    
    
    
    
    <!------------------------------------------VIEW PROPERTY---------------------------------------------->
    <div id="view-prop" class="col s12">Test 2</div>
    <!------------------------------------------VIEW PROPERTY---------------------------------------------->
 </div>
 
<!--__________________________________________TABS_______________________________________________________-->
 
 
 
 
 
 
 
<!--_____________________________________JAVASCRIPT FILES___________________________________________-->

<script src="bower_components/jquery/dist/jquery.js"></script>
<script type="text/javascript" src="bower_components/Materialize/dist/js/materialize.js"></script>

<!--_____________________________________JAVASCRIPT FILES___________________________________________-->









<!------------------------------------------------------------CSS RULES------------------------------------------------------->
<style type="text/css">
.btn{
    border-radius:0px;
    background-color:#33CCFF;
}
.input-field input[type=text]:focus {
     border-bottom: 1px solid #33CCFF;
     box-shadow: 0 1px 0 0 #33CCFF;
   }
.space{
    padding:30px;
    height:100px;
}
.color{
    color:#33CCFF;
}
.map-label{
    color:#8c8c8c;
    padding-top:20px;
    font-weight:bold;
}

.tabs .indicator { 
    background-color:#33CCFF;
}
.tabs .tab a {
  color:#33CCFF;
}
.nav-wrapper{
	background-color:#33CCFF;
}
.tabs .tab a:hover {
  color: #0099ff;
}
#map{
    height:400px;
}

@media only screen and (min-width: 320px) and (max-width: 480px) {
  #map {
    height:300px;
  }
 .space{
     height:70px;
 }
}
.larger-text{
    font-size:20px;
}
</style>

<!------------------------------------------------------------CSS RULES------------------------------------------------------->








<!--------------------------------------------------JAVASCRIPT FUNCTIONS AND INITIALIZATIONS----------------------------------->
<script type="text/javascript">



/*++++++++++++++++++++++++++++++++++++++++INITIALIZING AWESOME SELECT TAG EFFECT++++++++++++++++++++++++++++++++++++++++++++++*/
$(document).ready(function() {
    $('select').material_select();
  });
/*++++++++++++++++++++++++++++++++++++++++INITIALIZING AWESOME SELECT TAG EFFECT++++++++++++++++++++++++++++++++++++++++++++++*/
  
  
  
  
  
/*++++++++++++++++++++++++++++++++++++++++INITIALIZING SIDE NAVIGATION++++++++++++++++++++++++++++++++++++++++++++++*/
$(".button-collapse").sideNav();
 $(document).ready(function(){
    $('ul.tabs').tabs();
  });
/*++++++++++++++++++++++++++++++++++++++++INITIALIZING SIDE NAVIGATION++++++++++++++++++++++++++++++++++++++++++++++*/


</script>

<!--------------------------------------------------JAVASCRIPT FUNCTIONS AND INITIALIZATIONS----------------------------------->










<!--_______________________________GOOGLE MAPS________________________________________ -->
<script type="text/javascript">

    var map;
        var markers = [];
       var jamaica = new google.maps.LatLng(18.0104288,-76.741323);
      function initMap() {
          
        var haightAshbury = {lat: 37.769, lng: -122.446};
        map = new google.maps.Map(document.getElementById('map'), {
          center: jamaica,
          zoom: 13,
          styles:[{"featureType":"landscape","stylers":[{"hue":"#FFBB00"},{"saturation":43.400000000000006},{"lightness":37.599999999999994},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#FFC200"},{"saturation":-61.8},{"lightness":45.599999999999994},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":51.19999999999999},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":52},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#0078FF"},{"saturation":-13.200000000000003},{"lightness":2.4000000000000057},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#00FF6A"},{"saturation":-1.0989010989011234},{"lightness":11.200000000000017},{"gamma":1}]}],

        });
        
         map.addListener('click', function(event) {
            clearAllMarkers();
            addMarker(event.latLng);
         });
      }
      
       function clearAllMarkers() {
                for(var i=0; i<markers.length; i++){
                   markers[i].setMap(null);
                }
   
        }
      
        function addMarker(location) {
          var marker = new google.maps.Marker({
            position: location,
            map: map
          });
         markers.push(marker);
        }
        
        // Sets the map on all markers in the array.
        /*function setMapOnAll(map) {
          for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(map);
          }
        }
        
        // Removes the markers from the map, but keeps them in the array.
        function clearMarkers() {
          setMapOnAll(null);
        }
        
        // Shows any markers currently in the array.
        function showMarkers() {
          setMapOnAll(map);
        }
        
        // Deletes all markers in the array by removing references to them.
        function deleteMarkers() {
          clearMarkers();
          markers = [];
        }
*/

   google.maps.event.addDomListener(window, 'load', initMap);   
</script>
<!--_______________________________GOOGLE MAPS________________________________________ -->





 </body>
</html>