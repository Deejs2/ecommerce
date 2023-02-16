<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
</head>
<body>

	<?php
	// connect to the database
	
	$conn = mysqli_connect("localhost", "root", "", "enepal");
	if(!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}

	// check if the form was submitted
	if(isset($_POST['submit'])){

		// get the form data
		$title = $_POST['title'];
		$content = mysqli_real_escape_string($conn, $_POST['content']);

		// check if the record already exists
		$sql = "SELECT * FROM tbl_about WHERE title = '$title'";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) > 0){

			// if the record exists, update the content
			$row = mysqli_fetch_assoc($result);
			$id = $row['id'];
			$sql = "UPDATE tbl_about SET content = '$content' WHERE id = $id";
			if(mysqli_query($conn, $sql)){
				echo "Content updated successfully.";
			} else {
				echo "Error updating content: " . mysqli_error($conn);
			}

		} else {

			// if the record doesn't exist, insert the new content
			$sql = "INSERT INTO tbl_about (title, content) VALUES ('$title', '$content')";
			if(mysqli_query($conn, $sql)){
				echo "Content added successfully.";
			} else {
				echo "Error adding content: " . mysqli_error($conn);
			}

		}

	}

	// check if a record should be deleted
	if(isset($_GET['delete'])){

		$id = $_GET['delete'];
		$sql = "DELETE FROM tbl_about WHERE id = $id";
		if(mysqli_query($conn, $sql)){
			echo "Content deleted successfully.";
		} else {
			echo "Error deleting content: " . mysqli_error($conn);
		}

	}

	// retrieve the content from the database
	$sql = "SELECT * FROM tbl_about";
	$result = mysqli_query($conn, $sql);

	// display the content
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){

			// display the content
			echo "<h2>".$row["title"]."</h2>";
			echo "<p>".$row["content"]."</p>";

			// display a form for editing or deleting the content
			echo "<form method='post'>";
			echo "<input type='hidden' name='title' value='".$row["title"]."'>";
			echo "<textarea name='content'>".$row["content"]."</textarea>";
			echo "<br>";
			echo "<button type='submit' name='submit'>Save</button>";
			echo "<a href='about.php?delete=".$row["id"]."'>Delete</a>";
			echo "</form>";

			echo "<hr>";

		}
	}

	// display a form for adding new content
	echo "<h2>Add New Content</h2>";
	echo "<form method='post'>";
	echo "<label>Title:</label><br>";
	echo "<input type='text' name='title'><br>";
	echo "<label>Content:</label><br>";
	echo "<textarea name='content'></textarea><br>";
	echo "<button type='submit' name='submit'>Add Content</button>";
	echo "</form>";
	
	// check if a new record should be added
	if(isset($_POST['submit'])){

		// get the form data
		$title = $_POST['title'];
		$content = $_POST['content'];

		// check if the record already exists
		$sql = "SELECT * FROM tbl_about WHERE title = '$title'";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) > 0){
			echo "Error adding content: Record already exists.";
		} else {
			// if the record doesn't exist, insert the new content
			$sql = "INSERT INTO tbl_about (title, content) VALUES ('$title', '$content')";
			if(mysqli_query($conn, $sql)){
				echo "Content added successfully.";
			} else {
				echo "Error adding content: " . mysqli_error($conn);
			}
		}
	}
