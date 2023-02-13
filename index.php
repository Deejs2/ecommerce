<?php
include('db/db.php');
include('common/header.php'); 

$page = $_GET['page'];

switch ($page){
    case 'home':
        include("home.php");
        break;
    case 'product':
        include("product/product.php");
        break;
        case 'product-buy':
            include("product/product-buy.php");
            break;
    case 'about':
        include("about.php");
        break;
    case 'contact':
        include("non-used/contact.php");
        break;
    case 'login':
        include("Login and Register/index.php");
        break;
    case 'register':
        include("Login and Register/register.php");
        break;

        case 'login-customer':
            include("customer_Login-Register/index.php");
            break;
        case 'register-customer':
            include("customer_Login-Register/register.php");
            break;
    default:
        include("home.php");
}

include('common/footer.php');
?>


