<style>
	td, th, table{
		border: 1px solid black;
	}
</style>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">About Page</h1>
</div>

<?php
	$sql = "SELECT title, content FROM tbl_about";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
?>
	<div style="text-align: center;">
		<h1><?php echo $row['title'] ?></h1>
		<p><?php echo $row['content'] ?></p>
	</div>

<div class="row">
	
    <div class="col-12">
            <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Admin Name</th>
				<th>Email</th>
                <th>Post</th>
                <th>Work</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
		<?php
			$sql = "SELECT id, filename, adminName, email, post, work FROM tbl_about";
			$result = $conn->query($sql);
		?>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><img src="about/img/<?php echo $row['filename'] ?>" height="100" alt=""></td>
                    <td><?php echo $row['adminName'] ?></td>
					<td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['post'] ?></td>
					<td><?php echo $row['work'] ?></td>
                    <td>
                        <a href="?page=article&action=edit&id=<?php echo $row['id'] ?>">Edit</a>
                        <a href="?page=article&action=delete&id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                    
                </tr>
            <?php
                }
            }
            ?>
        </tbody>
      </table>
    </div>

	<?php

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

    $insertQuery = "INSERT INTO tbl_about (filename, adminName, email, post, work) 
    VALUES ('$filename','$adminName','$email','$post', '$work')";
    $result = $conn->query($insertQuery);

    if($conn->insert_id){
        echo "Page created successfully";
    }else{
        echo $conn->error;
    }



    // Redirect to page list
    echo '<script>
window.location = "?page=about";
</script>';
}
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add Team Member</h1>
</div>

<form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
        <label>Admin Name</label>
        <input type="text" name="adminName" class="form-control" required />
    </div>

	<div class="form-group">
        <input class="form-control" type="file" name="uploadfile" value="" />
    </div>

	<div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" required />
    </div>

	<div class="form-group">
        <label>Post</label>
        <input type="text" name="post" class="form-control" required />
    </div>

	<div class="form-group">
        <label>Work</label>
        <input type="text" name="work" class="form-control" required />
    </div>


    <div class="form-group">
        <input type="submit" name="submit" value="Save" class="btn btn-primary" />
    </div>
</form>