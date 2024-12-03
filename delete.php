<?php

include "connect.php";

if(isset($_GET["delete"])){
    $delete_id= $_GET["delete"];

    $sql = "DELETE FROM products WHERE id = $delete_id";

    $res = mysqli_query($conn,$sql);

    if($res){
        header("location:view_products.php");
    }else{
        echo "products not deleted";
        header("location:view_products.php");
    }
}

?>