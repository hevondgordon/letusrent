
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
   	   
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="bower_components/Materialize/dist/css/materialize.css" type="text/css" />
        <link rel="stylesheet" href="ionRangeSlider/css/ion.rangeSlider.css" type="text/css" />
        <link rel="stylesheet" href="ionRangeSlider/css/ion.rangeSlider.skinFlat.css" type="text/css" />
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
        <script src="bower_components/jquery/dist/jquery.js"></script>
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5G9JFJu-6F4zbj3POdmAVGDi2mCQ7coE&libraries=places&callback=initAutocomplete" async defer></script>
        <title>Test</title>
        
     
<script>
      var autocomplete;
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
      
        for(var x=0;x<10;x++){
            jamaica = new google.maps.LatLng(testx,testy);
            addMarker(jamaica);
            testx+=0.021;
            testy+=0.030;
            /*console.log("lat:"+jamaica.lat()+"lang:"+jamaica.lng());*/
           
           
            
        }
      
          }
       function clearAllMarkers() {
                for(var i=0; i<markers.length; i++){
                   markers[i].setMap(null);
                }
   
        }
      
        function addMarker(location) {
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
           marker.addListener('click', function() {
                $("#modal").html('<div class="modal-content">'+
                  '<div class="card blue-grey darken-1">'+
                    '<div class="card-content white-text card-image">'+
                    '<img class="image-card" src="../images/stretch.png"  style="background-repeat:no-repeat;"></img>'+
                    '</div>'+
                    '<div class="card-action cyan row">'+
                        '<div class="col l10 s10 m10">'+
                       '<p class="white-text"> <span class="left pad">Price</span> $15,000</p>'+
                        '<p class="white-text"> <span class="left pad">Accomodation</span> Single</p>'+
                        '<p class="white-text"> <span class="left pad">Rent type</span> All inclusiive</p>'+
                        '<p class="white-text"> <i class="material-icons left">call</i> <span>(876) 456-7097</span></p>'+
                        '</div>'+
                         '<div class="col l2 s2 m2">'+
                          '<div  class="col s6 l6 m6 like"><i class="material-icons modallike">favorite</i></div>'+ 
                        '</div>'+
                    '</div>'+
                  '</div>'+
                  '</div>');
                $('#modal').openModal({ready:function(){
                     var count=0;
                    $('.modallike').on('click',function(){
                        if (count%2==0){
                            $( this ).css({ "color":"red","opacity":0.7});
                             $(this).animate({fontSize:"2.5em"},2000);
                             count++;
                             
                        }
                        else{
                            
                             $(this).css({"color":"white","opacity":1});
                             $(this).animate({fontSize:"1.8em"},2000);
                             count++
                        }
                       
                    })
                }});
           });
         
         markers.push(marker);
        }
        google.maps.event.addDomListener(window, 'load', initMap);  
        
 /*----------------------------------------------------ADD MARKERS TO MAP HERE---------------------------------------------------------------*/
        
         
        
        
        
       
        
 /*----------------------------------------------------ADD MARKERS TO MAP HERE---------------------------------------------------------------*/
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

    </head>
<body>
 
 

<!--_________________________________ Modal Structure____________________________________-->
      <div id="modal" class="modal">
      </div>
<!--_________________________________ Modal Structure____________________________________-->
  
  
  
  
<?php
require 'header.php';
?>


<div  id="map"></div>
<!--_______________________________FILTER FORM_______________________________________ -->
<!--FILTER LABEL-->
<div class="row">
     <div class="filter-label col l12 s12 z-depth-1 filter-pad"><center><h4 ><span>What<span class="color-text "> EXACTLY</span> are you looking for?</span></h4></center></div>
   
</div>
<!--FILTER LABEL-->
<!--SLIDER DIV-->
 
 
  <div class="slide-container">
      <div class="slider-label">Choose price range</div>
        <input class="slider"type="text" id="range" value="" name="range" />
</div>
<!--SLIDER DIV-->

<div class="row">
    <form class="col s12">
      <div class="row">
          
       
        <div class="input-field col s12 l6">
          <input placeholder="Search locations" id="location" type="text" class="validate"  onFocus="geolocate()"/>
          <label for="location">Location</label>
        </div>
        
        <div class="input-field col s12 l6">
            <select id="accomodation">
              <option value="1">Single</option>
              <option value="2">Shared</option>
            </select>
            <label>Accomodation</label>
        </div>
        <button class="btn waves-effect waves-light search-button" type="submit" name="action">Search
            <i class="material-icons right">search</i>
        </button>
       
        
       
       
      </div>
    </form>
  </div>
<!--_______________________________FILTER FORM_______________________________________ -->

<!--_______________________________TEXT_______________________________________ -->
<div class="text">
 <p><h4><center>Let us help you find your <strong><span class="color-text">HOME AWAY FROM HOME.</span></strong> </center></h4></p>   
</div>
<!--_______________________________TEXT_______________________________________ -->

