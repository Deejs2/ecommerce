<?php
session_start();
include('../db/db.php');

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `tbl_customer` WHERE `email`='$email' AND `password`='$password'";
    $result = mysqli_query($conn, $sql);

    if (empty($_POST['email']) && empty($_POST['password'])) {
        echo "<script>alert('Please Fill email and Password');</script>";
        exit;
    } elseif (empty($_POST['password'])) {
        echo "<script>alert('Please Fill Password');</script>";
        exit;
    } elseif (empty($_POST['email'])) {
        echo "<script>alert('Please Fill email);</script>";
        exit;
    } else {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $email = $row['email'];
            $password = $row['password'];


            if ($email == $email && $password == $password) {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: ../?page=product-buy');
            }
        } else {
            echo "<h3>Invalid email or Password</h3>";
            echo "<a href='../?page=login-customer'>Go Back</a>";
            exit;
        }
    }

}
?>





