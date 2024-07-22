<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style1.css">
      <!-- custom js file link  -->
      <script src="js/script.js" defer></script>
      <link rel = "icon" href = "images/logo.PNG" type = "image/png">

</head>
<body>
    <style>
 .home{
         
display: flex;
align-items: center;
min-height: 100vh;
background: url(images/bg_home.jpg) no-repeat;
background-size: cover;
background-position: center;
}
.home .content{
max-width: 55rem;
padding-left: 50PX;
}
.home .content h3{
font-size: 6rem;
color: #333;
}
.home .content span{
font-size: 3.5rem;
color:#fa7b6a;
padding: 1rem 0;
line-height: 1.5;
}
.home .content p{
font-size: 1.5rem;
color:#333;
padding: 1rem 0;
line-height: 1.5;
}

.banner{
  position: relative;
}

.banner .box-container{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
}

.banner .box-container .box{
  flex:1 1 35rem;
  margin:1rem;
  padding:4rem 2rem;
  border-radius: 1rem;
  box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
  border:.1rem solid rgba(0,0,0,.3);
  text-align: center;
  background-size: cover !important;
  background-position: center !important;
  position: relative;
  overflow: hidden;
}

.banner .box-container .box h3{
  font-size: 4rem;
  color:#333;
}

.banner .box-container .box .price{
  font-size: 5.5rem;
  color:var(--red);
}

.banner .box-container .box .price span{
  font-size: 2.5rem;
}

.banner .box-container .box p{
  font-size:1.7rem;
  padding:1rem 0;
  color:#666;
}

.banner .box-container .box .choise{
  position: absolute;
  top:0; right:-5rem;
  background:var(--red);
  color:#fff;
  font-size: 2rem;
  padding:.6rem 5.5rem;
  transform: rotate(45deg);
}
*, *::before, *::after {
  box-sizing: border-box;
}

body {
  margin: 0;
}

.carousel {
  width: 97vw;
  height: 100vh;
  position: relative;
  margin-right: 50px;
}

.carousel > ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

.slide {
  position: absolute;
  inset: 0;
  opacity: 0;
  transition: 200ms opacity ease-in-out;
  transition-delay: 200ms;
}

.slide > img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
}

.slide[data-active] {
  opacity: 1;
  z-index: 1;
  transition-delay: 0ms;
}

.carousel-button {
  position: absolute;
  z-index: 2;
  background: none;
  border: none;
  font-size: 4rem;
  top: 50%;
  transform: translateY(-50%);
  color: rgba(255, 255, 255, .5);
  cursor: pointer;
  border-radius: .25rem;
  padding: 0 .5rem;
  background-color: rgba(0, 0, 0, .1);
}

.carousel-button:hover,
.carousel-button:focus {
  color: white;
  background-color: rgba(0, 0, 0, .2);
}

.carousel-button:focus {
  outline: 1px solid black;
}

.carousel-button.prev {
  left: 1rem;
}

.carousel-button.next {
  right: 1rem;
}
    </style>
    <?php include "header.php";?>
   
    <section aria-label="Newest Photos">
    <div class="carousel" data-carousel>
      <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
      <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
      <ul data-slides>
        <li class="slide" data-active>
          <img src="images/pic11.jpg" alt="Nature Image #1">
        </li>
        <li class="slide">
          <img src="images/pic9.jpg" alt="Nature Image #2">
        </li>
        <li class="slide">
          <img src="images/pic10.jpg" alt="Nature Image #3">
        </li>
      </ul>
    </div>
  </section>
<section class="home" id="home">
    
        <div class="content">
            <h3>Every Vision of You</h3>
        <span> It’s always a good day to buy glasses online. </span>
<p>CWorld is the online glasses store of your dreams (according to you!). We putting a focus on affordable, high-quality eyewear, which is why our customers consistently rate us the best place to buy glasses.</p>
<a href="products.php" class="btn">shop now</a>

</div>

</section>
<!-- banner section starts  -->
<section class="banner up-and-down" id="banner">
    <div class="box-container">

        <div class="box" style="background: url(images/card-bg1.png) no-repeat;">
            <h3>Summer Style</h3>
            <div class="price"><span>$</span>20</div>
            <p>Get ready for warmer <br> weather with our most <br> colorful selection of eyewear.</p>
            <a href="#" class="btn">select plan</a>
        </div>

        <div class="box" style="background: url(images/card-bg2.png) no-repeat;">
            <span class="choise">best <br> choise</span>
            <h3>Glasses On Sale</h3>
            <div class="price"><span>$</span>50</div>
            <p>Good looking out. <br> Enjoy up to 50% off these <br> eyewear picks!</p>
            <a href="#" class="btn">select plan</a>
        </div>

        <div class="box" style="background: url(images/card-bg3.png) no-repeat;">
            <h3>Forever Pride</h3>
            <div class="price"><span>$</span>250</div>
            <p>Our most colorful collection in <br> honor of Pride and self- <br> expression always.</p>
            <a href="#" class="btn">select plan</a>
        </div>

    </div>

</section>

<?php include "footer.php";?>

</body>
</html>