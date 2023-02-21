

<?php
$product_id=$_GET['updateid'];
$sql="Select * from `tbl_product` where product_id=$product_id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$product_title=$row['product_title'];
$product_description=$row['product_description'];
$product_image1=$row['product_image1'];
$product_price=$row['product_price'];
 
    if(isset($_POST['submit'])){
        $product_title=$_POST['product_title'];
        $product_description=$_POST['product_description'];
        $product_image1=$_POST['product_image1'];
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
}

        $sql="update `tbl_product` set product_id=$product_id,product_title='$product_title',
        product_description='$product_description',product_image1='$product_image1',product_price='$product_price'
        where product_id=$product_id";
        $result=mysqli_query($conn,$sql);
        if($result){
            // header('Location:?page=dashboard'); // Redirect to page list
   echo '<script>
   window.location = "?page=product";
   </script>';
        }else{
            die(mysqli_error($conn));
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
    <h1 class="text-center">Update Products</h1>
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
        required="required" value=<?php echo $product_title?>>
      </div>
      <!---description---->
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_description" class="form-label">Product description</label>
        <input type="text" name="product_description"
        id="product_description" class="form-control"
        placeholder="Enter product description" autocomplete="off"
        required="required" value=<?php echo $product_description?>>
      </div>

      
     
        </select>
        </div>
        
         <!-------Image 1----->
         <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_image1" class="form-label">Product image1</label>
        <input type="file" name="product_image1"
        id="product_image1" class="form-control"
        required="required" value=<?php echo $product_image1?>>
      </div>
    
      <!-------product price----->
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_price" class="form-label">Product price</label>
        <input type="text" name="product_price"
        id="product_price" class="form-control"
        placeholder="Enter product price" autocomplete="off"
        required="required" value=<?php echo $product_price?>>
      </div>
            <!-------button----->
            <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" name="submit" class="btn
            btn-info md-3 px-3" value="Update">
      </div>
    </form>
  </div>