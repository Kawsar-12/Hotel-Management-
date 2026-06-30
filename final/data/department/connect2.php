<?php
$con=new mysqli('localhost','root','','tablecrud');

if(!$con){ 
    die(mysqli_error($con));
}
?>