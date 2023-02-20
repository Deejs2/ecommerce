<?php

if(isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $delivery_address = $_POST['delivery_address'];
    $permanent_address = $_POST['permanent_address'];
    $payment = $_POST['payment'];
    $name_on_card = $_POST['name_on_card'];
    $credit_card_number = $_POST['credit_card_number'];
    $expiration_date = $_POST['expiration_date'];
    $security_code = $_POST['security_code'];


    $insertQuery = "INSERT INTO tbl_checkout (firstname, lastname, username, email, delivery_address, permanent_address, payment, name_on_card, credit_card_number, expiration_date, security_code) 
    VALUES ('$firstname', '$lastname', '$username', '$email', '$delivery_address', '$permanent_address', '$payment', '$name_on_card', '$credit_card_number', '$expiration_date', '$security_code')";
    $result = $conn->query($insertQuery);

    if($conn->insert_id){
        echo "Form Submitted successfully";
    }else{
        echo $conn->error;
    }



    //header('Location:http://localhost/e-commerce/admin/?page=dashboard'); // Redirect to page list
    echo '<script>
window.location = "?page=delivery";
</script>';

}
?>

<?php
$email = $_SESSION['email'];
                // retrieve the content from the database
                      $sql = "SELECT `id`, `name`, `filename`, `gender`, `address`, `work`, `bio` FROM `tbl_customer` WHERE email = '$email'";
                      $result = $conn->query($sql);

                      $row = $result->fetch_assoc();
                      ?>

    
    <!-- Custom styles for this template -->


  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h2>Checkout form</h2>
      <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
    </div>

    <div class="row g-5">
       <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">

      <tr class="table-bottom">
         <td colspan="4"></td>
         <td></td>
         
      </tr>
            
          
          </tbody>
        </table>

        <?php
        $user_id = $_SESSION['user_id'];
         $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
         $grand_total = 0;
         $discount = 0;
         if(mysqli_num_rows($cart_query) > 0){
            while($fetch_cart = mysqli_fetch_assoc($cart_query)){
      ?>

      <?php
      $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']);
         $grand_total += $sub_total;
         $discount= $grand_total-5;
            }
         }else{
            echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">no item added</td></tr>';
         }
      ?>

          <span class="text-primary">Your cart</span>
          <span class="badge bg-primary rounded-pill"><?php echo $fetch_cart['quantity']; ?></span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0"><?php echo $fetch_cart['name']; ?></h6>
              <small class="text-muted"><?php echo $fetch_cart['quantity']; ?></small>
            </div>
            <span class="text-muted">$<?php echo $fetch_cart['price']; ?>/-</span>
          </li>
          <!-- <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Second product</h6>
              <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">$8</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Third item</h6>
              <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">$5</span>
          </li> -->
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">Promo code used</h6>
              <small>eNepal</small>
            </div>
            <span class="text-success">−$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Grand Total : $<?php echo $grand_total; ?>/-</span>
            <strong>To Pay: $<?php echo $discount; ?>/-</strong>
          </li>
        </ul>

        <form class="card p-2" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </form>
      </div> 
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" method="post">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Full name</label>
              <input type="text" class="form-control" name="firstname" placeholder="" value="<?php echo $row['name'];?>" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <!-- <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" name="lastname" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div> -->

            <div class="col-12">
              <label for="username" class="form-label">Username</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" name="username" placeholder="Username" required>
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Emails</label>
              <input type="email" class="form-control" name="email" placeholder="you@example.com" value="<?php echo $_SESSION['email'];?>">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Delivery Address</label>
              <input type="text" class="form-control" name="delivery_address" placeholder="" value="<?php echo $row['address'];?>" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Permanent Address<span class="text-muted">(Optional)*</span></label>
              <input type="text" class="form-control" name="permanent_address" placeholder="hometown">
            </div>

          </div>

          <hr class="my-4">

          <h4 class="mb-3">Payment</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="payment" value="credit_card" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Credit card</label>
            </div>
            <div class="form-check">
              <input id="debit" name="payment" value="debit_card" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Debit card</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="payment" value="paypal" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Name on card</label>
              <input type="text" class="form-control" name="name_on_card" id="cc-name" placeholder="" required>
              <small class="text-muted">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Credit card number</label>
              <input type="text" class="form-control" name="credit_card_number" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Expiration</label>
              <input type="text" class="form-control" name="expiration_date" id="cc-expiration" placeholder="dd-mm-yyyy" required>
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" name="security_code" class="form-control" id="cc-cvv" placeholder="Security code" required>
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" name="submit" type="submit" onclick="<?php echo('Please! be sure your details in above form is Right');?>">Continue to checkout</button>
        </form>
      </div>
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

