<?php
include'connect3.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `room details` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo"delete success";
        header('location:display3.php'); 
    }else{
        die(mysqli_error($con));
    }
}