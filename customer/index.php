
<?php
session_start();

if(!isset($_SESSION['email'])){
    header('Location:../?page=login-customer');
}

include('../db/db.php');
?>


<!-- Custom styles for this template -->
    <link href="../admin/design/dashboard.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>

  <?php include('common/header.php'); ?>

  <div class="container-fluid">
    <div class="row">
        <?php include("common/sidebar.php"); ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
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
                          include("product.php");
                          break;
                            case 'cart':
                              if ($action == 'create'){
                                  include('cart/create.php');
                              }elseif ($action == 'delete'){
                                  include('cart/delete.php');
                              }else{
                                  include('cart/list.php');
                              }
                              break;
                              case 'buy':
                                include("checkout.php");
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


    

