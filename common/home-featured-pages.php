
    <?php
$sql = "SELECT id, title, content, filename, publish FROM tbl_page";
$result = $conn->query($sql);
?>

<!-- Three columns of text below the carousel -->
<div class="row">
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            ?>
            <div class="col-lg-4">

                <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="admin/uploaded_img/<?php echo $row['filename'] ?>" alt="Image not uploaded yet!">

                <h2><?php echo $row['title'] ?></h2>
                <p><?php echo $row['content'] ?></p>
                <p>Image_name:<?php echo $row['filename'] ?></p>
                <p><a class="btn btn-secondary" href="?page=product">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <?php
        }
    }
    ?>
</div><!-- /.row -->