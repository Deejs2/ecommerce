<?php

if(isset($_POST['submit'])) {
    $title = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $content = $_POST['content'];
    $publish = isset($_POST['publish']) ? 1 : 0;
    $date = date('Y-m-d H:i:s');  // 2022-12-13 07:45:24
    
        //file upload 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "uploaded_img/" . $filename;
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }

    $insertQuery = "INSERT INTO tbl_article (filename,title,sub_title, content, publish, created_date, updated_date) 
    VALUES ('$filename','$title','$sub_title', '$content', '$publish', '$date', '$date')";
    $result = $conn->query($insertQuery);

    if($conn->insert_id){
        echo "Page created successfully";
    }else{
        echo $conn->error;
    }



    //header('Location:http://localhost/e-commerce/admin/?page=dashboard'); // Redirect to page list
    echo '<script>
window.location = "?page=dashboard";
</script>';
}
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Page</h1>
</div>

<form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control" required />
    </div>

    <div class="form-group">
        <label>Sub-title</label>
        <input type="text" name="sub_title" class="form-control" required />
    </div>

    <div class="form-group">
        <label>Content</label>
        <textarea name="content" class="form-control" required></textarea>
    </div>

    <div class="form-group">
                <input class="form-control" type="file" name="uploadfile" value="" />
            </div>

    <div class="form-group">
        <label>Publish</label>
        <input type="checkbox" name="publish" />
    </div>

    <div class="form-group">
        <input type="submit" name="submit" value="Save" class="btn btn-primary" />
    </div>
</form>