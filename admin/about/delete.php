<?php
include("../db/db.php");

$id = $_GET['id'];

$deleteQuery = "DELETE FROM tbl_about WHERE id = $id";
$conn->query($deleteQuery);

//header('about.php');
echo '<script>
window.location = "?page=about";
</script>';

?>