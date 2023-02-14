<link href="../css/product.css" rel="stylesheet">

    
<!---------third child------>
<div class="bg-light">
  <h3 class="text-center">eNEPAL Store</h3>
  <p class="text-center">eNEPAL provide quality goods as well as on-time delivery of the product.</p>
</div>
  
    

<!-----fourth child----->
<div class="row">
  <div class="col-md-12">
    <!-----product----->
    <div class="row">
      <!----fetching products---->
      <?php
$select_query="select * from `tbl_product` order by rand()";
$result_query=mysqli_query($conn,$select_query);
while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_image1=$row['product_image1'];
  $product_price=$row['product_price'];

  ?>
  <div class='col-md-3 mb-2'>
    <form action="cart/manage_cart.php" method="post" enctype="multipart/form-data">
      <div class='card'>
        <img src='../admin/product_images/<?php echo $row['product_image1'];?>' class='card-img-top' alt='...'>
        <div class='card-body'>
        <h5 class='card-title'><?php echo $row['product_title'];?></h5>
        <p class='card-text'><?php echo $row['product_description'];?></p>
        <button type="submit" name="submit" class='btn btn-info'>Add to cart</button>
        <a href='#' class='btn btn-secondary'>View more</a>
      </div>
    </form>
  </div>
</div>
<?php
}
?>
</div>
<!----column end---->
  </div>
</div>



    
  

    
