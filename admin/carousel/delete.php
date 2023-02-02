<?php
include("../db/db.php");

$id = $_GET['id'];

$deleteQuery = "DELETE FROM tbl_carousel WHERE id = $id";
$conn->query($deleteQuery);

//header('dashboard.php');
echo '<script>
window.location = "?page=dashboard";
</script>';

?>