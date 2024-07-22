<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <link rel = "icon" href = "images/logo.PNG" type = "image/png">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style1.css">
        

    <!-- custom js file link  -->
    <script src="js/script.js" defer></script>

</head>
<body>

<!-- header section starts  -->

<?php include "header.php";?>

<!-- header section  -->

<section class="heading">
    <h1>our products</h1>
    <p> <a href="index.php">home</a> >> products </p>
</section>

<!-- header section -->

<!-- prodcuts section starts  -->


      
<div class="container">

<section class="products">


   <div class="box-container">

      <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `products`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="" method="post">
         <div class="box">
            <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
            <h3><?php echo $fetch_product['name']; ?></h3>
            <div class="price"><?php echo $fetch_product['price']; ?>DH</div>
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">      
            <button class="btn"><a href="login.php" >add to cart</a></button>
           
         </div>
      </form>
      <?php
         };
      };
      ?>

   </div>

</section>
</div>
      

   
<?php include "footer.php";?>

<!-- prodcuts section ends -->

</body>
</html>