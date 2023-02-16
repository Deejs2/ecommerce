<?php
$sql = "SELECT id, name, email, password, gender, address FROM tbl_customer";
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
                <th>Email</th>
                <th>Password</th>
                <th>Gender</th>
                <th>Address</th>
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