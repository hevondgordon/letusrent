<?php
session_start();


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
        <link href='https://fonts.googleapis.com/css?family=Wire+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="bower_components/dropify/dist/css/dropify.css" type="text/css" />
        
      
        <script src="bower_components/jquery/dist/jquery.js"></script>
        <script type="text/javascript" src="bower_components/Materialize/dist/js/materialize.js"></script>
          <script type="text/javascript" src="bower_components/dropify/dist/js/dropify.js"></script>
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


    
</script>
<!--_______________________________GOOGLE MAPS________________________________________ -->
 </head>
 <body>

<!--L-----------------------------------------------------------------------------MODAL----------------------------------------------------------------------------->
<div id="upload" class="modal">
    <div class="modal-content">
        <form  action="" method="post" class="doneForm" enctype="multipart/form-data">
            <input type="file" class="dropify" data-height="200" name="file" id="fileSelect"/>
             <div class="modal-footer">
              <input type="submit" value="done" id="done" class=" modal-action modal-close waves-effect waves-teal btn-flat"/>
         </div>
           
        </form>
        
         
    </div>
   
  </div>
<!--L-----------------------------------------------------------------------------MODAL----------------------------------------------------------------------------->






<!--_______________________________NAVBAR_______________________________________ -->    
<nav>
    <div class="nav-wrapper">
      <a href="https://campus-jermyhewitt.c9users.io/" class="brand-logo center header ">LetUsRent</a>
      <ul class="hide-on-med-and-down left">
          
               <span class="">&nbsp&nbsp&nbsp Hello <?php echo ucwords($_SESSION['fname']);?></span>
         
          
       </ul>
     
      
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
           <p class="error"></p>
  
    
  
          <div class="input-field col s12">
              <input id="location" type="text" class="validate greyed" name="location">
              <label for="location">Location</label>
            </div>
            
            
            <div class="input-field col s12 l6">
              <input id="telephone" type="text" class="validate greyed" name="telephone">
              <label for="telephone">Telephone</label>
            </div>
            
            
             <div class="input-field col s12 l6">
              <input id="price" type="text" class="validate greyed" name="price" data-a-sign="$" data-a-dec=".">
              <label for="price">Price</label>
            </div>
     
            <div class="input-field col l6 s12">
                <select id="accomodation" >
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
 
 
 <!-----------------------------------------OVERLAY----------------------------------------->
 
         <div class="overlay">
             
             <div class="preloader-wrapper big active center">
                  <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                      <div class="circle"></div>
                    </div><div class="gap-patch">
                      <div class="circle"></div>
                    </div><div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                  </div>
            
                  <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                      <div class="circle"></div>
                    </div><div class="gap-patch">
                      <div class="circle"></div>
                    </div><div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                  </div>
            
                  <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                      <div class="circle"></div>
                    </div><div class="gap-patch">
                      <div class="circle"></div>
                    </div><div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                  </div>
            
                  <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                      <div class="circle"></div>
                    </div><div class="gap-patch">
                      <div class="circle"></div>
                    </div><div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                  </div>
            </div>
        </div>
<!-----------------------------------------OVERLAY----------------------------------------->
 
 
 
 
 
<!--_____________________________________JAVASCRIPT FILES___________________________________________-->

<script type="text/javascript" src="bower_components/formatter/dist/jquery.formatter.js"></script>
<script type="text/javascript" src="bower_components/autoNumeric/autoNumeric.js"></script>

<!--_____________________________________JAVASCRIPT FILES______________________________________-->









<!------------------------------------------------------------CSS RULES------------------------------------------------------->
<style type="text/css">
.center {
  margin: auto;
  position: absolute;
  top: 0; left: 0; bottom: 0; right: 0;
}
.overlay{
    
   background-color:white;
    position:fixed;
    width:100%;
    height:100%;
    top:0px;
    left:0px;
    z-index:1000;
   display:none;
}
.cam{
    font-size:50px;
}
.absolute-center{
  margin: auto;
  position: absolute;
  top: 0; left: 0; bottom: 0; right: 0;
}
.error{
    color:red;
    padding:10px;
    font-size:24px;
    font-family: 'Open Sans Condensed', sans-serif;
}
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

