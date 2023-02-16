<?php
$db = mysqli_connect("localhost", "root", "", "enepal");
$id = $_GET['id'];
$query = "DELETE FROM tbl_contact WHERE id = '$id'";
$result = mysqli_query($db, $query);
 // Redirect to the index page after deleting the record
 echo '<script>
 window.location = "?page=contact";
 </script>';
?>
