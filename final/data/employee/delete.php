<?php
include'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `you` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo"delete success";
        header('location:display.php'); 
    }else{
        die(mysqli_error($con));
    }
}