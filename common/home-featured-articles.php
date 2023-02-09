

    
    <?php
$sql = "SELECT id, title, sub_title, content, filename, publish FROM tbl_article";
$result = $conn->query($sql);
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