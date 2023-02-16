<?php
include('../db/db.php');

if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $work=$_POST['work'];
    $bio=$_POST['bio'];

        //file upload 
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "../customer/profile-pic/" . $filename;
     
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder)) {
            echo "<h3>  Image uploaded successfully!</h3>";
        } else {
            echo "<h3>  Failed to upload image!</h3>";
        }

    $sql   ="INSERT INTO `tbl_customer`(`name`, `email`, `password`, `gender`, `address`,`filename`,`work`,`bio`) VALUES ('$name','$email','$pass','$gender','$address','$filename','$work','$bio')";
    $result=mysqli_query($conn,$sql);
    if($result){ 
    echo"<script>alert('New User Register Success');</script>";   
    header('location:../?page=login-customer');
    
    }else{
        die(mysqli_error($conn)) ;
    }
   
}
