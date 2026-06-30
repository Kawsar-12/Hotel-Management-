<?php
include'connect2.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `crudd` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo"delete success";
        header('location:display2.php'); 
    }else{
        die(mysqli_error($con));
    }
}