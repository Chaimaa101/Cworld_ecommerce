<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel = "icon" href = "images/logo.PNG" type = "image/png">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style1.css">
       
    <!-- custom js file link  -->
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="js/script.js" defer></script>

</head>
<body>
<style>
    body{
        background: linear-gradient(to right, #aecbe0,#fa7b6a);
    }
.container {
width: 100%;
height: 100vh;
display: flex;
justify-content: center;
align-items: center;
}
.message-card {
    margin-bottom: 100px;
    margin-top: 200px;
width: 600px;
height: 90vh;
background-color: rgba(255, 255, 255, 0.5);
border-radius: 10px;
display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
position: relative;
z-index: 1;
}
.message-card::after {
content: "";
position: absolute;
width: 100%;
height: 100%;
height: 100%;
background-color: rgba(255, 255, 255, 0.15);
transform: rotate(-5deg);
z-index: -1;
}
.message-card img {
margin-bottom: 15px;
}
.message-card h1 {
text-align: center;
margin-bottom: 20px;
color:#fff;
}
form {
display: flex;
flex-direction: column;
align-items: center;
}
form input, textarea {
border: 0;
outline: none;
margin: 10px 0;
padding: 20px;
border-radius: 8px;
background:rgba(255, 255, 255, 0.5);
width: 350px;
}
form button {
padding: 15px;
background: linear-gradient(to right, #aecbe0,#fa7b6a);
border: none;
font-size: 10px;
border-radius: 20px;
cursor: pointer;
outline: none;
width: 150px;
color: #fff;
}
</style>
<!-- header section starts  -->

<?php include "header.php";?>

<!-- header section  -->

<section class="heading">
    <h1>contact us</h1>
    <p> <a href="index.php">home</a> >> contact </p>
</section>

<!-- header section -->

<!-- contact section starts  -->


<body>
    
<section class="container">
<div class="message-card">
<div class="title">
<h1>leave your impression </h1>
</div>
<form onsubmit="sendEmail(); reset(); return false;">
<input type="text" id="name" placeholder="your name " required>
<input type="email" id="email" placeholder="email id " required>
<input type="text" id="phone" placeholder="phone no " required>
<textarea id="message" cols="30" rows="4" placeholder="leave your message"></textarea>
<button id="submit" type="submit"> send </button>
</form>

</div>
</section>



<!-- contact section ends -->

<?php include "footer.php";?>

<script src=" https://smtpjs.com/v3/smtp.js"></script>
    <script src="js/script.js" defer></script>
</body>
</html>