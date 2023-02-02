<?php
include('db/db.php');
include('common/header.php'); 

$page = $_GET['page'];

switch ($page){
    case 'home':
        include("home.php");
        break;
    case 'product':
        include("product.php");
        break;
    case 'about':
        include("about.php");
        break;
    case 'contact':
        include("contact/contactfrom.php");
        break;
    case 'login':
        include("Login and Register/index.php");
        break;
    case 'register':
        include("Login and Register/register.php");
        break;
    default:
        include("home.php");
}

include('common/footer.php');
?>


