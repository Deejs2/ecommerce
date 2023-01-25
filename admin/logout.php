<?php
session_destroy();
//header('Location:../?page=login');
echo '<script>
window.location = "../?page=login";
</script>';
?>