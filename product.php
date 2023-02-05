<link href="css/product.css" rel="stylesheet">

    <nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="?page=pages&action=fruit">Fruits</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Product</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Features</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Enterprise</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Support</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Pricing</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Cart</a>
      </div>
    </nav>

    
<!---------third child------>
<div class="bg-light">
  <h3 class="text-center">eNEPAL Store</h3>
  <p class="text-center">eNEPAL provide quality goods as well as on-time delivery of the product.</p>
</div>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Punny headline</h1>
        <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple's marketing pages.</p>
        <a class="btn btn-outline-secondary" href="#">Coming soon</a>
      </div>
      <div class="product-device box-shadow d-none d-md-block"></div>
      <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
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
  echo"<div class='col-md-3 mb-2'>
  <div class='card'>
  <img src='./admin/product_images/$product_image1' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'>$product_title</h5>
    <p class='card-text'>$product_description</p>
    <a href='#' class='btn btn-info'>Add to cart</a>
    <a href='#' class='btn btn-secondary'>View more</a>
  </div>
</div>
</div>";
}


?>
      <!----<div class="col-md-3 mb-2">
        <div class="card">
        <img src="./img/dairymilk-silk.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text"></p>
          <a href="#" class="btn btn-info">Add to cart</a>
          <a href="#" class="btn btn-secondary">View more</a>
        </div>
      </div>
      </div>----->
      <!-----<div class="col-md-3 mb-2">
      <div class="card">
        <img src="./img/apple.jfif" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text"></p>
          <a href="#" class="btn btn-info">Add to cart</a>
          <a href="#" class="btn btn-secondary">View more</a>
        </div>
      </div>
      </div>
      <div class="col-md-3 mb-2">
      <div class="card">
        <img src="./img/mango.jfif" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text"></p>
          <a href="#" class="btn btn-info">Add to cart</a>
          <a href="#" class="btn btn-secondary">View more</a>
        </div>
      </div>
</div>
      <div class="col-md-3 mb-2">
        <div class="card">
        <img src="./img/dairymilk-silk.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text"></p>
          <a href="#" class="btn btn-info">Add to cart</a>
          <a href="#" class="btn btn-secondary">View more</a>
        </div>
      </div>
      </div>
      <div class="col-md-3 mb-2">
        <div class="card">
        <img src="./img/dairymilk-silk.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text"></p>
          <a href="#" class="btn btn-info">Add to cart</a>
          <a href="#" class="btn btn-secondary">View more</a>
        </div>
      </div>
      </div>
      <div class="col-md-3 mb-2">
        <div class="card">
        <img src="./img/dairymilk-silk.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text"></p>
          <a href="#" class="btn btn-info">Add to cart</a>
          <a href="#" class="btn btn-secondary">View more</a>
        </div>
      </div>
      </div>
      <div class="col-md-3 mb-2">
        <div class="card">
        <img src="./img/dairymilk-silk.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text"></p>
          <a href="#" class="btn btn-info">Add to cart</a>
          <a href="#" class="btn btn-secondary">View more</a>
        </div>
      </div>
      </div>
      <div class="col-md-3 mb-2">
        <div class="card">
        <img src="./img/dairymilk-silk.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text"></p>
          <a href="#" class="btn btn-info">Add to cart</a>
          <a href="#" class="btn btn-secondary">View more</a>
        </div>
      </div>
      </div>----->
      <!---row end--->
</div>
<!----column end---->
  </div>
</div>



    
  

    
