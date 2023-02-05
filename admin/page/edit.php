<?php
$id = $_GET['id'];
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $publish = isset($_POST['publish']) ? 1 : 0;
    $date = date('Y-m-d H:i:s');  // 2022-12-13 07:45:24

    // If you are checking is it working? If not working point out the issue in this query.
//    $insertQuery = "UPDATE tbl_page (title, content, publish, updated_date)
//    VALUES ('$title', '$content', '$publish', '$date') WHERE id = $id";

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

    $updateQuery = "UPDATE tbl_page SET title='$title', content='$content', filename='$filename', publish='$publish', updated_date='$date' WHERE `tbl_page`.`id` = $id";
    $result = $conn->query($updateQuery);

    if ($conn->insert_id) {
        echo "Page updated successfully";
    } else {
        echo $conn->error;
    }

   // header('Location:?page=dashboard'); // Redirect to page list
   echo '<script>
window.location = "?page=dashboard";
</script>';
}

$sql = "SELECT id, title, content,filename, publish FROM tbl_page WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Page</h1>
</div>

<form method="post" action="">
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" required name="title" value="<?php echo $row['title']; ?>"/>
    </div>

    <div class="form-group">
        <label>Content</label>
        <textarea class="form-control" required name="content"><?php echo $row['content']; ?></textarea>
    </div>

    <div class="form-group">
                <input class="form-control" type="file" name="uploadfile" value="<?php echo $row['filename'] ?>" />
            </div>

    <div class="form-group">
        <label>Publish</label>
        <input type="checkbox" name="publish" <?php echo $row['publish'] == 1 ? 'checked' : '' ?> />
    </div>

    <div class="form-group">
        <input type="submit" name="submit" value="Save" class="btn btn-primary"/>
    </div>
</form>