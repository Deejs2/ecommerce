<?php
$sql = "SELECT id, filename, title, content, publish FROM tbl_carousel";
$result = $conn->query($sql);
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Carousel</h1>
</div>

<div class="row">
    <div class="col-12">
            <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Content</th>
                <th>Publish</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['filename'] ?></td>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['content'] ?></td>
                    <td><?php echo $row['publish'] ? 'YES': 'NO' ?></td>
                    <td>
                        <a href="?page=pages&action=edit&id=<?php echo $row['id'] ?>">Edit</a>
                        <a href="?page=pages&action=delete&id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php
                }
            }
            ?>
        </tbody>
        <button class="btn btn-outline-secondary" type="button"><a href="?page=pages&action=create">Create</a></button>
    </table>
    </div>