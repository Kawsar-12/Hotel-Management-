<?php
include'connectm.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `customer1` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo"delete success";
        header('location:displaym.php'); 
    }else{
        die(mysqli_error($con));
    }
}