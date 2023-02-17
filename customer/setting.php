<?php
$id = $_GET['id'];
if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $work=$_POST['work'];
    $bio=$_POST['bio'];
    
    //file upload 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "profile-pic/" . $filename;
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }

    $updateQuery = "UPDATE tbl_customer SET name='$name', filename='$filename', email='$email', password='$pass', gender='$gender', address='$address', work='$work', bio='$bio' WHERE id = $id";
    $result = $conn->query($updateQuery);

    if ($conn->insert_id) {
        echo "Page updated successfully";
    } else {
        echo $conn->error;
    }

   // header('Location:?page=dashboard'); // Redirect to page list
   echo '<script>
window.location = "?page=profile";
</script>';
}

$sql = $sql = "SELECT id, name, filename, email, password, gender, address,work, bio FROM tbl_customer WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Profile Setting</h1>
</div>

<form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" required name="name" value="<?php echo $row['name']; ?>"/>
    </div>

    <div class="form-group">
                <input class="form-control" type="file" name="uploadfile"  value="<?php echo $row['filename']; ?>" />
            </div>

    <div class="form-group">
        <label>Email</label>
        <textarea class="form-control" required name="email"><?php echo $row['email']; ?></textarea>
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="text" class="form-control" required name="password" value="<?php echo $row['password']; ?>"/>
    </div>

    <div class="form-group">
        <label>Gender</label>
        <input type="text" class="form-control" required name="gender" value="<?php echo $row['gender']; ?>"/>
    </div>

    <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>"/>
    </div>

    <div class="form-group">
        <label>Work</label>
        <input type="text" class="form-control" required name="work" value="<?php echo $row['work']; ?>"/>
    </div>

    <div class="form-group">
        <label>Bio</label>
        <input type="text" class="form-control" required name="bio" value="<?php echo $row['bio']; ?>"/>
    </div>

    <div class="form-group">
        <input type="submit" name="edit" value="saves changes" class="btn btn-primary"/>
    </div>
</form>