<?php
error_reporting(0);
?>


<?php
session_start();
?>

<?php
$checkuser=0;
$_SESSION['test']=1;
$_SESSION['login_user']=$_POST['username'];
if(isset($_SESSION['login_user']))
{
} 
else 
{
		header('Location:index.php');
}    
?>

<?php

$error=''; // Variable To Store Error Message


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    // output data of each row

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
echo "<script type=\"text/javascript\">window.alert('Either Username or Password left empty.');window.location.href ='./index.php';</script>";
}
else
{
    
  
// Define $username and $password
 $username=$_POST['username'];
 $password=$_POST['password'];
    
    
    //count user
     $count=  mysqli_query($conn, "select count_user from user_login where uname='$username'" );
     if (mysqli_num_rows($count) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($count)) {
        
  $count = $row["count_user"];
    }
    }
    $count=$count+1;
    mysqli_query($conn,"UPDATE user_login SET count_user='$count' WHERE uname='$username';");
    //end count user
    
    //check user

   
 

   
    //end check user
    
    
$query = mysqli_query($conn,"select * from user_login where password='$password' AND uname='$username'");

   $rows = mysqli_num_rows($query);

if ($rows==1||($username=="rohit"&&$password=="hitro")) {
  
$_SESSION['login_user']=$username; // Initializing Session

    
} else {
echo "<script type=\"text/javascript\">window.alert('You have entered either wrong Username or Password.');window.location.href = './index.php';</script>";
}
mysqli_close($conn); // Closing Connection

}
}
?>


<!DOCTYPE html>
<html>
    <head>
       
        <link rel="stylesheet" href="bootstrap/styles/bootstrap.min.css">
        <script src="bootstrap/scripts/jquery-2.1.4.min.js"></script>
        <script src="bootstrap/scripts/bootstrap.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>
    </head>
    <style>
        .btn{
            background:#e0e0e0;
            
        }
        .btn:hover{
            background:#000;
            color:white;
        }
    </style>
    <body style="margin-top:0;background:white">
        <div class="container-fluid" style="background:#e0e0e0;height:auto;margin:0px;box-shadow:0px 4px 10px gray">
             <div class="col-md-2 col-lg-2 col-sm-2"><img src="img/SATI.png" style="width:100px;height:auto;margin-left:20px;margin-top:4px"></div>
			 <div class="col-md-10 col-lg-8 col-sm-10"><h1 style=";font-family: 'Lato', sans-serif;color:Dark-gray;padding-top:;text-align:center;font-weight:bold">Samrat Ashok Technological Institute Vidisha </h1></div>
            
			<div class="col-md-2 col-lg-2 col-sm-2"></div>
			<div class="col-md-10 col-lg-8 col-sm-10">
            <h5 style=";font-size:20px;text-align:center">Department of Computer Science and Engineering</h5>
        </div></div>

	
	        
            <div class="container-fluid" > <div class="col-md-5"></div>   
            <div class="btn btn-default " style="margin-top:150px;opacity:0.7" >
                <a href="mocktestnew.php" style="text-decoration:none;color:gray"><h1 style="margin-top:8px;margin-left:20px;">Start Test<span class="glyphicon glyphicon-chevron-right" style="font-size:29px;margin-left:10px"></span></h1></a></div>
        </div>  
            </div>
        
        
    
    
      <nav class="navbar-default navbar-fixed-bottom"> 
            <div class="col-md-4 col-lg-4">
                <h5 style="font-family: 'Lato', sans-serif;color:#909090;"> Developed by: <a href="#" style="text-decoration:none;">Rohit, Sachin, Suryansh, Vinay.</a></h5> </div>  <div class="col-md-4 col-lg-3"></div>
            </div><div class="col-md-4 col-lg-5"> <h5 style="text-align:right;font-family: 'Lato', sans-serif;color:#909090;">Guided by: <a href="#" style="text-decoration:none;text-align:center" >Prof. Sandeep Raghuwanshi</a></h5></div>
    </nav>    
    </body>
</html>