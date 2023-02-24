

<?php
$id = $_GET['id'];
if (isset($_POST['submit'])) {

    $delivery_address=$_POST['delivery_address'];


    $updateQuery = "UPDATE tbl_checkout SET delivery_address='$delivery_address' WHERE id = $id";
    $result = $conn->query($updateQuery);

    if ($conn->insert_id) {
        echo "Page updated successfully";
    } else {
        echo $conn->error;
    }

    $message[] = '<div class="alert alert-info alert-dismissible fade show" role="alert">
    Delivery Address Update Succefully! <a href="?page=delivery" class="alert-link">Go Back</a>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';

   // header('Location:?page=dashboard'); // Redirect to page list
//    echo '<script>
// window.location = "?page=delivery";
// </script>';
}
?>

<?php
$email = $_SESSION['email'];
                // retrieve the content from the database
                      $sql = "SELECT * FROM `tbl_customer` WHERE email = '$email'";
                      $result = $conn->query($sql);

                      $row = $result->fetch_assoc();
                      ?>

    
    <!-- Custom styles for this template -->

    <main>
    <?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../img/enepal-logo.jpg" alt="" width="72" height="57">
      <h2>Edit Delivery Address</h2>

        <form class="needs-validation" method="post" style="margin-left: 350px;">
          <div class="row g-3">
            <div class="col-sm-6">

            <div class="col-12">
              <label for="address" class="form-label">Delivery Address</label>
              <input type="text" class="form-control" name="delivery_address" placeholder="" value="<?php
$email = $_SESSION['email'];
                // retrieve the content from the database
                      $sql = "SELECT * FROM `tbl_checkout` WHERE email = '$email'";
                      $result = $conn->query($sql);

                      $row = $result->fetch_assoc();
                      echo $row['delivery_address'];?>" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

          <hr class="my-4">
          <div class="form-group">
        <input type="submit" name="submit" value="saves changes" class="btn btn-primary"/>
    </div>
        </form>
    </div>
  </main>
  

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2023 eNepal</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="checkout.js"></script>

