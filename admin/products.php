<!-----<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Products</h1>
</div>----->


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
  referrerpolicy="no refer"./>
  
</head>
<body class="bg-light">
  <div class="container mt-3">
    <h1 class="text-center">Insert Products</h1>
    <!------form------>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_title" class="form-label">Product title</label>
        <input type="text" name="product_title"
        id="product_title" class="form-control"
        placeholder="Enter product title" autocomplete="off"
        required="required">
      </div>
      <!---description---->
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_description" class="form-label">Product title</label>
        <input type="text" name="product_description"
        id="product_description" class="form-control"
        placeholder="Enter product description" autocomplete="off"
        required="required">
      </div>
      <!------keywords---->
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_keywords" class="form-label">Product Keywords</label>
        <input type="text" name="product_keywords"
        id="product_keywords" class="form-control"
        placeholder="Enter product keywords" autocomplete="off"
        required="required">
      </div>
    </form>
  </div>
  
</body>
</html>