<link href="css/product.css" rel="stylesheet">
<div style="padding: 3px 50px;">
<!-- 
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
    </nav> -->

    
<!---------third child------>
<!-- <div style="padding: 20px 250px;">
  <h3 class="text-center">eNepal Store</h3>
  <p class="text-center">eNepal provide quality goods as well as on-time delivery of the product.We have a wide and assorted range of products including clothing, electronics, mobile phones, fruits, grocery and much more.</p>
</div> -->

    
    <div class="position-relative overflow-hidden p-3 text-center container" style="background: url(admin/carousel/img/banner.jpg); background-size: cover; height: 650px; margin-bottom: 60px;">

        <h1 class="display-4 font-weight-normal">Apple M3 MacBook Air</h1>
        <p class="lead font-weight-normal" style="padding: 8px 160px 0px; margin-bottom: 10px;">The launch of the Apple M3 SoC is expected in the coming months after the company unveiled M2 Max and Ultra chips last week.</p>
        <a class="btn btn-outline-secondary" href="#">Coming soon</a>
 
    </div>

<!--    <p>
   <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
      </div>
    </div>
  </div> -->
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
  <img src='admin/product_images/$product_image1' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'>$product_title</h5>
    
    <p class='card-text'>Price: $$product_price</p>
    
    <a href='?page=login-customer' class='btn btn-info'>Add to cart</a>
    <a class='btn btn-primary' data-toggle='collapse' href='#$product_id' role='button' aria-expanded='false' aria-controls='$product_id'>view more</a>
    <div class='collapse multi-collapse' id='$product_id'>
    <div class='card card-body'>
    <p class='card-text'>$product_description</p>
    </div>
</div>
    

  </div>
</div>
</div>";
}


?>


</div>
<!----column end---->
  </div>
</div>

</div>


    
  

    
