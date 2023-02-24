<!-- <?php
$user_id = $_SESSION['user_id'];

                // retrieve the content from the database
                      $sql = "SELECT * FROM `tbl_customer` WHERE id='$user_id'";
                      $result = $conn->query($sql);

                      $row = $result->fetch_assoc();

                      echo $row['email'];
                      ?>


 <style>
    table{
        margin: 50px 10px;
    }
    th,td{
        border: 1px solid black;
    }
    input[type="number"]{
        width: 180px;
        padding: 12px 4px;
        font-size: 20px;
        color: var(--black);
}
 </style>

<div class="shopping-cart">

   <h1 class="heading">Order by customer</h1>

   <table class="table table-striped">
          <thead>
          <tr>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total price</th>
            <th scope="col">Action</th>
          </tr>
          </thead>
          <tbody>

          <?php
         $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE id = '$user_id'") or die('query failed');
         $grand_total = 0;
         if(mysqli_num_rows($cart_query) > 0){
            while($fetch_cart = mysqli_fetch_assoc($cart_query)){
      ?>
         <tr>
            <td><img src="../admin/product_images/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['name']; ?></td>
            <td>$<?php echo $fetch_cart['price']; ?>/-</td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                  <input type="number" min="1" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>">
                  <input type="submit" name="update_cart" value="update" class="option-btn">
               </form>
            </td>
            <td>$<?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>/-</td>
            <td><a href="?page=product&action=order&remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn" onclick="return confirm('remove item from cart?');">remove</a></td>
         </tr>
      <?php
         $grand_total += $sub_total;
            }
         }else{
            echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">no item added</td></tr>';
         }
      ?>
      <tr class="table-bottom">
         <td colspan="4">Grand Total :</td>
         <td>$<?php echo $grand_total; ?>/-</td>
         <td><a href="?page=product&action=order&delete_all" onclick="return confirm('delete all from cart?');" class="delete-btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">delete all</a></td>
      </tr>
            
          
          </tbody>
        </table>

   <div class="cart-btn">  
      <a href="?page=product&action=buy" class="btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">proceed to checkout</a>
   </div>

</div> -->