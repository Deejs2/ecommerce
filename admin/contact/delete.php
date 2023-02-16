<?php
$db = mysqli_connect("localhost", "root", "", "enepal");
$id = $_GET['id'];
$query = "DELETE FROM tbl_contact WHERE id = '$id'";
$result = mysqli_query($db, $query);
header("Location: contact.php"); // Redirect to the index page after deleting the record
?>
