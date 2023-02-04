<?php
include('../db/db.php');

if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];

    $sql   ="INSERT INTO `tbl_customer`(`name`, `email`, `password`) VALUES ('$name','$email','$pass')";
    $result=mysqli_query($conn,$sql);
    if($result){ 
    echo"<script>alert('New User Register Success');</script>";   
    header('location:../?page=login-customer');
    
    }else{
        die(mysqli_error($conn)) ;
    }
   
}
