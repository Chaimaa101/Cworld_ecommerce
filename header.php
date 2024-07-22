<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel = "icon" href = "images/logo.PNG" type = "image/png">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style1.css">
    
    <!-- custom js file link  -->
    <script src="js/script.js" defer></script>

</head>
<body>
<header class="header">
   
    <a href="index.php" class="logo"> CWorld </a>

    <nav class="navbar">
        <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="products.php">products</a></li>
            <li><a href="about.php">about</a></li>
            <li><a href="contact.php">contact</a></li>
            <li><a href="#">account +</a>
                <ul>
                    <li><a href="login.php">login</a></li>
                    <li><a href="register.php">register</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="login.php" class="fas fa-shopping-cart"></a>
    </div>



</header>

<!-- header section ends -->
