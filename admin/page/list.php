<?php
$sql = "SELECT id, title, content, filename, publish, created_date, updated_date FROM tbl_page";
$result = $conn->query($sql);
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Pages</h1>
</div>

<div class="row">
    <div class="col-12">
            <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Image</th>
                <th>Created On</th>
                <th>Last Updated On</th>
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
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['content'] ?></td>
                    <td><?php echo $row['filename'] ?></td>
                    <td><?php echo $row['created_date'] ?></td>
                    <td><?php echo $row['updated_date'] ?></td>
                    <td><?php echo $row['publish'] ? 'YES': 'NO' ?></td>
                    <td>
                        <a href="?page=pages&action=edit&id=<?php echo $row['id'] ?>"><span data-feather="edit" class="align-text-bottom"></span>Edit</a><br/>
                        <a href="?page=pages&action=delete&id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure?')"><span data-feather="trash-2" class="align-text-bottom"></span>Delete</a>
                    </td>
                </tr>
            <?php
                }
            }
            ?>
        </tbody>
        <button class="btn btn-outline-secondary" type="button"><a href="?page=pages&action=create"><span data-feather="file-plus" class="align-text-bottom"></span>Create</a></button>
    </table>
    </div>