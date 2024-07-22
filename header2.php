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
            <li> <a href="admin.php" > Dashboard</a></li>
            <li><a href="viewCustomers.php" > Customers</a>
    
                </li>
                    <li><a href="viewAllOrders.php" >Orders</a></li>
                  
                    <li> <a href="#"> Products</a>
                    <ul>
                    <li><a href="viewAllProducts.php">Veiw</a></li>
                    <li><a href="updatePro.php">Update</a></li>
                </ul>
                </li>
                <li> <li> <a href="logout.php">logout</a></li></li>
        </ul>
    </nav>
    <?php
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
     
    </div>

 

</header>

<!-- header section ends -->
