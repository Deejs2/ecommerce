<?php

$fistname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$message= $_POST["message"];
$conn = mysqli_connect("localhost", "root", "", "enepal") or die("connection failed");
$sql = "INSERT INTO tbl_contact(fname, lname, email, mobile, message) VALUES ('{$fistname}','{$lastname}','{$email}','{$mobile}' ,'{$message}')";
$result = mysqli_query($conn, $sql) or die("Query Failed!");

mysqli_close($conn);
?>

