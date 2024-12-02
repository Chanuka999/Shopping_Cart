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
            <table>
                <thead>
                    <th>Sl No</th>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                      $sql = "SELECT * FROM products";

                      $res = mysqli_query($conn,$sql);
                      
                      $count = mysqli_num_rows($res);

                      if($count>0){
                        echo "yes";
                      }else{
                        echo "No";
                      }

                    ?>
                    <tr>
                    <td>1</td>
                    <td>image</td>
                    <td>name</td>
                    <td>1000</td>
                    <td>
                        <a href="" class="delete_product_btn"><i class="fas fa-trash"></i></a>
                        <a href="" class="update_product_btn"><i class="fas fa-edit"></i></a>
                    </td>
                  </tr>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>