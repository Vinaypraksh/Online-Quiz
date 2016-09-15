<!DOCTYPE html>
<html>
<head>
       <link rel="stylesheet" href="bootstrap/styles/bootstrap.min.css">
       <script src="bootstrap/scripts/jquery-2.1.4.min.js"></script>
       <script src="bootstrap/scripts/bootstrap.min.js"></script>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','mocktest');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"mocktest");
$sql="SELECT ques,a,b,c,d,correct FROM aptitude WHERE qno = '".$q."'";
$result = mysqli_query($con,$sql);

  while($row = mysqli_fetch_array($result)) 
{
echo '<br><h4><div>'.$row["ques"].'<br><br>

    <div class="radio">
  <label><input type="radio" name="sachin" value="1">'.$row["a"].'</label>
</div>
    <div class="radio">
  <label><input type="radio"  name="sachin" value="2" >'.$row["b"].'</label>
</div>
    <div class="radio">
  <label><input type="radio" name="sachin"  value="3">'.$row["c"].'</label>
</div>
    <div class="radio">
  <label><input type="radio" name="sachin"  value="4" >'.$row["d"].'</label>
</div></h4>

</div>
<br>
<input type="submit" class="btn btn-success" value="save" onclick="sac('.$row["correct"].','.$q.');">
<br>
 ';
 
 
 
 
}
mysqli_close($con);
?>
</body>
</html>