<!--_______________________________CARDS_______________________________________ -->
 <div class="row">
         <div class="col s12 m12 l4">
          <div class="card row teal darken-1">
              
            <div class="card-content white-text card-image">
             <img class="image-card" src="../images/stretch.png" style="background-repeat:no-repeat;"></img>
            </div>
            <div class="card-action cyan row">
                <div class="col l10 s10 m10">
                <p class="white-text"> <span class="left pad">Price</span> $15,000</p>
                <p class="white-text"> <span class="left pad">Location</span> Tavern, Papine Jamaica</p>
                <p class="white-text"> <span class="left pad">Accomodation</span> Single</p>
                <p class="white-text"> <span class="left pad">Rent type</span> All inclusiive</p>
                <p class="white-text"> <i class="material-icons left">call</i> <span>(876) 456-7097</span></p>
                </div>
                <div class="col l2 s2 m2">
                       <div  class="col s6 l6 m6 like"><i class="material-icons one ilike">favorite</i></div> 
                </div>
               
            </div>
            
          </div>
        </div>
        
        
        <div class="col s12 m12 l4">
          <div class="card row teal darken-1">
              
            <div class="card-content white-text card-image">
             <img class="image-card" src="../images/stretch.png" style="background-repeat:no-repeat;"></img>
            </div>
            <div class="card-action cyan row">
               <div class="col l10 s10 m10">
                <p class="white-text"> <span class="left pad">Price</span> $15,000</p>
                <p class="white-text"> <span class="left pad">Location</span> Tavern, Papine Jamaica</p>
                <p class="white-text"> <span class="left pad">Accomodation</span> Single</p>
                <p class="white-text"> <span class="left pad">Rent type</span> All inclusiive</p>
                <p class="white-text"> <i class="material-icons left">call</i> <span>(876) 456-7097</span></p>
                </div>
                <div class="col l2 s2 m2">
                       <div  class="col s6 l6 m6 like"><i class="material-icons two ilike">favorite</i></div> 
                </div>
               
            </div>
            
          </div>
        </div>
        
         <div class="col s12 m12 l4">
          <div class="card row teal">
              
            <div class="card-content white-text card-image">
             <img class="image-card" src="../images/stretch.png" style="background-repeat:no-repeat;"></img>
            </div>
            <div class="card-action cyan row">
                <div class="col l10 s10 m10">
                <p class="white-text"> <span class="left pad">Price</span> $15,000</p>
                <p class="white-text"> <span class="left pad">Location</span> Tavern, Papine Jamaica</p>
                <p class="white-text"> <span class="left pad">Accomodation</span> Single</p>
                <p class="white-text"> <span class="left pad">Rent type</span> All inclusiive</p>
                <p class="white-text"> <i class="material-icons left">call</i> <span>(876) 456-7097</span></p>
                </div>
                <div class="col l2 s2 m2">
                       <div  class="col s6 l6 m6 like"><i class="material-icons three ilike">favorite</i></div> 
                </div>
               
            </div>
            
          </div>
        </div>
      </div>
<!--_______________________________CARDS_______________________________________ -->


<!--________________________________FOOTER_____________________________________________-->

<footer class="page-footer color">
          <div class="container  color ">
            <div class="row  color">
              <div class="col l6 s12  color">
                <p class="white-text bold" >Subscribe to receive updates when new properties are available!</p> 
                
                 <div class="input-field col s12 l12 color">
                    <input type="email" class="subscribe validate" placeholder="Enter email address" id="subscribe" name="subscribe"/> 
                   <label for="subscribe" class="subscribe-label">Subscribe</label>
                   <div><button class="btn subtn">Subscribe</button></div>
                </div>
               
              </div>
              <div class="col l4 offset-l2 s12  color">
                  <center>
                
                    <div class="icon-div color">
                  <a class="grey-text text-lighten-3" href="#!"><img class="icon" src="../images/facebook.png"></img></a>
                  <span>&nbsp</span><span>&nbsp</span><span>&nbsp</span>
                  <a class="grey-text text-lighten-3" href="#!"><img class="icon" src="../images/twitter.png"></img></a>
                    <span>&nbsp</span><span>&nbsp</span><span>&nbsp</span>
                  <a class="grey-text text-lighten-3" href="#!"><img class="icon" src="../images/github.png"></img></a>
                  </div>
                 </center>
                 
               
              </div>
            </div>
          </div>
          <div class="footer-copyright color">
            <div class="container color">
            © 2016 Campus Flats. All rights reserved.
            <a class="grey-text text-lighten-4 right" href="#!">Contact</a>
            </div>
          </div>
</footer>
<!--________________________________FOOTER_____________________________________________-->

<!--_______________________________CSS RULES________________________________________ -->
<style type="text/css">
.subtn{
    background-color:white;
    color:#33CCFF; 
}

.like{
   margin-top:8px;
    margin-left:2px;
    color:white;
   
}
.like:hover{
    cursor:pointer;
}
.modal {
   
    max-height: 100% !important ; overflow-y: hidden !important ;
    
}
.modal-content{
    padding: 5px !important;
}
/* ----------- Non-Retina Screens ----------- */
@media screen 
  and (min-device-width: 1200px) 
  and (max-device-width: 1600px) 
  and (-webkit-min-device-pixel-ratio: 1) { 
      .modal {
    width: 45% !important;
    max-height: 100% !important ; overflow-y: hidden !important ;
}
}

