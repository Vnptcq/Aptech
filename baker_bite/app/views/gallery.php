<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/baker_bite/app/asset/css/header.css">
    <link rel="stylesheet" href="http://localhost/baker_bite/app/asset/css/gallery.css">

    <title>About Us</title>
</head>
<body>
    <section class="sub-header">
        <nav>
            <a href="http://localhost/baker_bite/app/views/layouts/header.php">
                <img src="http://localhost/baker_bite/app/asset/img/baker_bite-logo.png">
            </a>
            <div class="nav-links" id="navLinks">
            <i class="fa-solid fa-xmark" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="http://localhost/baker_bite/app/views/layouts/header.php">HOME</a></li>
                    <li><a href="http://localhost/baker_bite/app/views/product.php">PRODUCTS</a></li>
                    <li class="a"><a href="http://localhost/baker_bite/app/views/gallery.php"style="color:#EB684A">GALLERY</a></li>
                    <li><a href="http://localhost/baker_bite/app/views/about.php">ABOUT US</a></li>
                    <li><a href="http://localhost/baker_bite/app/views/contact.php">CONTACT US</a></li>

                </ul>
            </div>
            <i class="fa-solid fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>GALLERY</h1>
        <p>Explore our bakery's photo gallery to indulge in the visual delight of artisan breads, pastries, and cakes, crafted with passion and quality.</p>
    </section>

<!-- gallery -->
<input type="radio" name="Photos" id="check1" cheked>
  <input type="radio" name="Photos" id="check2" >
  <input type="radio" name="Photos" id="check3" >
  <input type="radio" name="Photos" id="check4" >

  <div class="container">
       <h2 class="title">OUR PHOTO GALLERY </h2>
    <div class="top-content">
      <h3 class="topic">Photo Gallery </h3>
      <label for="check1">All Photos</label>
      <label for="check2">Cake Photos</label>
      <label for="check3">Drink Photos</label>
      <label for="check4">Bag Photos</label>
    </div>

    <div class="photo-gallery">
         <div class="pic place">
           <img src="http://localhost/baker_bite/app/asset/img/Angelina_Jolie.jpg"  alt="">
         </div>     

         <div class="pic Cake">
            <img src="http://localhost/baker_bite/app/asset/img/Angelina_Jolie.jpg" alt="">
         </div>

         <div class="pic Drink">
            <img src="http://localhost/baker_bite/app/asset/img/Angelina_Jolie.jpg"  alt="">
         </div>

         <div class="pic Drink">
            <img src="http://localhost/baker_bite/app/asset/img/Angelina_Jolie.jpg"  alt="">
         </div>

         <div class="pic Bag">
            <img src="http://localhost/baker_bite/app/asset/img/Angelina_Jolie.jpg"  alt="">
         </div>   

         <div class="pic Cake">
          <img src="http://localhost/baker_bite/app/asset/img/Angelina_Jolie.jpg" alt="">
         </div>

         <div class="pic Cake">
          <img src="http://localhost/baker_bite/app/asset/img/Angelina_Jolie.jpg" alt="">
        </div>

        <div class="pic Cake">
          <img src="http://localhost/baker_bite/app/asset/img/Angelina_Jolie.jpg" alt="">
       </div>

       <div class="pic Cake">
          <img src="http://localhost/baker_bite/app/asset/img/Angelina_Jolie.jpg" alt="">
       </div>
    </div>




<!-- Footer -->
<section class="footer">
            <div class="footer-content">
                <img style="width:150px; height:auto " src="http://localhost/baker_bite/app/asset/img/baker_bite-logo.png" alt="">
                <p>Where smiles are served daily</p>
                <div class="icons">
                    <a href="https://www.facebook.com/bakerbite2014"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/bakersbitekkr?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://x.com/BiteBaker"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.youtube.com/@bakersbite"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
            
            <div class="footer-content">
                <h4>Product</h4>
                <li><a href="#">Cakes</a></li>
                <li><a href="#">Pastries</a></li>
                <li><a href="#">Drinks</a></li>
                <li><a href="#">Merchandize</a></li>
            </div>
            <div class="footer-content">
                <h4>Useful links</h4>
                <li><a href="#">Home</a></li>
                <li><a href="#">Product Categories</a></li>
                <li><a href="#">Visit us</a></li>
                <li><a href="#">Feedback</a></li>
            </div>
            <div class="footer-content">
                <h4>Contact</h4>
                <li><a href="#"><i class="fa-solid fa-house"></i> 8a Tôn Thất Thuyết, Mỹ Đình, Từ Liêm, Hà Nội</a></li>
                <li><a href="#"><i class="fa-solid fa-envelope"></i> support@bakerbite.vn</a></li>
                <li><a href="#"><i class="fa-solid fa-phone fa-flip-horizontal"></i> 024 3856 3856</a></li>
                <li><a href="#"><i class="fa-solid fa-money-check"></i> 0103833363</a></li>
            </div>
</section> 

<!----- Javascript for Toggle Menu ----->
    <script>

        var navLinks= document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }

    </script>
</body>
</html>