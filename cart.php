<?php  include "connect.php";

if(isset($_POST["update"])){
    
    $update_quantity = $_POST["update_quantity"];
    $update_id = $_POST["update_id"];


    $sql2 = "UPDATE cart set quantity=$update_quantity WHERE id = $update_id";

    $res2 = mysqli_query($conn,$sql2);

    if($res2){
        header("location: cart.php");
    }else{
        echo "quantity not updated";
    }
}


if(isset($_GET["remove"])){
    $remove  = $_GET["remove"];

    $sql3="DELETE FROM cart WHERE id=$remove";

    $res3=mysqli_query($conn,$sql3);
}

if(isset($_GET["delete_all"])){
    $sql4 = "DELETE FROM cart";
    $res4 = mysqli_query($conn,$sql4);
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
        <section class="shopping_cart">
            <h1 class="heading">MY Cart</h1>
            <table>
                <?php
                $sql ="SELECT * FROM cart";

                $res = mysqli_query($conn,$sql);
                $count = mysqli_num_rows($res);
                 $sn=1;
                 $grand_total=0;
                if($count>0){
                    echo"  <thead>
                    <th>Sl No</th>
                    <th>Product Name</th>
                    <th>product Image</th>
                    <th>product Price</th>
                    <th>product Quantity</th>
                    <th>Total price</th>
                    <th>Action</th>
                </thead>
                <tbody>";
                 while($row=mysqli_fetch_assoc($res)){
                    ?>
                      <tr>
                    <td><?php echo $sn;?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td>
                        <img src="images/<?php echo $row['image']; ?>" alt="/">
                    </td>
                    <td><?php echo $row['price']; ?></td>
                    <td>
                        <form action="" method="POST">
                        <input type="hidden" value="<?php echo $row['id']; ?>" name="update_id"> 
                        <div class="quantity_box">
                          
                            <input type="number" min="1" value="<?php echo $row['quantity']; ?>" name="update_quantity">
                            <input type="submit" class="update_quantity" value="update" name="update">
                        </div>
                      </form>
                     </td>
                    <td><?php echo $total= number_format($row['price'] * $row['quantity'] )?></td>
                    <td>
                        <a href="cart.php?remove=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure want to delete item')">
                            <i class="fas fa-trash"></i>Remove
                        </a>
                    </td>
                  </tr>
                    <?php
                    $sn++;
                    $grand_total += ($row['price'] * $row['quantity']);
                 }

                }else{
                    echo "<div class='empty_text'>Cart is empty</div>";
                }
                
                ?>
              
                 
                </tbody>
           </table>
           <?php
           if($grand_total>0){
            echo" <div class='table_bottom'>
            <a href='shop_products.php' class='bottom_btn'>Continue Shoppng</a>
            <h3 class='bottom_btn'>Grand total:<span>$grand_total/-</span></h3>
            <a href='checkout.php' class='bottom_btn'>Procced to checkout></a>
           </div>";
           ?>
          

           <a href="cart.php?delete_all" onclick="return confirm('Are you sure want to delete items')" class="delete_all_btn">
            <i class="fas fa-trash"></i>Delete All
           </a>
           <?php
           }else{
            echo " ";
           }

           ?>

           
        </section>
    </div>
</body>
</html>