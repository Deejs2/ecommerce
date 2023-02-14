<?php

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:../?page=customer-login');
};


if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = '<div class="alert alert-info alert-dismissible fade show" role="alert">
      product already added to cart! <a href="?page=product&action=order" class="alert-link">update it</a>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, image, quantity) VALUES('$user_id', '$product_name', '$product_price', '$product_image', '$product_quantity')") or die('query failed');
      $message[] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
      product added to cart! <a href="?page=product&action=order" class="alert-link">want to see</a>.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
   }

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>


<div class="container">

<div class="products">

   <div class="">
   <h2 class="text-center">eNepal Store</h2>
   <p class="text-center">eNepal provide quality goods as well as on-time delivery of the product.</p>
   </div>

   <div class="box-container">

   <?php
      $select_product = mysqli_query($conn, "SELECT * FROM `tbl_product`") or die('query failed');
      if(mysqli_num_rows($select_product) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_product)){
   ?>
      <form method="post" class="box" action="">
         <img src="../admin/product_images/<?php echo $fetch_product['product_image1']; ?>" alt="">
         <h5 class='card-title'><?php echo $fetch_product['product_title']; ?></h5>
         <p class='card-text'><?php echo $fetch_product['product_description']; ?></p>
         <div class="price">$<?php echo $fetch_product['product_price']; ?> /-</div>
         <input type="number" min="1" name="product_quantity" value="1">
         <input type="hidden" name="product_image" value="<?php echo $fetch_product['product_image1']; ?>">
         <input type="hidden" name="product_name" value="<?php echo $fetch_product['product_title']; ?>">
         <input type="hidden" name="product_name" value="<?php echo $fetch_product['product_description']; ?>">
         <input type="hidden" name="product_price" value="<?php echo $fetch_product['product_price']; ?>">
         <input type="submit" value="add to cart" name="add_to_cart" class="btn">
      </form>
   <?php
      };
   };
   ?>

   </div>

</div>



</div>

</body>
</html>