<?php
        $user_id = $_SESSION['user_id'];?> 

          <span class="text-primary">Your cart</span>

          <span class="badge bg-primary rounded-pill"><?php echo $fetch_cart['user_id']; ?></span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>

            <?php
         $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
         $grand_total = 0;
         $discount = 0;

         if(mysqli_num_rows($cart_query) > 0){
            while($fetch_cart = mysqli_fetch_assoc($cart_query)){

      $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']);

      ?>

              <h6 class="my-0"><?php echo $fetch_cart['name']; ?></h6>
              <small class="text-muted">Quantity : <?php echo $fetch_cart['quantity']; ?></small>
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
          <?php
         $grand_total += $sub_total;
         $discount= $grand_total-5;
            }
         }else{
            echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">no item added</td></tr>';
         }?>
          <li class="list-group-item d-flex justify-content-between">
            <span>Grand Total : $<?php echo $grand_total; ?>/-</span>
            <strong>To Pay: $<?php echo $discount; ?>/-</strong>
          </li>
        </ul>
