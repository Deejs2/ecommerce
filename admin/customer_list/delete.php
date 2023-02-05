<?php
include("../db/db.php");

$id = $_GET['id'];

$deleteQuery = "DELETE FROM tbl_customer WHERE id = $id";
$conn->query($deleteQuery);

header('Location:?page=pages&action=list');

?>