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
        <script src="bower_components/jquery/dist/jquery.js"></script>
        <script type="text/javascript" src="bower_components/Materialize/dist/js/materialize.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5G9JFJu-6F4zbj3POdmAVGDi2mCQ7coE&libraries=places&callback=initAutocomplete" async defer></script>
        <title>Profile</title>
  <!--_______________________________GOOGLE MAPS________________________________________ -->
<script type="text/javascript">
       var autocomplete,lat,lng;
      function initAutocomplete() {
          
/* <!--_______________________________GOOGLE MAPS________________________________________ -->  */
          var testx=18.0104288,testy=-76.7416509;
          var map;
          var markers = [];
          var jamaica = new google.maps.LatLng(18.0104288,-76.7416509);
          function initMap() {
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
            lat=location.lat();
            lng=location.lng();
          var marker = new google.maps.Marker({
            position: location,
            map: map,
            icon: {
            path: google.maps.SymbolPath.CIRCLE,
            strokeColor: '#33CCFF',
            scale: 10
            }
          });
         /*ALLOW MARKER TO POP UP WHEN MODAL IS CLICKED*/
          
         
         markers.push(marker);
        }
        google.maps.event.addDomListener(window, 'load', initMap);  
/* <!--_______________________________GOOGLE MAPS________________________________________ --> */
        
        
        
        
        
        
        
        
        
/*<!----------------------------------AUTOCOMPLETE SETUP---------------------------------->*/
        autocomplete = new google.maps.places.Autocomplete(
         (document.getElementById('location')),
            {types: ['geocode']});
        }

     

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
      /*
<!----------------------------------AUTOCOMPLETE SETUP---------------------------------->*/
/*-----------------------------------------------CAPTURE HOME DATA*--------------------------------------------------*/
function capture(){
    
    var container={};
    container.price=$("#price").val();
    container.locationof=$("#location").val();
    container.telephone=$("#telephone").val();
    container.accomodation=$("#accomodation").val();
    container.type=$("#type").val();
    container.pref=$('#gender').val();
    container.lat=lat;
    container.long=lng
    console.log(container);
    //return false;
   
}


/*-----------------------------------------------CAPTURE HOME DATA*--------------------------------------------------*/

    
</script>
<!--_______________________________GOOGLE MAPS________________________________________ -->
 </head>
 <body>


<!------------------------------------------Dropdown Structure-------------------------------------------->
<ul id="dropdown1" class="dropdown-content">

 
  <li><a href="#!">Logout</a></li>
</ul>
 
<!------------------------------------------Dropdown Structure-------------------------------------------->

<!--_______________________________NAVBAR_______________________________________ -->    
<nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo center">Campusflats</a>
      <ul class="hide-on-med-and-down left">
           <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons right">arrow_drop_down</i></a></li>
       </ul>
      <a href="#" data-activates="mobile-demo" class="button-collapse" ><i class="material-icons">menu</i></a>
      
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">About</a></li>
        <li><a href="badges.html">Compare</a></li>
        <li><a href="collapsible.html">Login</a></li>
        <li><a href="mobile.html">Register</a></li>
         <li><a href="mobile.html">About</a></li>
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
                <select id="accomodation">
                  <option value="" disabled selected>Select Accomodation</option>
                  <option value="Single">Single</option>
                  <option value="Shared">Shared</option>
                </select>
                <label>Accomodation</label>
            </div>
            
            <div class="input-field col l6 s12">
                <select id="type">
                  <option value="" disabled selected>Select Rent Type</option>
                  <option value="All Inclusive">All Inclusive</option>
                  <option value="Utilities seperate">Utilities Seperate</option>
                </select>
                <label>Rent Type</label>
            </div>
            
             <div class="input-field col l12 s12">
                <select id="gender">
                  <option value="" disabled selected>Gender Preference</option>
                  <option value="Males Only">Males Only</option>
                  <option value="Females Only">Female Only</option>
                  <option value="Both">Both</option>
                </select>
                <label>Gender Preference</label>
            </div>
           
            
            <button class="col l6 s6 waves-effect waves-light btn" id="finish">Finish</button>
            <button class="col l6 s6 waves-effect waves-light btn" id="more">Add More</button>
     
     
    </div>
    <!----------------------------------------ADD PROPERTY------------------------------------------------->
    
    
    
    
    
    
    <!------------------------------------------VIEW PROPERTY---------------------------------------------->
    <div id="view-prop" class="col s12">Test 2</div>
    <!------------------------------------------VIEW PROPERTY---------------------------------------------->
 </div>
 
<!--__________________________________________TABS_______________________________________________________-->
 
 
 
 
 
 
 
 
<!--_____________________________________JAVASCRIPT FILES___________________________________________-->

<script type="text/javascript" src="bower_components/formatter/dist/jquery.formatter.js"></script>

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

$("#finish").on('click',capture);



/*+++++++++++++++++++++++++++++++++++++++++FORMATTER FOR TELEPHONE NUMBER++++++++++++++++++++++++++++++++++++++++++++*/
$('#telephone').formatter({
  'pattern': '({{999}}) {{999}}-{{9999}}',
  'persistent': true
});
/*+++++++++++++++++++++++++++++++++++++++++FORMATTER FOR TELEPHONE NUMBER++++++++++++++++++++++++++++++++++++++++++++*/



/*++++++++++++++++++++++++++++++++++++++++++++++++++INPUT VALIDATION+++++++++++++++++++++++++++++++++++++++++++++++++*/
function validation(){
    
    $('input').each(function(){
    if(this.val()==""){
        
    }
});

}


/*++++++++++++++++++++++++++++++++++++++++++++++++++INPUT VALIDATION+++++++++++++++++++++++++++++++++++++++++++++++++*/
</script>

<!--------------------------------------------------JAVASCRIPT FUNCTIONS AND INITIALIZATIONS----------------------------------->


 </body>
</html>