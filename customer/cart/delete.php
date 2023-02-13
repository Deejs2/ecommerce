<?php

$id = $_GET['id'];

$deleteQuery = "DELETE FROM tbl_cart WHERE id = $id";
$conn->query($deleteQuery);

//header('dashboard.php');
echo '<script>
window.location = "?page=cart";
</script>';

?>