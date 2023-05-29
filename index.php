<?php
include 'connection.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login_Page.php');
}

if (isset($_POST['add_to_cart'])) {
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if (mysqli_num_rows($check_cart_numbers) > 0) {
      $message[] = 'already added to cart!';
   } else {
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css_style/style.css">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
   <?php include 'header.php'; ?>

   <div class="alert alert-success" id="result">
      <strong id="header"></strong>
      <p id="message"></p>
   </div>
   <section class="home">

      <div class="content">
         <h3>Unleash a realm of boundless opportunities right at your fingertips.</h3>
         <p>Experience the convenience of shopping from your own home as we deliver your beloved products straight to
            your door.</p>
         <a href="aboutPage.php" class="white-btn">Discover More</a>
      </div>

   </section>

   <section class="products">

      <h1 class="title">Latest Products</h1>

      <div class="box-container">

         <?php
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if (mysqli_num_rows($select_products) > 0) {
            while ($fetch_products = mysqli_fetch_assoc($select_products)) {
               ?>
               <form action="" method="post" class="box">
                  <img class="image" src="Products_Added/<?php echo $fetch_products['image']; ?>" alt="">
                  <div class="name">
                     <?php echo $fetch_products['name']; ?>
                  </div>
                  <div class="price">$
                     <?php echo $fetch_products['price']; ?>/-
                  </div>
                  <input type="number" min="1" name="product_quantity" value="1" class="qty">
                  <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                  <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
                  <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
                  <input type="submit" value="add to cart" name="add_to_cart" class="btn">
               </form>
               <?php
            }
         } else {
            echo '<p class="empty">No products added yet!</p>';
         }
         ?>
      </div>
      <div class="load-more" style="margin-top: 2rem; text-align:center">
         <a href="shop.php" class="option-btn">Load More</a>
      </div>

   </section>

   <section class="about">

      <div class="flex">

         <div class="image">
            <img src="images/AboutBanner.png" alt="">
         </div>

         <div class="content">
            <h3>About Us</h3>
            <p>We take great pride in providing our esteemed customers with a smooth and effortless online shopping
               journey on our ecommerce website.</p>
            <a href="aboutPage.php" class="btn">Read More</a>
         </div>

      </div>

   </section>

   <section class="home-contact">

      <div class="content">
         <h3>Have any questions?</h3>
         <p>How can customer engagement and loyalty be effectively enhanced on an ecommerce website?</p>
         <a href="contact_Page.php" class="white-btn">Contact Us</a>
      </div>

   </section>

   <?php include 'footer.php'; ?>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <script>
      var xhttp = new XMLHttpRequest();

      xhttp.onreadystatechange = function () {
         if (this.readyState == 4 && this.status == 200) {
            var xmlContent = this.responseText;

            var parser = new DOMParser();

            var xmlDoc = parser.parseFromString(xmlContent, 'text/xml');

            var data = xmlDoc.getElementsByTagName('messages')[0].textContent;

            document.getElementById('result').textContent = data;
         }
      };


      xhttp.open('GET', 'Mascarinas_IT2A_HappyShop.xml', true);
      xhttp.send();
   </script>
</body>

</html>