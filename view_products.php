<?php include "connect.php"; ?>
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
        <section class="display_products">
           
                    <?php
                      $sql = "SELECT * FROM products";
                       $sn=1;
                      $res = mysqli_query($conn,$sql);
                      
                      $count = mysqli_num_rows($res);

                      if($count>0){
                        echo " <table>
                <thead>
                    <th>Sl No</th>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Action</th>
                </thead>
                <tbody>";
                       while($row=mysqli_fetch_assoc($res)){
                       ?>
                       <tr>
                    <td><?php echo $sn; ?></td>
                    <td><img src="images/<?php echo $row['image']?>" alt=<?php $row['name']; ?>;></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['price'];  ?></td>
                    <td>
                        <a href="delete.php?delete=<?php echo $row['id']; ?>" class="delete_product_btn" onclick="return confirm('Are you sure yoa want to delete this product')"><i class="fas fa-trash"></i></a>
                        <a href="" class="update_product_btn"><i class="fas fa-edit"></i></a>
                    </td>
                  </tr>

                       <?php
                       $sn++;
                       }
                      }else{
                        echo "<div class='empty_text'>No products Available</div>";
                      }

                    ?>
                   
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>