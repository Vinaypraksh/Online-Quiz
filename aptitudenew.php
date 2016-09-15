
<?php
// Start the session
session_start();
$_SESSION["correct"]=0;
?>

<?php

 

if(isset($_SESSION['test'])) {
	$_SESSION['a']=1;
		
}   else{
    unset($_SESSION['a']);
    header('Location:aptiresult.php');
} 

?>
<script>
window.onbeforeunload = function() {
        return "are you sure you want to leave? your all answered will be destroyed!";
    }
</script>
<script type="text/javascript">
    function clicked() {
       if (confirm('Do you wanna to submit?')) {
           yourformelement.submit();
       } else {
           return false;
       }
    }
</script>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mocktest";
$i=0;
$quest=array();
$opta=array();
$optb=array();
$optc=array();
$optd=array();
$correct=array();
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM aptitude ORDER BY RAND()";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
     $i=$i+1;
         
    
    $quest[$i]=$row["ques"];
    $opta[$i]=$row["a"];
    $optb[$i]=$row["b"];
    $optc[$i]=$row["c"];
    $optd[$i]=$row["d"];
        $correct[$i]=$row["correct"];
        
    
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 
<script>
  $('#btnNext').click(function(){
  $('.nav-tabs > .active').next('li').find('a').trigger('click');
});

  $('#btnPrevious').click(function(){
  $('.nav-tabs > .active').prev('li').find('a').trigger('click');
});
</script>

<!DOCTYPE html>

<html>

<head>

<title></title>

      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="ChunkFive_400.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('h1',{ textShadow: '1px 1px #000'});
			Cufon.replace('h2',{ textShadow: '1px 1px #000'});
			Cufon.replace('.footer',{ textShadow: '1px 1px #000'});
			Cufon.replace('.pxs_loading',{ textShadow: '1px 1px #000'});
		</script>
</head>

<body  style="margin-top:0;background:;" >

   
    

   

    

    

  <div class="col-md-9">  

<div class="container-fluid " style="margin-top:20;">







 

<!-- questions -->
<ul class="nav nav-tabs" role="tablist">
 <li class="active"><a href="#q11" role="tab" data-toggle="tab">1</a></li>
    <li><a href="#q12" role="tab" data-toggle="tab">2</a></li>
    <li><a href="#q13" role="tab" data-toggle="tab">3</a></li>
    <li><a href="#q14" role="tab" data-toggle="tab">4</a></li>
    <li><a href="#q15" role="tab" data-toggle="tab">5</a></li>
    <li><a href="#q16" role="tab" data-toggle="tab">6</a></li>
    <li><a href="#q17" role="tab" data-toggle="tab">7</a></li>
    <li><a href="#q18" role="tab" data-toggle="tab">8</a></li>
    <li><a href="#q19" role="tab" data-toggle="tab">9</a></li>
    <li><a href="#q20" role="tab" data-toggle="tab">10</a></li>
    <li><a href="#q11" role="tab" data-toggle="tab">11</a></li>
    <li><a href="#q12" role="tab" data-toggle="tab">12</a></li>
    <li><a href="#q13" role="tab" data-toggle="tab">13</a></li>
    <li><a href="#q14" role="tab" data-toggle="tab">14</a></li>
    <li><a href="#q15" role="tab" data-toggle="tab">15</a></li>
    <li><a href="#q16" role="tab" data-toggle="tab">16</a></li>
    <li><a href="#q17" role="tab" data-toggle="tab">17</a></li>
    <li><a href="#q18" role="tab" data-toggle="tab">18</a></li>
    <li><a href="#q19" role="tab" data-toggle="tab">19</a></li>
    <li><a href="#q20" role="tab" data-toggle="tab">20</a></li>
    <li><a href="#q11" role="tab" data-toggle="tab">21</a></li>
    <li><a href="#q12" role="tab" data-toggle="tab">22</a></li>
    <li><a href="#q13" role="tab" data-toggle="tab">23</a></li>
    <li><a href="#q14" role="tab" data-toggle="tab">24</a></li>
    <li><a href="#q15" role="tab" data-toggle="tab">25</a></li>
    <li><a href="#q16" role="tab" data-toggle="tab">26</a></li>
    <li><a href="#q17" role="tab" data-toggle="tab">27</a></li>
    <li><a href="#q18" role="tab" data-toggle="tab">28</a></li>
    <li><a href="#q19" role="tab" data-toggle="tab">29</a></li>
    <li><a href="#q20" role="tab" data-toggle="tab">30</a></li>
</ul>
 
<!-- questons  Content -->
 



       

     
    
        <!--  end first section-->
   </div></div>
    
        <!--  end first section-->
     <div class="col-md-1"> </svg>
    <svg height="400" width="2">
        <line x1="0" y1="0" x2="0" y2="400" style="stroke:#2196f3;stroke-width:2" /></svg></div>
     
   <div class="col-md-2" style="text-align:center;background:black;color:white;width:200px;height:100px;box-shadow: 4px 4px 5px lightgray;margin-top:20px;">
    
       <h1> <!--timer-->
<?php

$timestamp = time();
$diff = 30; //<-Time of countdown in seconds.  ie. 3600 = 1 hr. or 86400 = 1 day.

//MODIFICATION BELOW THIS LINE IS NOT REQUIRED.
$hld_diff = $diff;
if(isset($_SESSION['ts'])) {
	$slice = ($timestamp - $_SESSION['ts']);	
	$diff = $diff - $slice;
}

if(!isset($_SESSION['ts']) || $diff > $hld_diff || $diff < 0) {
	$diff = $hld_diff;
	$_SESSION['ts'] = $timestamp;
}

//Below is demonstration of output.  Seconds could be passed to Javascript.
$diff; //$diff holds seconds less than 3600 (1 hour);

$hours = floor($diff / 3600) . ' : ';
$diff = $diff % 3600;
$minutes = floor($diff / 60) . ' : ';
$diff = $diff % 60;
$seconds = $diff;


?>
            <p id="strclock"></p>
<script type="text/javascript">
 var hour = <?php echo floor($hours); ?>;
 var min = <?php echo floor($minutes); ?>;
 var sec = <?php echo floor($seconds); ?>;

function countdown() {
 if(sec <= 0 && min > 0) {
  sec = 59;
  min -= 1;
 }
 else if(min <= 0 && sec <= 0) {
  min = 0;
  sec = 0;
 }
 else {
  sec -= 1;
 }
 
 if(min <= 0 && hour > 0) {
  min = 59;
  hour -= 1;
 }
 
 var pat = /^[0-9]{1}$/;
 sec = (pat.test(sec) == true) ? '0'+sec : sec;
 min = (pat.test(min) == true) ? '0'+min : min;
 hour = (pat.test(hour) == true) ? '0'+hour : hour;
 
 document.getElementById('strclock').innerHTML = hour+":"+min+":"+sec;
    if(min==0&&sec==0)
    {
document.myForm.mySubmit.click();
       
    }
 setTimeout("countdown()",1000);
 }
 countdown();
</script>
       <!-- end  timer--> </h1>
       <div class="col-md-12" style="margin-top:250px;width:100px;background-color:#2196f3;color:black">
           <input type="submit"  onclick="clicked()" name="mySubmit" value="submit"></div>
        </form>
    </div>
        


</body>

    </html>