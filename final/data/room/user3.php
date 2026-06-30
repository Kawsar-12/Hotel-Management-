<?php
include'connect3.php';
if(isset($_POST['submit'])){
  $Type=$_POST['Type'];
  $Price=$_POST['Price'];
  $Details=$_POST['Details'];
  $Number=$_POST['Number'];

  echo $Type, $Price;

$sql="insert into`room details`(Type,Price,Details,Number)
values('$Type','$Price','$Details','$Number')";
$result=mysqli_query($con,$sql);
if($result){
  // echo"data inserted successfully";
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
   <form method="POST">
  <div class="form-group">
    <label >Type</label>
    <input type="text" class="form-control" 
    placeholder="Enter your Type"
    name="Type"autocomplete="off" required>
  </div>
  <div class="form-group">
    <label >Price</label>
    <input type="text" class="form-control" 
    placeholder="Enter your Price"name="Price" required>
  </div>
  <div class="form-group">
    <label >Details</label>
    <input type="text" class="form-control" 
    placeholder="Enter your Details "
    name="Details"autocomplete="off" required>
  </div>
  <div class="form-group">
    <label >Number</label>
    <input type="text" class="form-control" 
    placeholder="Enter your Number"
    name="Number"autocomplete="off" required>
  </div>


  <button type="submit" class="btn btn-primary"name="submit">Submit</button>
</form>
   </div>

  </body>
</html>