/* ----------- Retina Screens ----------- */
@media screen 
  and (min-device-width: 1200px) 
  and (max-device-width: 1600px) 
  and (-webkit-min-device-pixel-ratio: 2)
  and (min-resolution: 192dpi) { 
      .modal {
    width: 45% !important;
}
}


.icon{
    width:40px;
    height:40px;
  
    /*padding:30px;*/
}

.btn{
    background-color: #33CCFF; 
}

.bold{
     font-weight:bold;
     font-size:16px;
}

label.subscribe-label{
    color:white;
    
}
.filter-label{
    
   font-family:'Slabo 27px', serif; 
}
input[type=email].subscribe{
     border-bottom: 1px solid white;
     color:white;
}
.color-text{
    color:#33CCFF;
}
.text{
    font-family:'Slabo 27px', serif;
    padding:20px;
}
  
.footer-copyright{
  background-color:#33CCFF;   
}

.filter-pad{
    padding:20px;
}

.pad{
    padding-right:10px;
    font-weight:bold;
}
.card-image{
    background-image:url('../images/stretch.png');
}
.search-button{
    background-color:#33CCFF;
}

.slide-container{
    padding:20px;
}
#map{
    height:400px;
}

@media only screen and (min-width: 320px) and (max-width: 480px) {
  #map {
    height:300px;
  }
  .icon-div{
     padding-top:10px;
  }
}
.brand-logo{

font-family: 'Slabo 27px', serif;

}

.nav-wrapper{
	background-color:#33CCFF;
}
.bground{
    height:200px;
    width:200px;

}

.color{
   background-color:#33CCFF; 
}
footer.page-footer {
  background-color:#33CCFF;   
}
.subtn{
    background-color:white;
    color:#33CCFF; 
}
.subtn:hover{
    background-color:white;
    color:#33CCFF; 
}
footer.page-footer .footer-copyright {
    background-color:#33CCFF;
}
</style>
<!--_______________________________CSS RULES________________________________________ -->











<!--_______________________________JAVASCRIPT FILES________________________________________ -->

<script type="text/javascript" src="bower_components/Materialize/dist/js/materialize.js"></script>
<!--<script type="text/javascript"  src="assets/js/jquery.backstretch.js"></script>-->
<script type="text/javascript" src="ionRangeSlider/js/ion.rangeSlider.js"></script>


<!--_______________________________JAVASCRIPT FILES________________________________________ -->









<!--_______________________________JAVASCRIPT FUNCTIONS________________________________________ -->

<script type="text/javascript">
/*-------------------SIDE NAVIGATION---------------------*/

$(".button-collapse").sideNav();

/*-------------------SIDE NAVIGATION---------------------*/




/*----------------------ION RANGE SLIDER INITIALIZATION----------------------*/

     var from=0,to=30000;
     var saveResult = function (data) {
    from = data.from;
    to = data.to
    console.log("from: "+from+" to:"+to);
};

        $("#range").ionRangeSlider({
            hide_min_max: true,
            keyboard: true,
            min: 0,
            max: 50000,
            from: from,
            to: to,
            type: 'double',
            step: 1000,
            prefix: "$",
            grid: true,
            onLoad: function (data) {
             saveResult(data);
            
         },
            onChange: saveResult,
            onFinish: saveResult
        });


/*----------------------ION RANGE SLIDER INITIALIZATION----------------------*/







/*------------------------DROPDOWN INITIALIZATION------------------------------*/

$(document).ready(function() {
    $('select').material_select();
  });
  
/*------------------------DROPDOWN INITIALIZATION------------------------------*/







/*-------------------------------MODAL SETUP-----------------------------------*/  

    /*$('.modal-trigger').leanModal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      in_duration: 300, // Transition in duration
      out_duration: 200, // Transition out duration
      ready: function() {console.log("ready to open"); }, // Callback for Modal open
      complete: function() { console.log("closed"); } // Callback for Modal close
    }
  );*/
  /*
/*-------------------------------MODAL SETUP-----------------------------------*/  





/*--------------------------------LIKE BUTTON FUNCTIONALITY-----------------------------------*/

$('.ilike').on('click',function(){
     var styleProps = $( this ).css(["color"]);
    if (styleProps["color"]=="rgb(255, 255, 255)"){
        $( this ).css({ "color":"red","opacity":0.7});
         $(this).animate({fontSize:"2.5em"},2000);
         Materialize.toast('Property added to likes!', 4000)
    }
    else{
        
         $(this).css({"color":"white","opacity":1});
         $(this).animate({fontSize:"1.8em"},2000);
         Materialize.toast('Property removed from likes!', 4000)
    }
   
})



/*--------------------------------LIKE BUTTON FUNCTIONALITY-----------------------------------*/



</script>

<!--_______________________________JAVASCRIPT FUNCTIONS________________________________________ -->




</body>
</html>

