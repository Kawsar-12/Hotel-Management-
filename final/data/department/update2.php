<?php
include'connect2.php';
$id=$_GET['updateid'];
$sql="Select * from `crudd` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['Name'];
$Budget=$row['Budget'];
$people=$row['people'];
$password=$row['password'];

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $Budget=$_POST['Budget'];
  $people=$_POST['people'];
  $password=$_POST['password'];

$sql="update `crudd`set id='$id',Name='$name',Budget='$Budget',people='$people',password='$password'
where id=$id";
$result=mysqli_query($con,$sql);
if($result){
//   echo"data inserted successfully";
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

    <title>employe</title>
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
    <label >Budget</label>
    <input type="text" class="form-control" 
    value="<?php echo $Budget ?>"name="Budget">
  </div>
  <div class="form-group">
    <label >people</label>
    <input type="text" class="form-control" 
    value="<?php echo $people ?>"
    name="people"autocomplete="off">
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