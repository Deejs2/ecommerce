
<div class="container">
 
 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Delivery Reports</h1>
</div>

<?php
$email=$_SESSION['email'];
$sql = "SELECT * FROM `tbl_customer` WHERE email='$email'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>


<div class='bd-example-snippet bd-code-snippet'>
        <div class='alert alert-success' role='alert'>
          <h4 class='alert-heading'>Payment successful!</h4>
          <p>Hello <?php echo $row['name'];?>! Thank you for buying our products. We are delivering your products in <?php
$email=$_SESSION['email'];
$sql = "SELECT * FROM `tbl_checkout` WHERE email='$email'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo $row['delivery_address'];?> as you  mentioned in your delivery address right now!</p>
          <hr>
          <p class='mb-0 alert alert-danger'>Please! be sure delivering address is Right. <a href="?page=delivery&action=edit&id=<?php echo $row['id'] ?>" class="alert-link">Edit</a></p>
        </div>
        </div>
        <img src='cart/images/coming soon.jfif' style='display: flex; justify-content: center; margin: auto; padding-top: 0px;' height='350px'>
    </div>
