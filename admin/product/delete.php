<?php
include('../../db/db.php');
if(isset($_GET["deleteid"])) {
    if(isset($_GET['deleteid'])){
        $product_id=$_GET['deleteid'];
        $sql="delete from `tbl_product` where product_id=$product_id";
        $result_query=mysqli_query($conn,$sql);
        if($result_query){
            header('location:../?page=product');
        }else{
            die(mysqli_error($conn));
        }
    }
    
}
?>