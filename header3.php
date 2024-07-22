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
            <li> <a href="user.php" ><i class="fa fa-home"></i> Products</a></li>
                    
                    <li> <a href="logout.php">logout</a></li>
        </ul>
    </nav>
    <?php
      $select_rows = mysqli_query($conn, "SELECT * FROM cart ") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="cart.php" class="fas fa-shopping-cart"><?php echo $row_count; ?></a>
   </div>
       


</header>

<!-- header section ends -->
