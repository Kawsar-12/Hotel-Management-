<?php
include'connect4.php';
if(isset($_POST['submit'])){
  echo "insert";
  $OPENTIME=$_POST['OPENTIME'];
  $CLOSETIME=$_POST['CLOSETIME'];
  $DETAILS=$_POST['DETAILS'];
  

  echo $OPENTIME, $CLOSETIME;

$sql="insert into`service`(OPENTIME,CLOSETIME,DETAILS)
values('$OPENTIME','$CLOSETIME','$DETAILS')";
$result=mysqli_query($con,$sql);
if($result){
  echo"data inserted successfully";
  header("Location: display4.php");
}else{
  die(mysqli_error($con));
}


}



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta OPENTIME="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>service</title>
  </head>
  <body>
   <div class="container my-5">
   <form method="POST">
  <div class="form-group">
    <label >OPENTIME</label>
    <input type="time" class="form-control" 
    placeholder="Enter your OPENTIME"
    name="OPENTIME"autocomplete="off" required>
  </div>
  <div class="form-group">
    <label >CLOSETIME</label>
    <label > o< lable> 
    
    <input type="time" class="form-control" 
    placeholder="Enter your CLOSETIME"name="CLOSETIME" required>
  </div>
  <div class="form-group">
    <label >DETAILS</label>
    <input type="text" class="form-control" 
    placeholder="Enter your DETAILS"
    name="DETAILS"autocomplete="off" required>
  </div>
  


  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
   </div>

  </body>
</html>