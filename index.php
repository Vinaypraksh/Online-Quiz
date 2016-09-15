<?php
// Start the session
session_start();

?>

<?php

session_destroy();

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/styles/bootstrap.min.css">
        <script src="bootstrap/scripts/jquery-2.1.4.min.js"></script>
        <script src="bootstrap/scripts/bootstrap.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>
    </head>
    <body style="margin-top:0;background:white">
        <div class="container-fluid" style="background:#e0e0e0;height:auto;margin:0px;box-shadow:0px 4px 10px gray">
             <div class="col-md-2 col-lg-2 col-sm-2"><img src="img/SATI.png" style="width:100px;height:auto;margin-left:20px;margin-top:4px"></div>
			 <div class="col-md-10 col-lg-8 col-sm-10"><h1 style=";font-family: 'Lato', sans-serif;color:#000000 ;padding-top:;text-align:center;font-weight:bold">Samrat Ashok Technological Institute Vidisha </h1></div>
            
			<div class="col-md-2 col-lg-2 col-sm-2"></div>
			<div class="col-md-10 col-lg-8 col-sm-10">
            <h5 style=";font-size:20px;text-align:center">Department of Computer Science and Engineering</h5>
        </div></div>
    <div class="container">  
	<div class="col-md-12">
            <h2 style="text-align:center;margin-top:10px;font-family:Arial;color:#707070;font-size:300%,height:40px">Quiz</h2></div>
        
       </div>
        <div class="container" style=";margin-top:10px;width:400px;height:400px;background:#F0F0F0;box-shadow:0px 4px 2px lightgray;">
           <img src="img/user.png" style="width:100px;height:100px;margin-left:125px;margin-top:40px">  
   <form role="form" method="post" action="instruction.php" class="form-horizontal" style="margin-top:35px">
                                                    
    <div class="form-group  has-feedback">
<label for="name" class="control-label col-md-1"></label>
        
<div class="col-md-10" style="font-family: 'Droid Sans', sans-serif;">
<input type="name" class="form-control input-lg" name="username" id="name" placeholder="Enter Your User Name">
        </div></div>
 <div class="form-group  has-feedback">
<label for="name" class="control-label col-md-1"></label>
     
<div class="col-md-10" style="font-family: 'Droid Sans', sans-serif;">
<input type="password" class="form-control input-lg" name="password" id="password" placeholder=" Enter Your Password">
        </div></div>



        <input type="submit" name="submit" class="btn btn-default"
         value="Log In"style="margin-left:35px;margin-top:10px;margin-bottom:15px;color:#fff;width:300px;height:43px;padding-top:5px;font-family: 'Droid Sans', sans-serif;font-size:20px ; background:gray" class="btn"></div>
            </form></div>          
        <nav class="navbar-default navbar-fixed-bottom"> 
            
            <div  class="col-md-7 col-lg-7">
                <h5 style=" white-space: pre; font-family: 'Lato', sans-serif;color:#909090;"> Developed by: <a href="https://in.linkedin.com/pub/rohit-kori/ab/665/194" target="_blank" >  Rohit Kori,</a><a href="https://www.facebook.com/sachin.sen.5099?fref=ts" style="text-decoration:none; "target="_blank" >   Sachin Sen,</a> <a href="https://www.facebook.com/suryansharma29?fref=ts" style="text-decoration:none;"target="_blank" >   Suryansh Sharma,</a> <a href="https://www.facebook.com/vinayprakashsingh98?fref=ts" style="text-decoration:none;"target="_blank" >   Vinay Prakash.</a></h5> </div>  
        
            </div><div class="col-md-5 col-lg-5"> <h5 style="white-space: pre; text-align:right;font-family: 'Lato', sans-serif;color:#909090;">Guided by:     <a href="#" style="text-decoration:none;text-align:center" >Prof. Sandeep Raghuwanshi</a></h5></div>    </nav>    
</body>
</html>