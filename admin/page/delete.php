<?php
include("../../db.php");

$id = $_GET['id'];

$deleteQuery = "DELETE FROM tbl_page WHERE id = $id";
$conn->query($deleteQuery);

header('Location:?page=pages&action=list');

?>