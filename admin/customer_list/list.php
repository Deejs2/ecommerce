<?php
$sql = "SELECT id, name, email, password, gender, address, created_date, updated_date, publish FROM tbl_customer";
$result = $conn->query($sql);
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Customer Details</h1>
</div>

<div class="row">
    <div class="col-12">
            <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Password</th>
                <th>Address</th>
                <th>Created_Date</th>
                <th>Updated_Date</th>
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
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['password'] ?></td>
                    <td><?php echo $row['gender'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['created_date'] ?></td>
                    <td><?php echo $row['updated_date'] ?></td>
                    <td><?php echo $row['publish'] ? 'YES': 'NO' ?></td>
                    <td>
                        <a href="?page=customer_pages&action=delete&id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
    </div>
</div>