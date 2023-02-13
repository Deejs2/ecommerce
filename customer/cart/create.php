<?php

$id=$_GET['id'];
$title=$_GET['title'];

$insertQuery = "INSERT INTO tbl_cart (filename,title, content) 
    VALUES ('$filename','$title', '$content')";
    $result = $conn->query($insertQuery);

    if($conn->insert_id){
        echo "Page created successfully";
    }else{
        echo $conn->error;
    }

    //header('Location:http://localhost/e-commerce/admin/?page=dashboard'); // Redirect to page list
    echo '<script>
window.location = "?page=product";
</script>';

?>