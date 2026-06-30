<?php
include'connect5.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `me` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo"delete success";
        header('location:display5.php'); 
    }else{
        die(mysqli_error($con));
    }
}