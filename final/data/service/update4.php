<?php
include'connect4.php';
$id=$_GET['updateid'];
$sql="Select * from `service` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$OPENTIME=$row['OPENTIME'];
$CLOSETIME=$row['CLOSETIME'];
$DETAILS=$row['DETAILS'];


if(isset($_POST['submit'])){
  $op=$_POST['OPENTIME2'];
  $CLOSETIME=$_POST['CLOSETIME'];
  $DETAILS=$_POST['DETAILS'];
  echo $op;

$sql="UPDATE `service` SET `OPENTIME`='$op',`CLOSETIME`='$CLOSETIME',`DETAILS`='$DETAILS' WHERE  `id`='$id'";
$result=mysqli_query($con,$sql);
if($result){
   //echo"data inserted successfully";
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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>service</title>
  </head>
  <body>
   <div class="container my-5">
   <form method="post">
  <div class="form-group">
    <label >OPENTIME</label>
    <input type="time" class="form-control" 
    value="<?php echo $OPENTIME ?>"
    name="OPENTIME2"autocomplete="on">
  </div>
  <div class="form-group">
    <label >CLOSETIME</label>
    <input type="time" class="form-control" 
    value="<?php echo $CLOSETIME ?>"name="CLOSETIME">
  </div>
  <div class="form-group">
    <label >DETAILS</label>
    <input type="text" class="form-control" 
    value="<?php echo $DETAILS ?>"
    name="DETAILS"autocomplete="off">
  </div>
  <button type="submit" class="btn btn-primary"name="submit">update</button>
</form>
   </div>

  </body>
</html>