<!-----<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Products</h1>
</div>----->
<!-----connect file---->
<?php
include('../db/db.php');
if(isset($_POST['insert_products'])){
//$product_id=$_POST['product_id'];
$product_title=$_POST['product_title'];
$product_description=$_POST['product_description'];
$product_keywords=$_POST['product_keywords'];
$product_price=$_POST['product_price'];

//accessing images
$product_image1=$_FILES['product_image1']['name'];
$product_image2=$_FILES['product_image2']['name'];
$product_image3=$_FILES['product_image3']['name'];

//accessing image tmp name
$temp_image1=$_FILES['product_image1']['tmp_name'];
$temp_image2=$_FILES['product_image2']['tmp_name'];
$temp_image3=$_FILES['product_image3']['tmp_name'];

//checking empty condition
if($product_title=='' or $product_description=='' or $product_keywords=='' or $product_price=='' or $product_image1=='' or $product_image2=='' or $product_image3=='' ){
  echo"<script>alert('Please fill all the available fields')</script>";
  exit();
}else{
  move_uploaded_file($temp_image1,"./product_images/$product_image1");
  move_uploaded_file($temp_image2,"./product_images/$product_image2");
  move_uploaded_file($temp_image3,"./product_images/$product_image3");

  //insert query
  $insert_product="insert into `tbl_product` ( product_title,product_description,product_keywords,product_image1,product_image2,product_image3,product_price) values ('$product_title','$product_description','$product_keywords','$product_image1','$product_image2','$product_image3','$product_price')";
  $result_query=mysqli_query($conn,$insert_product
);
  if($result_query){
    echo "<script>alert('Sucessfully inserted the product')</script>";
  }
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Products-Admin Dashboard</title>
  <!----- css file----->
  <link rel="stylesheet" href="../css/product.css">
  <!-----bootstrap css link------->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/
  bootstrap.min.css" rel="stylesheet"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXS1oB
  oqyl2QvZ6jIW3" crossorigin="anonymous">
  <!------font awesome link---->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/
  font-awesome/6.0.0/css/all.min.css"
  integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUikdWk5t3PyolY1cOd4
  DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous"
  referrerpolicy="no-referrer"./>
  
</head>
<body class="bg-light">
  <div class="container mt-3">
    <h1 class="text-center">Insert Products</h1>
    <!------form------>
    <form action="" method="post" enctype="multipart/form-data">
      <!----<div class="form-outline mb-4 w-50 m-auto">
        <label for="product_id" class="form-label">Product id</label>
        <input type="text" name="product_id"
        id="product_id" class="form-control"
        placeholder="Enter product id" autocomplete="off"
        required="required">
      </div>---->
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_title" class="form-label">Product title</label>
        <input type="text" name="product_title"
        id="product_title" class="form-control"
        placeholder="Enter product title" autocomplete="off"
        required="required">
      </div>
      <!---description---->
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_description" class="form-label">Product description</label>
        <input type="text" name="product_description"
        id="product_description" class="form-control"
        placeholder="Enter product description" autocomplete="off"
        required="required">
      </div>
      <!------keywords---->
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_keywords" class="form-label">Product Keywords
</label>
        <input type="text" name="product_keywords"
        id="product_keywords" class="form-control"
        placeholder="Enter product keywords" autocomplete="off"
        required="required">
      </div>
        <!-------categories---
        <div class="form-outline md-4 w-50 m-auto">
          <select name="product_categories" id="" class="form-select">
        <option value="">Select a Category</option>
        </php
          $select_query="Select * from 'categories'";
          $result_query=mysqli_query($con,$select_query);
          while($row=mysqli_fetch_assoc($result_query)){
            $category_title=$row['category_title'];
            $category_id=$row['category_id'];
            echo "<option value='$category_id'>$category_title</option>";




          }
        ?>--->
        <!-----<option value="">category1</option>
        <option value="">Category2</option>
        <option value="">Category3</option>----->
        </select>
        </div>
         <!-------Brands
         <div class="form-outline md-4 w-50 m-auto">
          <select name="product_Brands" id="" class="form-select">
        <option value="">Select a Brands</option>
        <option value="">Brands1</option>
        <option value="">Brands2</option>
        <option value="">Brands3</option>
        </select>
        </div>----->
         <!-------Image 1----->
         <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_image1" class="form-label">Product image1</label>
        <input type="file" name="product_image1"
        id="product_image1" class="form-control"
        required="required">
      </div>
      <!-------Image 2----->
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_image2" class="form-label">Product image2</label>
        <input type="file" name="product_image2"
        id="product_image2" class="form-control"
        required="required">
      </div>
      <!-------Image 3----->
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_image3" class="form-label">Product image3</label>
        <input type="file" name="product_image3"
        id="product_image3" class="form-control"
        required="required">
      </div>
      <!-------product price----->
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_price" class="form-label">Product price</label>
        <input type="text" name="product_price"
        id="product_price" class="form-control"
        placeholder="Enter product price" autocomplete="off"
        required="required">
      </div>
            <!-------button----->
            <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" name="insert_products" class="btn
            btn-info md-3 px-3" value="Insert products">
      </div>
    </form>
  </div>
  
</body>
</html>