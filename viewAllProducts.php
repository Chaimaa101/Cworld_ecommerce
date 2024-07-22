<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style1.css">
        <link rel = "icon" href = "images/logo.PNG" type = "image/png">
       <script src="js/script.js" defer></script>
  </head>
</head>
<body >
<?php
            include "header2.php";
            include_once "config.php";
        ?>

<section class="heading">
    <h1>Product Items</h1>
    <p> <a href="admin.php">Dashbord</a> >> Products </p>
</section>

<div >
  
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Code</th>
        <th class="text-center">Product Image</th>
        <th class="text-center">Product Name</th>
        <th class="text-center">Unit Price</th>
      </tr>
    </thead>
    <?php
      include_once "config.php";
      $sql="SELECT * from products";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><img height='100px' src="<?php echo $fetch_product['image']; ?>"></td>
      <td><?=$row["name"]?></td>      
      <td><?=$row["price"]?></td>     

      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  

  
</div>
   