<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

     <!-- font awesome url from cdn link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
     <link rel="stylesheet" href="style.css">
</head>
<body>
   <section class="header">
      <a href="home.php" class="logo">Travel Booking Portal</a>
      <nav class="navbar">
         <a href="home.php">Home</a>
         <a href="about.php">about</a>
         <a href="package.php">package</a>
         <a href="book.php">book</a>
      </nav>
      <div id="menu-btn" class="fas fa-bars"></div>
   </section>
   <!-- home section start -->
   <section class="home">
      <div class=" swiper-container home-slider">
         <div class="swiper-wrapper">
            <div class="swiper-slide slide" style=" background:url(image/img5.jpeg) no-repeat">
               <div class="content">
                 <span>travel,love,joy</span>
                 <h6>Adventure is worthwhile</h6>
                 <a href="package.php" class="btn">discover more</a>
               </div>
   
            </div>
            <div class="swiper-slide slide" style=" background:url(image/img3.jpeg) no-repeat">
               <div class="content">
                 <span>travel,love,joy</span>
                 <h6>Travel far enough</h6>
                 <a href="package.php" class="btn">discover more</a>
               </div>
   
            </div>
            <div class="swiper-slide slide" style=" background:url(image/img1.jpeg) no-repeat">
               <div class="content">
                 <span>travel,love,joy</span>
                 <h6> World is wide</h6>
                 <a href="package.php" class="btn">discover more</a>
               </div>
   
            </div>
         </div>
         <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      </div>
   </section>
   <!-- service section start -->
   <section class="services">
   <h1 class="heading-title"> our services</h1>
   <div class="box-container">
      <div class="box">
         <img class="gify-img1" src="image/i9.png" alt="">
         <h3>adventure</h3>
      </div>
      <div class="box">
         <img class="gify-img1" src="image/i8.png" alt="">
         <h3>tour guide</h3>
      </div>
      <div class="box">
         <img class="gify-img1" src="image/location.gif" alt="">
         <h3>location</h3>
      </div>
      <div class="box">
         <img class="gify-img1" src="image/i0.gif" alt="">
         <h3>trekking</h3>
      </div>
      <div class="box">
         <img class="gify-img1" src="image/i3.gif" alt="">
         <h3>camping</h3>
      </div>
      <div class="box">
         <img class="gify-img1" src="image/i5.png" alt="">
         <h3>off road</h3>
      </div>
      <div class="box">
         <img class="gify-img1" src="image/i1.gif" alt="">
         <h3>camp fire</h3>
      </div>
   </div>
   </section>
   <!-- HOme about section starts -->
   <section class="home-about">
      <div class="image">
         <img src="image/img2.jpeg" alt="">
      </div>
      <div class="content">
         <h3>About Us</h3>
         <p>Travel Booking Portal is a software web application to book multiple types of ticket online. It provides useful features to book a tour from anywhere in the world by a single dynamic website which will help the user to know all about the places and tour details in a single website. </p>
         <a href="about.php" class="btn" >read more</a>
      </div>
   </section>
   <!-- home packages section starts -->
   <section class="home-packages">
      <h1 class="heading-title">our packages</h1>
      <div class="box-container">
         <div class="box">
            <div class="image">
               <img src="image/pack3.jpg" alt="">
            </div>
            <div class="content">
               <h3>adventure & tour</h3>
               <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, ad.</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="image/pack2.jpg" alt="">
            </div>
            <div class="content">
               <h3>adventure & tour</h3>
               <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, ad.</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="image/pack1.jpg" alt="">
            </div>
            <div class="content">
               <h3>adventure & tour</h3>
               <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, ad.</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

      </div>
    <div class="load-more"><a href="package.php" class="btn">load more</a></div>
   </section>

   <!-- home offer section starts -->
   <section class="home-offer">
      <div class="content">
         <h3>upto 50% off</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, culpa ex delectus excepturi vel nostrum officiis dolore ipsar sit amet consectetur adipisicing elit. </p>
         <a href="book.php" class="btn">book now</a>
      </div>

   </section>


   <!-- footer section starts -->
   <section class="footer">
      <div class="box-container">
         <div class="box">
            <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i>  Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
         </div>
         <div class="box">
            <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>  
         </div>
         <div class="box">
            <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i>+991-842-7691 </a>
         <a href="#"> <i class="fas fa-phone"></i>+111-242-7691 </a>
         <a href="#"> <i class="fas fa-envelope"></i> shejal76@gmail.com</a>
         <a href="#"> <i class="fas fa-map"></i>Ballia,india-277304</a>  
         </div>
         <div class="box">
           <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
         </div>
      </div>
      <div class="credit">created by <span>Miss. Shejal Singh</span> | all rights reserved!</div>
   </section>

   <!-- swiper js link -->
   <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
   <script src="script.js"></script>
</body>
</html>
