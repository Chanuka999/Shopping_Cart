<header class="header">
        <div class="header_body">
            <a href="index.php" class="logo">SHOPPING</a>
            <nav class="navbar">
                <a href="index.php">Add Products</a>
                <a href="view_products.php">view Products</a>
                <a href="shop_products.php">Shoppit</a>
            </nav>
            <?php
              $sql= "SELECT * FROM cart";

              $res= mysqli_query($conn,$sql);

              $row=mysqli_num_rows($res);

            ?>
            <a href="cart.php" class="cart"><i class="fa-solid fa-cart-shopping"></i><span><sup><?php echo $row;  ?></sup></span></a>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
    
    </header>