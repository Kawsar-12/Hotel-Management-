<?php
include'connect3.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta Type="viewport" content="width=device-width, initial-scale=1.0">
    <title>room</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    
</head>
<body>
    <div class="m-1 p-1 bg-primary text-center text-white ">
        ROOM
    </div>
<div class="container">
    <button class="btn btn-primary my-5"><a href="user3.php"class="text-light">add user</a>

    </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Type</th>
      <th scope="col">Price</th>
      <th scope="col">Details</th>
      <th scope="col">Number</th>
      <th scope="col">operation</th>
    </tr>
  </thead>
  <tbody>
<?php

$sql="select * from`room details`";
$result=mysqli_query($con,$sql);
if($result){
   while($row= mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $Type=$row['Type'];
    $Price=$row['Price'];
    $Details=$row['Details'];
    $Number=$row['Number'];
    echo'<tr>
    <th scope="row"> '.$id.'</th>
    <td>'.$Type.'</td>
    <td>'.$Price.'</td>
    <td>'.$Details.'</td>
    <td>'.$Number.'</td>
    <td>
    <button class="btn btn-danger"> <a href="delete3.php?deleteid='.$id.'"class="text-light">Delete</a></button>
    <button class="btn btn-primary"><a href="update3.php?updateid='.$id.'"class="text-light">Update</a></button>
</td>
     </tr>';
   }
}

?>

  </tbody>
  
</table>

</div> 

</body>
</html>