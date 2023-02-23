<main>
    <div class="container">
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

<div style="text-align: center;">


<!-- Three columns of text below the carousel -->
    <?php

    	// retrieve the content from the database
	$sql = "SELECT title, content FROM tbl_about";
	$result = mysqli_query($conn, $sql);

  $row = $result->fetch_assoc();

          echo "<div class='about-section'><h2>".$row["title"]."</h2>";
			echo "<p>".$row["content"]."</p></div>";
            ?>
<h2 style="text-align:center; padding-top: 20px;">Our Team</h2>
<?php

// retrieve the content from the database
      $sql = "SELECT id, filename, adminName, email, post, work FROM tbl_about ORDER BY id DESC";
      $result = mysqli_query($conn, $sql); ?>

<div class="row">

    <?php 

if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            ?>

  <div class="column">

<div class="card">
      <img src="admin/about/img/<?php echo $row['filename'] ?>" alt="Jane" style="width:100%">
      <div class="container" style="text-align: left;">
        <h2><?php echo $row['adminName'] ?></h2>
        <p class="title"><?php echo $row['post'] ?></p>
        <p><?php echo $row['work'] ?></p>
        <p><?php echo $row['email'] ?></p>
        <p><button class="button"><a href="?page=contact" style="text-decoration: none; color:white;">Contact</a></button></p>
      </div>
</div>
            

        
  </div>

  
<?php
        }
    }
    ?>
</div>




    </div>
</main>