<?php include "connect.php"; 

if(isset($_POST["submit"])){
  $update_id = $_POST["update_id"];
  $update_name = $_POST["update_name"];
  $update_price = $_POST["update_price"];
  $update_image = $_FILES["update_image"]["name"];
  $updateImage_tmp_name= $_FILES["update_image"]["tmp_name"];
  $updateImage_folder = "images/".$update_image;
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

    <section class="edit_container">
      <?php
        
       if(isset($_GET["edit"])){
        $edit_id = $_GET["edit"];

        $sql = "SELECT * FROM products WHERE id = $edit_id";

        $res = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res);

        if($count>0){
           $row=mysqli_fetch_assoc($res);
            ?>
      <form action="" method="POST" enctype="multipart/form-data" class="update-product product_container_box">
        <img src="images/<?php echo $row['image']; ?>" alt="">
        <input type="hidden" value="<?php echo $row['id']; ?>" name="update_id">
        <input type="text" class="input_fields fields" name="update_name" value="<?php echo $row['name']; ?>" required>
        <input type="number" class="input_fields fields" name="update_price" value="<?php echo $row['price']; ?>" required>
        <input type="file" class="input_fields fields" name="update_image" required>
        <div class="btns">
          <input type="submit" class="edit_btn" name="submit">
          <input type="reset" id="close-edit" value="Cancel" class="cancel_btn">
        </div>
      </form>

          <?php
           
        }else{
          echo "not a data in database";
        }
        
       }

    
      ?>
      
    </section>

</body>
</html>  