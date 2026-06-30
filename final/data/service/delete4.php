<?php
include'connect4.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `service` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo"delete success";
        header('location:display4.php'); 
    }else{
        die(mysqli_error($con));
    }
}