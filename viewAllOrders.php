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
    <h1>Order Details</h1>
    <p> <a href="admin.php">Dashbord</a> >> Orders </p>
</section>

<div id="ordersBtn" >
 
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Customer</th>
        <th>Email</th>
        <th>Payment Method</th>
        <th>City</th>
     </tr>
    </thead>
     <?php
      include_once "config.php";
      $sql="SELECT * from orders";
      $result=$conn-> query($sql);
      
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
       <tr>
          <td><?=$row["name"]?></td>
          <td><?=$row["email"]?></td>
          <td><?=$row["method"]?></td>
          <td><?=$row["city"]?></td>
         
        </tr>
    <?php
            
        }
      }
    ?>
     
  </table>
   
</div>
