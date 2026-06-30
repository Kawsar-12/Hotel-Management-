<?php
include'connect4.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>service</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    
</head>
<body>
    <div class="m-1 p-1 bg-primary text-center text-white ">
      SERVICE
    </div>
<div class="container">
    <button class="btn btn-primary my-5"><a href="user4.php"class="text-light">add user</a>

    </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">OPENTIME</th>
      <th scope="col">CLOSETIME</th>
      <th scope="col">DETAILS</th>
      <th scope="col">operation</th>
    </tr>
  </thead>
  <tbody>
<?php

$sql="select * from`service`";
$result=mysqli_query($con,$sql);
if($result){
   while($row= mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $OPENTIME=$row['OPENTIME'];
    $CLOSETIME=$row['CLOSETIME'];
    $DETAILS=$row['DETAILS'];
    echo'<tr>
    <th scope="row"> '.$id.'</th>
    <td>'.$OPENTIME.'</td>
    <td>'.$CLOSETIME.'</td>
    <td>'.$DETAILS.'</td>
    <td>
    <button class="btn btn-danger"> <a href="delete4.php?deleteid='.$id.'"class="text-light">Delete</a></button>
    <button class="btn btn-primary"><a href="update4.php?updateid='.$id.'"class="text-light">Update</a></button>
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