.header{
   
     font-family: 'Wire One', sans-serif;
    font-size:120px;
    color:white !important;
    font-weight:bold;
}
.greyed{
    color:gray;
}
</style>

<!------------------------------------------------------------CSS RULES------------------------------------------------------->








<!--------------------------------------------------JAVASCRIPT FUNCTIONS AND INITIALIZATIONS----------------------------------->
<script type="text/javascript">




/*-----------------------------------------------CAPTURE HOME DATA*--------------------------------------------------*/
function capture(){
  
    var indexed=-1;
    var container={};
    $('input').each(function(index,val){
        
        if($(this).val()==""){
         
            indexed=index;
           
        }
        else{
            $('.error').html('');
        }
    });
    if(indexed==-1){
             container.price=parseInt($("#price").val()).toLocaleString();
            container.locationof=$("#location").val();
            container.telephone=$("#telephone").val();
            container.accomodation=$("#accomodation").val();
            container.type=$("#type").val();
            container.pref=$('#gender').val();
            container.lat=lat;
            container.long=lng
            $('#upload').openModal();
    }
   
   
    //return false;
   
}


/*-----------------------------------------------CAPTURE HOME DATA*--------------------------------------------------*/



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

$("#finish").on('click',function(){
    var checker=[];
   var error=0;
    checker.push($("#price").val());
    checker.push($("#location").val());
   checker.push($("#telephone").val());
    checker.push($("#gender").val());
   checker.push($("#type").val());
   checker.push($("#accomodation").val());
   console.log(checker);
  for (var i=0;i<checker.length;i++){
      if(checker[i]=="" || checker[i]==null || checker[i]=="(   )    -    "){
          $(".error").html("<center>All fields are required</center>");
           error+=1;
          break;
         
      }
      
  }
   if(error==0){
     
            $(".error").html("");
             $('#upload').openModal();
   }
    
    
    
});



/*+++++++++++++++++++++++++++++++++++++++++FORMATTER FOR TELEPHONE NUMBER++++++++++++++++++++++++++++++++++++++++++++*/
$('#telephone').formatter({
  'pattern': '({{999}}) {{999}}-{{9999}}',
  'persistent': true
});
/*+++++++++++++++++++++++++++++++++++++++++FORMATTER FOR TELEPHONE NUMBER++++++++++++++++++++++++++++++++++++++++++++*/



/*++++++++++++++++++++++++++++++++++++++++++++++++++INPUT VALIDATION+++++++++++++++++++++++++++++++++++++++++++++++++*/
$('.dropify').dropify();


/*++++++++++++++++++++++++++++++++++++++++++++++++++INPUT VALIDATION+++++++++++++++++++++++++++++++++++++++++++++++++*/


$(".doneForm").on('submit',function(event){ 
    arr=[];
     event.preventDefault();
    $(".overlay").show();
    var formData=new FormData(this[0]);
  /*  var array = $.map(formData, function(value, index) {
    return [value];
});*/
///console.log($('#fileSelect').val());
    
   $.ajax({
      type:"POST",
      url:"uploader.php",
      data:  new FormData(this),
     contentType: false,
    cache: false,
    processData:false,
      success:function(response){
          
          $(".overlay").hide();
          console.log(response);
           Materialize.toast('Property has been added!', 4000)
      }
   });
    
 
});

/*+++++++++++++++++++++++++++++++++++++++++++++FORMAT CURRENCY IN THE PRICE FIELD++++++++++++++++++++++++++++++++++++++++*/


/*$(document).ready(function(){
    document.getElementById("price").value="$"
});*/

/*var curr="";
function commas(x){
    if(isNaN(x)){
    return
    }
    if(x.length<=3){
        return x+curr+".00";
    }
    else{
        curr=curr+","+x.substring(x.length-3,x.length);
        return commas(x.substring(0,x.length-3));
    }
    
}*/
 $("#price").autoNumeric('init');

/*$("#price").keyup(function(){
   var value=$(this).val();

  
  
    
});*/
/*+++++++++++++++++++++++++++++++++++++++++++++FORMAT CURRENCY IN THE PRICE FIELD++++++++++++++++++++++++++++++++++++++++*/
</script>

<!--------------------------------------------------JAVASCRIPT FUNCTIONS AND INITIALIZATIONS----------------------------------->


 </body>
</html>