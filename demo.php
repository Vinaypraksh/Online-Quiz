
<?php
session_start();

?>
<?php
unset($_SESSION['test']);
?>




<!DOCTYPE html>
<html>
    <head>
       
        <link rel="stylesheet" href="styles/bootstrap.min.css">
        <script src="scripts/jquery-2.1.4.min.js"></script>
        <script src="scripts/bootstrap.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>
    </head>
    
    <body style="margin-top:0;background:white">
      
        <h1  style="color: #787878;text-align:center">Thank You!</h1>
        <div class="container" align="Center" style="background:#F0F0F0;height:400px;margin-top:18px;margin-left:;margin-bottom:15px;box-shadow: 15px 15px 8px #E0E0E0          ;border:2px solid #F0F0F0 ;">
            <h2  style="color:#2196f3;text-align:center"><b>----- RESULT -----</b></h2>
           

           <div class="container" style="margin-top:30px">
            <p style="text-align:center;font-family:source sans pro;font-size:200%">
			Questions Attempted:
			<?php echo $_COOKIE['username']+$_COOKIE['username1'];?> </p>
            <p style="text-align:center;font-family:source sans pro;font-size:200% ">
			Correct:<font color="green">
			<?php echo $_COOKIE['username'];?>
                </font> </p>
            <p style="text-align:center;font-family:source sans pro;font-size:200% ">
			Incorrect:
			<font color="red">
			
			<?php echo $_COOKIE['username1'];?>
			</font>
			</p>
			<p style="text-align:center;font-family:source sans pro;font-size:200% ">
			 Marks: 
			 <font color="blue">
			<?php echo $_COOKIE['username']-0.33*$_COOKIE['username1'];?>

		 </font>
		
			</p>
               <p style="margin-top:60px;color:#2169f3"> Log out after analysing your result.</p>
            </div></div>
    </body>
</html>

