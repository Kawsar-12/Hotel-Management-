<?php
include'connect5.php';
$id=$_GET['updateid'];
$sql="Select * from `me` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$address=$row['address'];
$mobile=$row['mobile'];
$checkin=$row['checkin'];

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $address=$_POST['address'];
  $mobile=$_POST['mobile'];
  $checkin=$_POST['checkin'];

$sql="update `me`set id='$id',name='$name',address='$address',mobile='$mobile',checkin='$checkin'
where id=$id";
$result=mysqli_query($con,$sql);
if($result){
//   echo"data inserted successfully";
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
   <form method="post">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" 
    value="<?php echo $name ?>"
    name="name"autocomplete="on">
  </div>
  <div class="form-group">
    <label >address</label>
    <input type="text" class="form-control" 
    value="<?php echo $address ?>"name="address">
  </div>
  <div class="form-group">
    <label >mobile</label>
    <input type="text" class="form-control" 
    value="<?php echo $mobile ?>"
    name="mobile"autocomplete="off">
  </div>
  <div class="form-group">
    <label >checkin</label>
    <input type="text" class="form-control" 
    value="<?php echo $checkin ?>"
    name="checkin"autocomplete="off">
  </div>


  <button type="submit" class="btn btn-primary"name="submit">update</button>
</form>
   </div>

  </body>
</html>