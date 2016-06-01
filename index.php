
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
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5G9JFJu-6F4zbj3POdmAVGDi2mCQ7coE&callback=initMap"></script>
        <title>Test</title>
    </head>
<body>
    
<!--_______________________________NAVBAR_______________________________________ -->    
<nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Campusflats</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse" ><i class="material-icons">menu</i></a>
      	<div class="container">
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">About</a></li>
        <li><a href="badges.html">Compare</a></li>
        <li><a href="collapsible.html">Login</a></li>
        <li><a href="mobile.html">Register</a></li>
         <li><a href="mobile.html">About</a></li>
      </ul>
        </div>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
</nav>
<!--_______________________________NAVBAR_______________________________________ -->


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
          <input placeholder="Search locations" id="first_name" type="text" class="validate">
          <label for="first_name">Location</label>
        </div>
        
        <div class="input-field col s12 l6">
            <select>
              <option value="" disabled selected>Choose your option</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
            <label>Materialize Select</label>
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
          <div class="card blue-grey darken-1">
            <div class="card-content white-text card-image">
             <img class="image-card" src="../images/stretch.png" style="background-repeat:no-repeat;"></img>
            </div>
            <div class="card-action cyan">
           
                <p class="white-text"> <span class="left pad">Price</span> 15,000</p>
                <p class="white-text"> <span class="left pad">Location</span> Tavern, Papine Jamaica</p>
                <p class="white-text"> <span class="left pad">Accomodation</span> Single</p>
                <p class="white-text"> <span class="left pad">Rent type</span> All inclusiive</p>
                <p class="white-text"> <i class="material-icons left">call</i> <span>(876) 456-7097</span></p>
            </div>
          </div>
        </div>
        
        
        <div class="col s12 m12 l4">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text card-image">
             <img class="image-card" src="../images/stretch.png"  style="background-repeat:no-repeat;"></img>
            </div>
            <div class="card-action cyan">
           
                <p class="white-text"> <span class="left pad">Price</span> 15,000</p>
                <p class="white-text"> <span class="left pad">Location</span> Tavern, Papine Jamaica</p>
                <p class="white-text"> <span class="left pad">Accomodation</span> Single</p>
                <p class="white-text"> <span class="left pad">Rent type</span> All inclusiive</p>
                <p class="white-text"> <i class="material-icons left">call</i> <span>(876) 456-7097</span></p>
            </div>
          </div>
        </div>
        
          <div class="col s12 m12 l4">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text card-image">
             <img class="image-card" src="../images/stretch.png"  style="background-repeat:no-repeat;"></img>
            </div>
            <div class="card-action cyan">
           
                <p class="white-text"> <span class="left pad">Price</span> 15,000</p>
                <p class="white-text"> <span class="left pad">Location</span> Tavern, Papine Jamaica</p>
                <p class="white-text"> <span class="left pad">Accomodation</span> Single</p>
                <p class="white-text"> <span class="left pad">Rent type</span> All inclusiive</p>
                <p class="white-text"> <i class="material-icons left">call</i> <span>(876) 456-7097</span></p>
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
                
                 <div class="input-field col s12 l12">
                    <input type="email" class="subscribe validate" placeholder="Enter email address" id="subscribe" name="subscribe"/> 
                   <label for="subscribe" class="subscribe-label">Subscribe</label>
                   <div><button class="btn">Subscribe</button></div>
                </div>
               
              </div>
              <div class="col l4 offset-l2 s12  color">
                  <center>
                
                    <div class="icon-div">
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
          <div class="footer-copyright">
            <div class="container color">
            © 2016 Campus Flats. All rights reserved.
            <a class="grey-text text-lighten-4 right" href="#!">Contact</a>
            </div>
          </div>
</footer>
<!--________________________________FOOTER_____________________________________________-->

<!--_______________________________CSS RULES________________________________________ -->
<style type="text/css">

.icon{
    width:40px;
    height:40px;
  
    /*padding:30px;*/
}
.btn{
    background-color:#33CCFF;   
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
   
}
footer.page-footer {
  background-color:#33CCFF;   
}
</style>
<!--_______________________________CSS RULES________________________________________ -->











<!--_______________________________JAVASCRIPT FILES________________________________________ -->
<script src="bower_components/jquery/dist/jquery.js"></script>
<script type="text/javascript" src="bower_components/Materialize/dist/js/materialize.js"></script>
<!--<script type="text/javascript"  src="assets/js/jquery.backstretch.js"></script>-->
<script type="text/javascript" src="ionRangeSlider/js/ion.rangeSlider.js"></script>
<!--_______________________________JAVASCRIPT FILES________________________________________ -->









<!--_______________________________JAVASCRIPT FUNCTIONS________________________________________ -->

<script type="text/javascript">
/*-------------------SIDE NAVIGATION---------------------*/

$(".button-collapse").sideNav();

/*-------------------SIDE NAVIGATION---------------------*/
 $(function () {

        $("#range").ionRangeSlider({
            hide_min_max: true,
            keyboard: true,
            min: 0,
            max: 50000,
            from: 1000,
            to: 40000,
            type: 'double',
            step: 1000,
            prefix: "$",
            grid: true
        });

    });

/*DROPDOWN INITIALIZATION*/
$(document).ready(function() {
    $('select').material_select();
  });
/*DROPDOWN INITIALIZATION*/
    
</script>

<!--_______________________________GOOGLE MAPS________________________________________ -->
<script type="text/javascript">

    var map;
       var jamaica = new google.maps.LatLng(18.0104288,-76.741323);
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: jamaica,
          zoom: 13,
          styles:[{"featureType":"landscape","stylers":[{"hue":"#FFBB00"},{"saturation":43.400000000000006},{"lightness":37.599999999999994},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#FFC200"},{"saturation":-61.8},{"lightness":45.599999999999994},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":51.19999999999999},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":52},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#0078FF"},{"saturation":-13.200000000000003},{"lightness":2.4000000000000057},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#00FF6A"},{"saturation":-1.0989010989011234},{"lightness":11.200000000000017},{"gamma":1}]}],

        });
      }
      

   google.maps.event.addDomListener(window, 'load', initMap);   
</script>
<!--_______________________________GOOGLE MAPS________________________________________ -->


<!--_______________________________JAVASCRIPT FUNCTIONS________________________________________ -->




</body>
</html>

