<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

   $select = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist!';
   }else{
      mysqli_query($conn, "INSERT INTO `user`(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
      $message[] = 'registered successfully!';
      header('location:login.php');
   }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
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
    <h1>account</h1>
    <p> <a href="index.php">home</a> >> register </p>
</section>

<!-- header section -->

<!-- header section -->

<!-- register form section starts -->

<section class="register-form">

    <form action="" method="POST">
        <h3>register now</h3>
        <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="text" name="name" placeholder="enter your name" id="">
        </div>
        <div class="inputBox">
            <span class="fas fa-envelope"></span>
            <input type="email" name="email" placeholder="enter your email" id="">
        </div>
        <div class="inputBox">
            <span class="fas fa-lock"></span>
            <input type="password" name="password" placeholder="enter your password" id="">
        </div>
        <div class="inputBox">
            <span class="fas fa-lock"></span>
            <input type="password" name="cpassword" placeholder="confirm your password" id="">
        </div>
        <input type="submit" name="submit" value="sign up" class="btn">
        <button class="btn"><a href="login.php" >already have an account</a></button>
    </form>

</section>

<!-- register form section ends -->

<?php include "footer.php";?>
</body>
</html>