<?php  include "connect.php"; ?>
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
        <section class="shopping_cart">
            <h1 class="heading">MY Cart</h1>
            <table>
                <thead>
                    <th>Sl No</th>
                    <th>Product Name</th>
                    <th>product Image</th>
                    <th>product Price</th>
                    <th>product Quantity</th>
                    <th>Total price</th>
                    <th>Action</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>laptop</td>
                    <td>
                        <img src="images/images.jpg" alt="/">
                    </td>
                    <td>23000</td>
                    <td>
                        <div class="quantity_box">
                            <input type="number" min="1">
                            <input type="submit" class="update_quantity" value="update">
                        </div>
                     </td>
                    <td>23000</td>
                    <td>
                        <a href="">
                            <i class="fas fa-trash"></i>Remove
                        </a>
                    </td>
                  </tr>
                </tbody>
           </table>
           <div class="table_bottom">
            <a href="hop_products.php" class="bottom_btn">Continue Shoppng</a>
            <h3 class="bottom_btn">Grand total:<span>25000/-</span></h3>
            <a href="checkout.php" class="bottom_btn">Procced to checkout></a>
           </div>

           <a href="" class="delete_all_btn">
            <i class="fas fa-trash"></i>Delete All
           </a>
        </section>
    </div>
</body>
</html>