<?php
include("../../db.php");

if(isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $publish = isset($_POST['publish']) ? 1 : 0;
    $date = date('Y-m-d H:i:s');  // 2022-12-13 07:45:24

    $insertQuery = "INSERT INTO tbl_page (title, content, publish, created_date, updated_date) 
    VALUES ('$title', '$content', '$publish', '$date', '$date')";
    $result = $conn->query($insertQuery);

    if($conn->insert_id){
        echo "Page created successfully";
    }else{
        echo $conn->error;
    }

    header('Location:?page=pages&action=list'); // Redirect to page list
}
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Page</h1>
</div>

<form method="post" action="">
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control" required />
    </div>

    <div class="form-group">
        <label>Content</label>
        <textarea name="content" class="form-control" required></textarea>
    </div>

    <div class="form-group">
        <label>Publish</label>
        <input type="checkbox" name="publish" />
    </div>

    <div class="form-group">
        <input type="submit" name="submit" value="Save" class="btn btn-primary" />
    </div>
</form>