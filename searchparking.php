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

 

<?php
require_once __DIR__."/config.php";
class API{
	function Select(){
       $db = new Connect;
	$users = array();
	$data = $db->prepare('SELECT * FROM parkinginfo');
	$data->execute();
	while($OutputData = $data->fetch(PDO::FETCH_ASSOC)){
	      $users[$OutputData['id']] = array(
	     	'id' => $OutputData['id'],
		'pname' => $OutputData['pname'],
		'address' => $OutputData['address'],
		'freeloc' => $OutputData['freeloc'],
  	      );
	     }
		return $users;

	}	
}



$API = new API;
header('Content-Type: application/json');
$json_data= $API->Select();

?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Parking Name</th>
      <th scope="col">Address</th>
      <th scope="col">Free Parking</th>
    </tr>
  </thead>
  <tbody>
 
 <?php   foreach($json_data as $value){    ?>
    <tr>
      <th scope="row"><?php  echo $value['id']; ?></th>
      <td><?php  echo $value['pname']; ?></td>
      <td><img style="width:22px;height:22px;" src="Location.jpg"><?php  echo $value['address']; ?></td>
      <td><?php  echo $value['freeloc']; ?></td>
    </tr>
    
  <?php   }   ?>    
 
  </tbody>
</table>
            
            
            
            
            
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
