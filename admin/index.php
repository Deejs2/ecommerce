<?php
session_start();

if(!isset($_SESSION['email'])){
    header('Location:../?page=login');
}

include('../db/db.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="eNepal contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>eNepal_Admin Panel</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">

    

    

<link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="design/dashboard.css" rel="stylesheet">
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
            $action = isset($_GET['action']) ? $_GET['action'] : '';

            switch ($page){
              case 'carousel':
                if($action == 'list'){
                  include('carousel/list.php');
                }elseif ($action == 'create'){
                    include('carousel/create.php');
                }elseif ($action == 'edit'){
                  include('carousel/edit.php');
                }elseif ($action == 'delete'){
                    include('carousel/delete.php');
                }else{
                    include('carousel/list.php');
                }
                break;

              case 'customer_pages':
                if($action == 'list'){
                  include('customer_list/list.php');
                }elseif ($action == 'edit'){
                    include('customer_list/edit.php');
                }elseif ($action == 'delete'){
                    include('customer_list/delete.php');
                }else{
                    include('customer_list/list.php');
                }
                break;
              case 'pages':
                  if($action == 'list'){
                    include('page/list.php');
                  }elseif ($action == 'create'){
                      include('page/create.php');
                  }elseif ($action == 'edit'){
                    include('page/edit.php');
                  }elseif ($action == 'delete'){
                      include('page/delete.php');
                  }else{
                      include('page/list.php');
                  }
                break;
              case 'article':
                if($action == 'list'){
                  include('article/list.php');
                }elseif ($action == 'create'){
                    include('article/create.php');
                }elseif ($action == 'edit'){
                    include('article/edit.php');
                }elseif ($action == 'delete'){
                    include('article/delete.php');
                }else{
                    include('article/list.php');
                }
                break;
              case 'customer':
                include("customers.php");
                break;
                case 'product':
                  if ($action == 'edit'){
                      include('product/update.php');
                  }elseif ($action == 'delete'){
                      include('product/delete.php');
                  }else{
                      include('product/products.php');
                  }
                  break;
                  case 'about':
                    if ($action == 'edit'){
                        include('about/update.php');
                    }elseif ($action == 'delete'){
                        include('about/delete.php');
                    }else{
                        include('about/about.php');
                    }
                    break;
                  case 'contact':
                    include("contact/contact.php");
                    break;
                    case 'contact-delete':
                      include("contact/delete.php");
                      break;
                      // case 'order':
                      //   include("order.php");
                      //   break;
              case 'logout':
                    include("logout.php");
                    break;
                default:
                    include('dashboard.php');
            }
            ?>
        </main>
    </div>
</div>



<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="design/dashboard.js"></script>
</body>
</html>
