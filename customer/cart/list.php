<?php
$sql = "SELECT id, title, content,filename FROM tbl_cart";
$result = $conn->query($sql);
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">cart</h1>
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
                    <td>
                        <a href="?page=cart&action=edit&id=<?php echo $row['id'] ?>">Edit</a>
                        <a href="?page=cart&action=delete&id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                    
                </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
    <button class="btn btn-outline-secondary" type="button"><a href="?page=buy">Buy</a></button>
    </div>