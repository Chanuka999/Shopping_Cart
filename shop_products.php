<?php
include "connect.php";
if(isset($_POST["add_to_cart"])){
    $product_name = $_POST["product_name"];
    $product_price =$_POST["product_price"];
    $product_image = $_POST["product_image"];
    $product_quantity=1;

    $sql3 = "SELECT * FROM cart WHERE name = '$product_name'";
    $res3= mysqli_query($conn,$sql3);
    if(mysqli_num_rows($res3)>0){
        echo "already added to a cart";
    }else{
        $sql = "INSERT INTO cart (name,price,image,quantity) VALUES('$product_name','$product_price','$product_image',$product_quantity)";

        $res = mysqli_query($conn,$sql);
        echo "added to the cart";
    }

   

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
                    <?php
                   $sql2 = "SELECT * FROM products";

                   $res2 = mysqli_query($conn,$sql2);

                   $count = mysqli_num_rows($res2);

                   if($count>0){
                    while($row=mysqli_fetch_assoc($res2)){
                        ?>
                         <form method="POST" action="">
                    <div class="edit_form">
                        <img src="images/<?php echo $row['image']; ?>" alt="">
                        <h3><?php echo $row['name']; ?></h3>
                        <div class="price">Price:<?php echo $row['price']; ?></div>
                        <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">
                        <input type="hidden" name="product_image"value="<?php echo $row['image']; ?>">
                        <input type="submit" class="submit_btn cart_btn" name="add_to_cart" value="add to cart">
                    </div>
                  </form>
                        <?php
                    }

                   }else{
                    echo "<div class='empty_text'>No products Available</div>";
                   }
                    ?>
                    
                </div>
            </h1>
        </section>
    </div>
</body>
</html>