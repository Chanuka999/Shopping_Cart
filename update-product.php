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
      <form action="" class="update-product product_container_box">
        <img src="" alt="">
        <input type="hidden">
        <input type="text" class="input_fields fields" required>
        <input type="number" class="input_fields fields" required>
        <input type="file" class="input_fields fields" required>
        <div class="btns">
          <input type="submit" class="edit_btn">
          <input type="reset" id="close-edit" value="Cancel" class="cancel_btn">
        </div>
      </form>
    </section>

</body>
</html>  