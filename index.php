<?php include "connect.php";  ?>

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
   <?php include "header.php" ?>

    <div class="container">
        <section>
            <h3 class="heading">Add Products</h3>
            <form action="" class="add-product" method="POST" enctype="multipart/form-data">
               <input type="text" name="product_name" placeholder="Enter product name" class="input_fields" required>
               <input type="number" name="product_price" min="0" placeholder="Enter product price" class="input_fields" required>
               <input type="file" name="product_image"  class="input_fields" required>
               <input type="submit" name="add_product"  class="submit_btn" value="add product">
            </form>
        </section>
    </div>
    <script src="js/script.js"></script>
</body>
</html>