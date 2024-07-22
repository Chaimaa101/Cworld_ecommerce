<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      $_SESSION['name'] = $row['name'];
      if($row["user_type"]=="user"){
        header('location: user.php');
      }
      elseif($row["user_type"]=="admin"){
  	  header('location: admin.php');
  	}else {
      $message[] = "Wrong email/password combination";

}
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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

<!-- header section ends -->

<!-- header section  -->

<section class="heading">
    <h1>account</h1>
    <p> <a href="index.php">home</a> >> login </p>
</section>

<!-- header section -->

<!-- login form section starts -->

<section class="login-form">

    <form action="" method="POST">
        <h3>user login</h3>
        <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="email" name="email" placeholder="enter your email" id="">
        </div>
        <div class="inputBox">
            <span class="fas fa-lock"></span>
            <input type="password" name="password" placeholder="enter your password" id="">
        </div>
        <input type="submit" name="submit" value="sign in" class="btn">
        <div class="flex">
            
        </div>
       <button class="btn"><a href="register.php" >create an account</a></button>
    </form>

</section>

<!-- login form section ends -->

<?php include "footer.php";?>

</body>
</html>