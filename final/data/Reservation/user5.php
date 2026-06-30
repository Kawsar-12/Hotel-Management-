<?php
include'connect5.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $address=$_POST['address'];
  $mobile=$_POST['mobile'];
  $checkin=$_POST['checkin'];

  echo $name, $address;

$sql="insert into`me`(name,address,mobile,checkin)
values('$name','$address','$mobile','$checkin')";
$result=mysqli_query($con,$sql);
if($result){
  // echo"data inserted successfully";
  header("Location: display5.php");
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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Reservation</title>
  </head>
  <body>
   <div class="container my-5">
   <form method="POST">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" 
    placeholder="Enter your name"
    name="name"autocomplete="off" required>
  </div>
  <div class="form-group">
    <label >address</label>
    <input type="text" class="form-control" 
    placeholder="Enter your address"name="address" required>
  </div>
  <div class="form-group">
    <label >mobile</label>
    <input type="text" class="form-control" 
    placeholder="Enter your mobile number"
    name="mobile"autocomplete="off" required>
  </div>
  <div class="form-group">
    <label >checkin</label>
    <input type="text" class="form-control" 
    placeholder="checkin date"
    name="checkin"autocomplete="off" required>
  </div>


  <button type="submit" class="btn btn-primary"name="submit">Submit</button>
</form>
   </div>

  </body>
</html>