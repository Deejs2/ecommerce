<main>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="container-xl" style="text-align: center;">
	<?php
	// connect to the database
	
	$conn = mysqli_connect("localhost", "root", "", "enepal");
	if(!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}
  
	// retrieve the content from the database
	$sql = "SELECT * FROM tbl_about";
	$result = mysqli_query($conn, $sql);

	// display the content
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo "<h2>".$row["title"]."</h2>";
			echo "<p>".$row["content"]."</p>";
		}
	} else {
		echo "No content found.";
	}

	// close the database connection
	mysqli_close($conn);
	?>
</div>
</body>
</html>

<?php
$sql = "SELECT id, title, sub_title, content, filename, publish FROM tbl_article";

?>

<!-- Three columns of text below the carousel -->
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            ?>
            
            <hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading fw-normal lh-1"><?php echo $row['title'] ?>  <span class="badge text-bg-info">New</span> <span class="text-muted"><?php echo $row['sub_title'] ?></span></h2>
    <p class="lead"><?php echo $row['content'] ?></p>
    <p><a class="btn btn-secondary" href="?page=product">View details &raquo;</a></p>
  </div>
  <div class="col-md-5">
 <!--   <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="admin/uploaded_img/<?php echo $row['filename'] ?>" alt="Image not uploaded yet!" height="300px">

  </div>
</div>

<?php
        }
    }
    ?>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="admin/uploaded_img/fashion.jpeg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Dhiraj Jirel</h2>
        <p class="title">Founder & Project Manager</p>
        <p>Maintain and designed Admin panel!</p>
        <p>dhirajjirel@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

</div>

</body>
</html>

            </div>
        </div>
    </div>
</main>