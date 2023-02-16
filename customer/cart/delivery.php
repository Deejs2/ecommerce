<div class="container">
 
 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Delivery Reports</h1>
</div>

<?php
$sql = "SELECT firstname, lastname, delivery_address FROM tbl_checkout";
$result = $conn->query($sql);
?>

<?php
   $row = $result->fetch_assoc(); 
?>
<?php echo "<div class='bd-example-snippet bd-code-snippet'>
        <div class='alert alert-success' role='alert'>
          <h4 class='alert-heading'>Payment successful!</h4>
          <p>Hello $row[firstname] $row[lastname] ! Thank you for buying our products. We are delivering your products in $row[delivery_address] as you  mentioned in your delivery address right now!</p>
          <hr>
          <p class='mb-0 alert alert-danger'>Please! be sure your details in checkout form is Right. <a href='?page=home' class='alert-link'>Edit Form!</a></p>
        </div>
        </div>
</div>"; ?>
