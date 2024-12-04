<?php
include "connect.php";
if(isset($_POST["add_to_cart"])){
    $product_name = $_POST["product_name"];
    $product_price =$_POST["product_price"];
    $product_image = $_POST["product_image"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <?php include "header.php"; ?>
    <div class="container">
        <section class="products">
            <h1 class="Lets Shop">
                <div class="product_container">
                    <form method="POST" action="">
                    <div class="edit_form">
                        <img src="images/img3.jpg" alt="">
                        <h3>laptop</h3>
                        <div class="price">Price:200000</div>
                        <input type="hidden" name="product_name">
                        <input type="hidden" name="product_price">
                        <input type="hidden" name="product_image">
                        <input type="submit" class="submit_btn cart_btn" value="add to cart">
                    </div>
                  </form>
                </div>
            </h1>
        </section>
    </div>
</body>
</html>