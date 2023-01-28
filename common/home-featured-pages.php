
    <?php
$sql = "SELECT `id`, `title`, `content`, `publish` FROM `tbl_page` WHERE 1";
$result = $conn->query($sql);
?>

<!-- Three columns of text below the carousel -->
<div class="row">
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            ?>
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

                <h2><?php echo $row['title'] ?></h2>
                <p><?php echo $row['content'] ?></p>
                <p><a class="btn btn-secondary" href="?page=product">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <?php
        }
    }
    ?>
</div><!-- /.row -->