<html lang="en">
<head>

    <title>Saljning Zone</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="stylesheet" href="//cdn.materialdesignicons.com/4.1.95/css/materialdesignicons.min.css">


<!--<link href="<=asset('/siteresources/bootstrap-datetimepicker-master/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" media="screen">-->

<!--<link href="<=asset('/siteresources/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css');?>" rel="stylesheet" media="screen">-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 
<script src="https://cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script>

<!--<link rel="stylesheet" type="text/css" href="{{asset('siteresources/images/Materialdesignicons/font/flaticon.css')}}">-->

<link rel="stylesheet" href="adminmainpage.css">
	<!--<link rel="stylesheet" href="<=asset( '/local/resources/views/layouts/mainpage.css' )?>/">-->
	
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

 <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        
        height: 400px;
        width:200px;
      }
    </style>

    <script>
      function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 13,
          center: {lat: 56.8770413, lng: 14.8092744}
        });
        const trafficLayer = new google.maps.TrafficLayer();
        trafficLayer.setMap(map);
      }
    </script>
    
    
</head>

<body>


<main>

<header>

<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#17202A;"> <!-- bootstrap menu-->
   <div class="mr-sm-5">
                                               
                              <img class="offset-md-10" src="icones/personal.jpg" style="width:52px;height:52px; border-radius:40px; margin-top:4px;" alt="logo">
                    </div>
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
  

    </ul>
    <form class="form-inline my-2 my-lg-0" >
                  

      <input class="form-control mr-sm-2"  style="width:500px;" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


</header>

<section class="row mx-md-0">
        
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 leftmenu">
                       
                            
                            
                    <div class="col-md-12">
                            
                                   <br>
                              <a  href="https://saljningzone.se/?user=<?php echo $_GET['user']; ?>&pass=<?php echo $_GET['pass']; ?>"><img style="width:22px;height:22px;" src="icones/iconfinder_file_add.png"> Dashboard</a>
                                <hr>
                                     <a  href="https://saljningzone.se/searchparking.php?user=<?php echo $_GET['user']; ?>&pass=<?php echo $_GET['pass']; ?>"><img style="width:22px;height:22px;" src="icones/iconfinder_file_add.png"> Search Parking</a>
                                
                              
                                <hr>
                                  
                                     <a  href="https://saljningzone.se/edituser.php?user=<?php echo $_GET['user']; ?>&pass=<?php echo $_GET['pass']; ?>"><img style="width:22px;height:22px;" src="icones/iconfinder_file_add.png"> Edit User</a>
                                
                                  
                                  <hr>
                                 
                                     <a  href="https://saljningzone.se/invoices.php?user=<?php echo $_GET['user']; ?>&pass=<?php echo $_GET['pass']; ?>"><img style="width:22px;height:22px;" src="icones/iconfinder_file_add.png"> Invoices</a>
                                     
                                  <hr>
                                 
                                     <a  href=""><img style="width:22px;height:22px;" src="icones/iconfinder_file_add.png"> Contact Us</a>
                                <hr>
                                
                                     <a  href=""><img style="width:22px;height:22px;" src="icones/iconfinder_file_add.png"> Setting</a>
                                
                                <hr>
                                
                                  
                                     <a  href="https://saljningzone.se/login.php"><img style="width:22px;height:22px;" src="icones/iconfinder_file_add.png"> Logout</a>
                                <hr>
                               
                                
                              
                
                          
                           <div style="margin-top:320%;"></div>
                           

                    </div>        

            </div>

            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
 
                                   <div class="row"style="margin-top:12px;margin-bottom:-15px; font-size:16px;">
                                        <div class="col-lg-6"> 
                                           <p style="font-weight: bold;">Welcome User</p>
                                        </div>
                                   
                                    </div>
                                    
                                   
                                      <hr class="bg-info" style="height:1px;opacity:0.6">


   <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4h2-yAf1uLYkduMvbf6XyuRBt1WJlCYE&callback=initMap&libraries=&v=weekly"
      async
    ></script>
 
 
 <div class="row" style="margin-top:20px;margin-left:10px;">
    
        <div class="col-md-6">
             <div  id="map" style="width:100%;"></div>
            
             <center>
                    <br>
                 <h5>Live City of växjö Traffic Conditions</h5>
                 </center>
                 
        </div>
     
    
    
        <div class="col-md-6">
              <div id="myDiv" style="width:600px;height:400px;"></div>
                 <center>
                    
                 <h5>The condition of parking lots (Fill or empty) at different hours in the city</h5>
                 </center>

            
        </div>
    
     
 </div>
 


 
       
