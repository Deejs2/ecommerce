<!-----<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Products</h1>
</div>----->
<!-----connect file---->
<?php
if(isset($_POST['insert_products'])){
//$product_id=$_POST['product_id'];
$product_title=$_POST['product_title'];
$product_description=$_POST['product_description'];
$product_price=$_POST['product_price'];

//accessing images
$product_image1=$_FILES['product_image1']['name'];


//accessing image tmp name
$temp_image1=$_FILES['product_image1']['tmp_name'];


//checking empty condition
if($product_title=='' or $product_description=='' or $product_price=='' or $product_image1=='' ){
  echo"<script>alert('Please fill all the available fields')</script>";
  exit();
}else{
  move_uploaded_file($temp_image1,"./product_images/$product_image1");


  //insert query
  $insert_product="insert into `tbl_product` ( product_title,product_description,product_image1,product_price) values ('$product_title','$product_description','$product_image1','$product_price')";
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

      
     
        </select>
        </div>
        
         <!-------Image 1----->
         <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_image1" class="form-label">Product image1</label>
        <input type="file" name="product_image1"
        id="product_image1" class="form-control"
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



  
  <!-----delete and edit part----->
  <div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">product_id</th>
      <th scope="col">product_title</th>
      <th scope="col">product_description</th>
      <th scope="col">product_image1</th>
      <th scope="col">product_price</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
$select_query="select * from `tbl_product`";
$result_query=mysqli_query($conn,$select_query);
while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_image1=$row['product_image1'];
  $product_price=$row['product_price'];
  echo '
  <tr>
      <th scope="row">'.$product_id.'</th>
      <td>'.$product_title.'</td>
      <td>'.$product_description.'</td>
      <td>'.$product_image1.'</td>
      <td>'.$product_price.'</td>
      <td>
      <button class="btn btn-primary"><a href="?page=product&action=edit&
updateid='.$product_id.'"class="text-light">Update</a></button>
      <button class="btn btn-danger"><a href="product/delete.php?
      deleteid='.$product_id.'"class="text-light">Delete</a></button>
    </td>
    </tr>';
}


    ?>
  
    
  </tbody>
</table>
</div>
  
</body>
</html>