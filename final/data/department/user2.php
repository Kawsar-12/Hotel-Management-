<?php
include'connect2.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $Budget=$_POST['Budget'];
  $people=$_POST['people'];
  $password=$_POST['password'];

  echo $name, $Budget;

$sql="insert into`crudd`(name,Budget,people,password)
values('$name','$Budget','$people','$password')";
$result=mysqli_query($con,$sql);
if($result){
  // echo"data inserted successfully";
  header("Location: display2.php");
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

    <title>Department</title>
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
    <label >Budget</label>
    <input type="text" class="form-control" 
    placeholder="Enter your Budget "name="Budget" required>
  </div>
  <div class="form-group">
    <label >people</label>
    <input type="text" class="form-control" 
    placeholder="Enter your people"
    name="people"autocomplete="off" required>
  </div>
  <div class="form-group">
    <label >password</label>
    <input type="text" class="form-control" 
    placeholder="Enter your password"
    name="password"autocomplete="off" required>
  </div>


  <button type="submit" class="btn btn-primary"name="submit">Submit</button>
</form>
   </div>

  </body>
</html>