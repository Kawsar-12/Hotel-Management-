<?php
include'connect3.php';
$id=$_GET['updateid'];
$sql="Select * from `room details` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$Type=$row['Type'];
$Price=$row['Price'];
$Details=$row['Details'];
$Number=$row['Number'];

if(isset($_POST['submit'])){
  $Type=$_POST['Type'];
  $Price=$_POST['Price'];
  $Details=$_POST['Details'];
  $Number=$_POST['Number'];

$sql="update `room details`set id='$id',Type='$Type',Price='$Price',Details='$Details',Number='$Number'
where id=$id";
$result=mysqli_query($con,$sql);
if($result){
//   echo"data inserted successfully";
header("Location: display3.php");
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
    <meta Type="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>ROOM</title>
  </head>
  <body>
   <div class="container my-5">
   <form method="post">
  <div class="form-group">
    <label >Type</label>
    <input type="text" class="form-control" 
    value="<?php echo $Type ?>"
    name="Type"autocomplete="on">
  </div>
  <div class="form-group">
    <label >Price</label>
    <input type="text" class="form-control" 
    value="<?php echo $Price ?>"name="Price">
  </div>
  <div class="form-group">
    <label >Details</label>
    <input type="text" class="form-control" 
    value="<?php echo $Details ?>"
    name="Details"autocomplete="off">
  </div>
  <div class="form-group">
    <label >Number</label>
    <input type="text" class="form-control" 
    value="<?php echo $Number ?>"
    name="Number"autocomplete="off">
  </div>


  <button type="submit" class="btn btn-primary"name="submit">update</button>
</form>
   </div>

  </body>
</html>