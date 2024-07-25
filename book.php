<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
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
   <div class="heading" style="background:url(image/about2.jpg) no-repeat">
      <h1>book now</h1>
   </div>
  <!-- bookng section starts -->
  <section class="booking">
   <h1 class="heading-title">book your trip!</h1>
   <form action="book_form.php" method="post" class="book-form">
      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div>
      </div>
      <input type="submit"  value="pay now" class="btn" name="send">
   </form>
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