<script>
    
    var trace1 = {
  x: [1, 2, 3, 4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24],
  y: [5, 5, 5, 6,8,20,38,45,50,50,45,40,40,30,30,20,20,30,30,20,10,10,10,5,5],
  fill: 'tozeroy',
  type: 'scatter'
};

var trace2 = {
  x: [1, 2, 3, 4],
  y: [3, 5, 1, 7],
  fill: 'tonexty',
  type: 'scatter'
};

var data = [trace1];

Plotly.newPlot('myDiv', data);
</script>








  



            </div>  


 
 </section>  


</main>



 <footer  style="background-color:#17202A; min-height:350px;">
      
      <div class="container pt-5">
        <div  class="row">
          <div class="col-md-4 mb-2">
            <div style="font-weight:bold;font-size:1.4em; text-align:left;color:white;" name="newsletter">Newsletter</div>
            <hr style="height:1px; margin-top:20px; background-color:black;"></hr>
            <div style="text-align:left;"><a style="color:white; font-size:16px;" href="/"> Subscribe and receive the excluded code for free!</a></div>
            
            <div class="card-body" style="margin-left:-5%;">
              <form method="post" action="#">
                @csrf
                <input type="email" class="form-control" name="subscribe">
                
              <button type="submit" class="couponfirstpagea">Subscribe</button>
              </form>
            </div>
          </div>

           <div class="col-md-4 mb-2">
            <div style="font-weight:bold;font-size:1.4em; text-align:left;color:white;">About us</div>
            <hr style="height:1px; margin-top:20px; background-color:black;"></hr>
            <div style="text-align:left;"><a style="color:white;font-size:16px;" href="#">About us</a></div>
            
            <div style="text-align:left;"><a style="color:white;font-size:16px;" href="#">privacy policy</a></div>
            
            <div style="text-align:left;"><a style="color:white; font-size:16px;" href="#">Terms and conditions</a></div>
            
            <div style="text-align:left;"><a style="color:white; font-size:16px;" href="#">How to use this product?</a></div>
            
          </div>
          
          <div class="col-md-4">
            <div style="font-weight:bold;font-size:1.4em; text-align:left;color:white;">Follow us on:</div>
            <hr style="height:1px; margin-top:20px; background-color:black;"></hr>
            <div style="text-align:left;">
              <a style="color:#0e76a8; font-size:40px; color:white;text-decoration:none;" target='_blank' href="#" class="glyph-icon flaticon-linkedin-logo"> </a>
              <a style="color:#3b5998; font-size:40px; color:white;text-decoration:none;" target='_blank' href="#"  class="glyph-icon flaticon-facebook-logo"> </a>
              <a style="color:#00acee; font-size:40px; color:white;text-decoration:none;" target='_blank' href="#"  class="glyph-icon flaticon-twitter-logo-on-black-background"> </a>
              <a style="color:#3f729b; font-size:40px; color:white;text-decoration:none;" target='_blank' href="#"  class="glyph-icon flaticon-instagram-logo"> </a>
             
              
              
            </div>
            
          </div>
        </div>          
      </div>
    </footer>
    <div class="copyright">
      <a  target="_blank">Copyright © 2021. Designed by webicomtech.se.</label> </a>
      
      
    </div>
   


</body> 
</html>
