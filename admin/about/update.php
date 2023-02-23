
<?php
$id = $_GET['id'];
if(isset($_POST['submit'])) {
    $adminName = $_POST['adminName'];
	$email = $_POST['email'];
    $post = $_POST['post'];
    $work = $_POST['work'];
    
        //file upload 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "about/img/" . $filename;
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }

    $updateQuery = "UPDATE tbl_about SET adminName='$adminName', email='$email', post='$post', filename='$filename', work='$work' WHERE id = $id";
    $result = $conn->query($updateQuery);

    if ($conn->insert_id) {
        echo "Page updated successfully";
    } else {
        echo $conn->error;
    }



    // Redirect to page list
    echo '<script>
window.location = "?page=about";
</script>';
}

$sql = "SELECT id, adminName,email, post,filename, work FROM tbl_about WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Team Member</h1>
</div>

<form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
        <label>Admin Name</label>
        <input type="text" name="adminName" class="form-control" value="<?php echo $row['adminName'];?>" required />
    </div>

	<div class="form-group">
        <input class="form-control" type="file" name="uploadfile" value="<?php echo $row['filename'];?>" />
    </div>

	<div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo $row['email'];?>" required />
    </div>

	<div class="form-group">
        <label>Post</label>
        <input type="text" name="post" class="form-control" value="<?php echo $row['post'];?>" required />
    </div>

	<div class="form-group">
        <label>Work</label>
        <input type="text" name="work" class="form-control" value="<?php echo $row['work'];?>" required />
    </div>


    <div class="form-group">
        <input type="submit" name="submit" value="Save" class="btn btn-primary" />
    </div>
</form>