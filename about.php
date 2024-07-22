<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel = "icon" href = "images/logo.PNG" type = "image/png">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style1.css">

    <!-- custom js file link  -->
    <script src="js/script.js" defer></script>

</head>
<body>

<?php include "header.php";?>

<!-- header section  -->

<section class="heading">
    <h1>about us</h1>
    <p> <a href="index.php">home</a> >> about </p>
</section>

<!-- header section -->

<!-- about section starts  -->

<section class="about">

    <h1 class="title">why choose us?</h1>

    <div class="row">

        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>the best eye glasses sellers</h3>
            <p>GlassesShop is one of the largest online eyewear  stores around the world.<br> After so many years of development, we have our own professional team, our own complete industrial chain from the design, material selection and production of glasses. We always uphold the principle of "high quality, rich styles, reasonable price",
                 committed to providing customers with the best products.</p>
            <a href="" class="btn">read more</a>
        </div>
        
    </div>

    <div class="icons-container">

        <div class="icons">
            <img src="images/icon-1.png" alt="">
            <h3>all sizes</h3>
        </div>

        <div class="icons">
            <img src="images/icon-2.png" alt="">
            <h3>free delivery</h3>
        </div>

        <div class="icons">
            <img src="images/icon-3.png" alt="">
            <h3>easy returns</h3>
        </div>

        <div class="icons">
            <img src="images/icon-4.png" alt="">
            <h3>easy payments</h3>
        </div>

        <div class="icons">
            <img src="images/icon-5.png" alt="">
            <h3>24/7 support</h3>
        </div>

    </div>

</section>

<!-- about section ends -->

<?php include "footer.php";?>
</body>
</html>