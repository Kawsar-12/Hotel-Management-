<?php
include'connectm.php';
$id=$_GET['updateid'];
$sql="Select * from `customer1` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['pass'];

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

$sql="update `customer1`set id='$id',name='$name',email='$email',mobile='$mobile',pass='$password'
where id=$id";
$result=mysqli_query($con,$sql);
if($result){
//   echo"data inserted successfully";
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
   <form method="post">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" 
    value="<?php echo $name ?>"
    name="name"autocomplete="on">
  </div>
  <div class="form-group">
    <label >email</label>
    <input type="text" class="form-control" 
    value="<?php echo $email ?>"name="email">
  </div>
  <div class="form-group">
    <label >mobile</label>
    <input type="text" class="form-control" 
    value="<?php echo $mobile ?>"
    name="mobile"autocomplete="off">
  </div>
  <div class="form-group">
    <label >password</label>
    <input type="text" class="form-control" 
    value="<?php echo $password ?>"
    name="password"autocomplete="off">
  </div>


  <button type="submit" class="btn btn-primary"name="submit">update</button>
</form>
   </div>

  </body>
</html>