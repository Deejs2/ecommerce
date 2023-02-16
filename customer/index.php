

<?php
session_start();

include('../db/db.php');

if(!isset($_SESSION['email'])){
    header('Location:../?page=login-customer');
}

?>


<!-- Custom styles for this template -->
    <link href="../admin/design/dashboard.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
       <!-- custom css file link  -->
   <link rel="stylesheet" href="cart/css/style.css">
   <link rel="stylesheet" href="../css/product.css">
   <link href="../css/checkout.css" rel="stylesheet">

    <style> 
.col-md-9 {
  flex: 0 0 auto;
  width: 80% !important;
}
.col-md-3 {
  flex: 0 0 auto;
  width: 33%;
}</style>

  </head>
  <body>

  <?php include('common/header.php'); ?>

  <div class="container-fluid">
    <div class="row">
        <?php include("common/sidebar.php"); ?>

        <main class="col-md-9 ms-sm-auto px-md-4">
        <?php
            // Dynamic page load
            $page = $_GET['page'];
            $action = $_GET['action'];

            switch ($page){
                case 'dashboard':
                    include("dashboard.php");
                    break;
                    case 'home':
                      include("home.php");
                      break;
                      case 'order':
                        include("order.php");
                        break;
                        case 'product':
                          if ($action == 'cart'){
                              include('cart/product.php');
                          }elseif ($action == 'buy'){
                              include('cart/checkout.php');
                          }elseif ($action == 'delivery'){
                            include('cart/delivery.php');
                        }elseif ($action == 'order'){
                            include('cart/order.php');
                        }else{
                              include('index.php');
                          }
                          break;
                          case 'profile':
                            include("profile.php");
                            break;
                    case 'logout':
                        include("logout.php");
                        break;
                
                default:
                    include("dashboard.php");
            }
        ?>
        </main>
    </div>
</div>


    <script src="../assets/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="../admin/design/dashboard.js"></script>
  </body>
</html>


    

