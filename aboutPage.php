<?php

include 'connection.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login_Page.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css_style/style.css">

</head>

<body>

   <?php include 'header.php'; ?>

   <div class="heading">
      <h3>about us</h3>
      <p> <a href="index.php">Home</a> / About </p>
   </div>

   <section class="about">

      <div class="flex">

         <div class="image">
            <img src="images/AboutBanner.png" alt="">
         </div>

         <div class="content">
            <h3>why choose us?</h3>
            <p>Affordable and Competitive Pricing: We recognize the significance of providing value for your money. Our
               pricing remains competitive, allowing you to access high-quality products at affordable rates. We
               consistently monitor and adjust our prices to guarantee that you receive the most favorable deals.</p>
            <p>Efficient and Dependable Shipping: We acknowledge the importance of timely delivery. By collaborating
               with reputable shipping partners, we ensure swift processing and reliable delivery of your orders. Expect
               your purchases to arrive promptly at your designated location.</p>
            <a href="contact_Page.php" class="btn">contact us</a>
         </div>

      </div>

   </section>

   <section class="reviews">

      <h1 class="title">client's reviews</h1>

      <div class="box-container">

         <div class="box">
            <img src="images/pic1.png" alt="">
            <p>Ang mga kategorya ng mga produkto ay malinaw na nakaporma, na nagpapadali sa paghahanap ng hinahanap ko.
               Ang proseso ng pag-checkout ay naging magaan, at natanggap ko ang aking order sa loob ng inaasahang
               panahon. Responsibo at matulungin din ang customer support team kapag mayroon akong katanungan.s</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Manny Pacquiao</h3>
         </div>

         <div class="box">
            <img src="images/pic2.png" alt="">
            <p> I value the comprehensive product descriptions, specifications, and customer reviews provided. The
               search functionality enables me to swiftly locate desired items within the shop. Consistently, I have had
               positive experiences on their website, and their expedited shipping service solidifies them as my
               preferred choice among other ecommerce platforms I have encountered.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Iron Man</h3>
         </div>

         <div class="box">
            <img src="images/pic3.png" alt="">
            <p>Their website boasts user-friendly navigation, and they offer an extensive range of electronics at
               competitive prices. The customer service provided is exceptional, characterized by swift response times
               and a helpful team. Timely delivery of orders has consistently been ensured, and any encountered issues
               were promptly and efficiently addressed.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Thor</h3>
         </div>

      </div>

   </section>

   <section class="authors">

      <h1 class="title">Web Designer</h1>

      <div class="box-container">

         <div class="box">
            <img src="images/Dev1.png" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Nielven Mascarinas</h3>
         </div>

         <div class="box">
            <img src="images/Dev2.png" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Ryan Natividad</h3>
         </div>

         <div class="box">
            <img src="images/Dev3.png" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Marc Macaysa</h3>
         </div>

      </div>

   </section>







   <?php include 'footer.php'; ?>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>