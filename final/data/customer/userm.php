<?php
include'connectm.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  echo $name, $email;

$sql="insert into`customer1`(name,email,mobile,pass)
values('$name','$email','$mobile','$password')";
$result=mysqli_query($con,$sql);
if($result){
  // echo"data inserted successfully";
  header("Location: displaym.php");
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

    <title>customer</title>
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
    <label >email</label>
    <input type="text" class="form-control" 
    placeholder="Enter your email"name="email" required>
  </div>
  <div class="form-group">
    <label >mobile</label>
    <input type="text" class="form-control" 
    placeholder="Enter your mobile number"
    name="mobile"autocomplete="off" required>
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