<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/baker_bite/app/asset/css/header.css">
    <link rel="stylesheet" href="http://localhost/baker_bite/app/asset/css/bestSelling.css">
    <title>header</title>
    
</head>
<body>
    <section class="header">
        <nav>
            <a href="http://localhost/baker_bite/app/views/layouts/header.php">
                <img src="http://localhost/baker_bite/app/asset/img/baker_bite-logo.png">
            </a>
            <div class="nav-links" id="navLinks">
            <i class="fa-solid fa-xmark" onclick="hideMenu()"></i>
                <ul>
                    <li ><a href="http://localhost/baker_bite/app/views/layouts/header.php" style="color:#EB684A">HOME</a></li>
                    <li><a href="http://localhost/baker_bite/app/views/product.php">PRODUCTS</a></li>
                    <li><a href="http://localhost/baker_bite/app/views/gallery.php">GALLERY</a></li>
                    <li><a href="http://localhost/baker_bite/app/views/about.php">ABOUT US</a></li>
                    <li><a href="http://localhost/baker_bite/app/views/contact.php">CONTACT US</a></li>

                </ul>
            </div>
            <i class="fa-solid fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="text-box">
            <h1>Welcome To Bakerz Bite</h1>
            <p>We invite you to visit Bakerz Bite and experience the difference that passion and quality can make.<br> Whether you’re stopping by for a quick coffee and pastry or selecting a cake for a special occasion,<br> we promise you’ll leave with a smile.</p>
            <a href="" class="hero-btn">BUY NOW !</a>
        </div>
    </section>
<!--=======DEAL=========-->
<section class="deals section">
        <div class="deals__container container grid">
            <div class="deals__item">
                <div class="deals__group">
                    <h3 class="deals__brand">Deal of the day</h3>
                    <span class="deals__category">Limited</span>
                </div>

                <h4 class="deals__title">Best cake of the day</h4>

                <div class="deals__price flex">
                    <span class="new__price">$149</span>
                    <span class="old__price">$200</span>
                </div>

                <div class="deals__group">
                    <p class="deals__countdown-text">Hurry Up! Offer End In:</p>
                    <div class="countdown">
                        <div class="countdown__amount">
                            <p class="countdown__period" id="days">0</p>
                            <span class="unit">Days</span>
                        </div>
                        <div class="countdown__amount">
                            <p class="countdown__period" id="hours">0</p>
                            <span class="unit">Hours</span>
                        </div>
                        <div class="countdown__amount">
                            <p class="countdown__period" id="mins">0</p>
                            <span class="unit">Mins</span>
                        </div>
                        <div class="countdown__amount-last">
                            <p class="countdown__period" id="sec">0</p>
                            <span class="unit">Sec</span>
                        </div>
                    </div>
                </div>

                <div class="deals__btn">
                    <a href="" class="deal-btn">Shop Now</a>
                </div>
            </div>

            <div class="deals__item">
                <div class="deals__group">
                    <h3 class="deals__brand">Deal of the day</h3>
                    <span class="deals__category">Limited</span>
                </div>

                <h4 class="deals__title">Best materials of the day</h4>

                <div class="deals__price flex">
                    <span class="new__price">$149</span>
                    <span class="old__price">$200</span>
                </div>

                <div class="deals__group">
                    <p class="deals__countdown-text">Hurry Up! Offer End In:</p>
                    <div class="countdown">
                        <div class="countdown__amount">
                            <p class="countdown__period" id="days1">0</p>
                            <span class="unit">Days</span>
                        </div>
                        <div class="countdown__amount">
                            <p class="countdown__period" id="hours1">0</p>
                            <span class="unit">Hours</span>
                        </div>
                        <div class="countdown__amount">
                            <p class="countdown__period" id="mins1">0</p>
                            <span class="unit">Mins</span>
                        </div>
                        <div class="countdown__amount-last">
                            <p class="countdown__period" id="sec1">0</p>
                            <span class="unit">Sec</span>
                        </div>
                    </div>
                </div>

                <div class="deals__btn">
                    <a href="" class="deal-btn">Shop Now</a>
                </div>
            </div>
        </div>
    </section>

<!-- Category -->
 <section class="category">
    <h1>Choose your Category</h1>
    <p></p>
    <div class="swiper mySwiper">
    <div class=" row swiper-wrapper">
        <div class="category-col swiper-slide">
            <img src="http://localhost/baker_bite/app/asset/img/pastries.jpg">
            <div class="layer">
                <h3>Artisan Pastries</h3>
            </div>
        </div>
        <div class="category-col swiper-slide">
            <img src="http://localhost/baker_bite/app/asset/img/dessert.jpg">
            <div class="layer">
                <h3>Gourmet Cakes and Desserts</h3>
            </div>
        </div>
        <div class="category-col swiper-slide">
            <img src="http://localhost/baker_bite/app/asset/img/drinks.jpg">
            <div class="layer">
                <h3>Handcrafted Beverages</h3>
            </div>
        </div>
        <div class="category-col swiper-slide">
            <img src="http://localhost/baker_bite/app/asset/img/drinks.jpg">
            <div class="layer">
                <h3>Handcrafted Beverages</h3>
            </div>
        </div>
        <div class="category-col swiper-slide">
            <img src="http://localhost/baker_bite/app/asset/img/drinks.jpg">
            <div class="layer">
                <h3>Handcrafted Beverages</h3>
            </div>
        </div>
        <div class="category-col swiper-slide">
            <img src="http://localhost/baker_bite/app/asset/img/drinks.jpg">
            <div class="layer">
                <h3>Handcrafted Beverages</h3>
            </div>
        </div><div class="category-col swiper-slide">
            <img src="http://localhost/baker_bite/app/asset/img/drinks.jpg">
            <div class="layer">
                <h3>Handcrafted Beverages</h3>
            </div>
        </div><div class="category-col swiper-slide">
            <img src="http://localhost/baker_bite/app/asset/img/drinks.jpg">
            <div class="layer">
                <h3>Handcrafted Beverages</h3>
            </div>
        </div>
      <!-- <div class="swiper-slide">Slide 4</div>
      <div class="swiper-slide">Slide 5</div>
      <div class="swiper-slide">Slide 6</div>
      <div class="swiper-slide">Slide 7</div>
      <div class="swiper-slide">Slide 8</div>
      <div class="swiper-slide">Slide 9</div> -->
    </div>
    <div class="swiper-pagination"></div>
  </div> 
        
             
    <!-- </div> -->

 </section>
<!--=============== NEW ARRIVALS ===============-->
<section class="new__arrivals container section">  
    <h3 class="section__title"><span>NEW</span> ARRIVALS</h3>

    <div class="swiper .new__container">
    <div class="swiper-wrapper">
        
        <div class="product__item swiper-slide">
            <div class="product__banner">
                <a href="details.html" class="product__image">
                    <img src="https://bakerz-bite.vercel.app/assets/DoubleChocResize.b1b4aebf.png" class="product__img default" alt="">
                    <img src="https://bakerz-bite.vercel.app/assets/LemonCakeResize.f485fbe3.png" class="product__img hover" alt="">
                </a>

                <div class="product__actions">
                    <a href="" class="action__btn" aria-label="Quick View">
                        <i class="fa-regular fa-eye"></i>
                    </a>
                    <a href="" class="action__btn" aria-label="Add To Wishlist">
                        <i class="fa-regular fa-heart"></i>
                    </a>
                    <a href="" class="action__btn" aria-label="Compare">
                        <i class="fa-solid fa-shuffle"></i>
                    </a>
                </div>

                <div class="product__badge light-pink">Hot</div>
            </div>

            <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="">
                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                </a>
                <div class="product__rating">
                   
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <div class="product__price flex">
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$232.85</span>
                </div>

                <a href="" class="action__btn cart__btn" aria-label="Add To Cart">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </div>
        <div class="product__item swiper-slide">
            <div class="product__banner">
                <a href="details.html" class="product__image">
                    <img src="https://bakerz-bite.vercel.app/assets/HoneyCakeResize.0aae142d.png" class="product__img default" alt="">
                    <img src="https://bakerz-bite.vercel.app/assets/PistachioResize.0d856fac.png" class="product__img hover" alt="">
                </a>

                <div class="product__actions">
                    <a href="" class="action__btn" aria-label="Quick View">
                        <i class="fa-regular fa-eye"></i>
                    </a>
                    <a href="" class="action__btn" aria-label="Add To Wishlist">
                        <i class="fa-regular fa-heart"></i>
                    </a>
                    <a href="" class="action__btn" aria-label="Compare">
                        <i class="fa-solid fa-shuffle"></i>
                    </a>
                </div>

                <div class="product__badge light-pink">Hot</div>
            </div>

            <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="">
                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                </a>
                <div class="product__rating">
                   
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <div class="product__price flex">
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$232.85</span>
                </div>

                <a href="" class="action__btn cart__btn" aria-label="Add To Cart">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </div>
        <div class="product__item swiper-slide">
            <div class="product__banner">
                <a href="details.html" class="product__image">
                    <img src="https://bakerz-bite.vercel.app/assets/RedVelvetCCResize.295d1232.png" class="product__img default" alt="">
                    <img src="https://bakerz-bite.vercel.app/assets/VanillaIcingCCResize.70dbd02d.png" class="product__img hover" alt="">
                </a>

                <div class="product__actions">
                    <a href="" class="action__btn" aria-label="Quick View">
                        <i class="fa-regular fa-eye"></i>
                    </a>
                    <a href="" class="action__btn" aria-label="Add To Wishlist">
                        <i class="fa-regular fa-heart"></i>
                    </a>
                    <a href="" class="action__btn" aria-label="Compare">
                        <i class="fa-solid fa-shuffle"></i>
                    </a>
                </div>

                <div class="product__badge light-pink">Hot</div>
            </div>

            <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="">
                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                </a>
                <div class="product__rating">
                   
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <div class="product__price flex">
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$232.85</span>
                </div>

                <a href="" class="action__btn cart__btn" aria-label="Add To Cart">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </div>
        <div class="product__item swiper-slide">
            <div class="product__banner">
                <a href="details.html" class="product__image">
                    <img src="https://bakerz-bite.vercel.app/assets/DoubleChocResize.b1b4aebf.png" class="product__img default" alt="">
                    <img src="https://bakerz-bite.vercel.app/assets/LemonCakeResize.f485fbe3.png" class="product__img hover" alt="">
                </a>

                <div class="product__actions">
                    <a href="" class="action__btn" aria-label="Quick View">
                        <i class="fa-regular fa-eye"></i>
                    </a>
                    <a href="" class="action__btn" aria-label="Add To Wishlist">
                        <i class="fa-regular fa-heart"></i>
                    </a>
                    <a href="" class="action__btn" aria-label="Compare">
                        <i class="fa-solid fa-shuffle"></i>
                    </a>
                </div>

                <div class="product__badge light-pink">Hot</div>
            </div>

            <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="">
                    <h3 class="product__title">Colorful Pattern Shirts</h3>
                </a>
                <div class="product__rating">
                   
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <div class="product__price flex">
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$232.85</span>
                </div>

                <a href="" class="action__btn cart__btn" aria-label="Add To Cart">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </div>
      <div class="swiper-slide">Slide 4</div>
      <!-- <div class="swiper-slide">Slide 5</div>
      <div class="swiper-slide">Slide 6</div>
      <div class="swiper-slide">Slide 7</div>
      <div class="swiper-slide">Slide 8</div>
      <div class="swiper-slide">Slide 9</div> -->
    </div>
      <div class=" swiper-pagination"></div>
  </div> 
    </section>
<!-- blog -->

<section class="blog">
    <h1>Our Blog</h1>
    <p>Make cakes every day.</p>
    <div class="swiper mySwiper">
    <div class="row swiper-wrapper">
        <div class="blog-col swiper-slide">
            <img src="http://localhost/baker_bite/app/asset/img/burnt-cheesecake.jpg" >
            <h3>HOW TO MAKE SOFT CHEESECAKE BURNT</h3>
            <p>How easy can a cake be to make? That is, put all the ingredients in a blender, blend until smooth, pour into a mold and then put in the oven</p>
        </div>
        <div class="blog-col swiper-slide">
            <img src="http://localhost/baker_bite/app/asset/img/oatmeal_banana.jpg" >
            <h3>HOW TO MAKE HEALTHY YOGURT OATMEAL BANANA CAKE</h3>
            <p>A "purely healthy", gluten-free cake, using 100% oatmeal, but still extremely soft, moist, and fragrant with the smell of fresh bananas.</p>
        </div>
        <div class="blog-col swiper-slide">
            <img src="http://localhost/baker_bite/app/asset/img/mousse-mango.jpg" >
            <h3>HOW TO MAKE MANGO – COCONUT – YOGURT MOUSSE</h3>
            <p>This year's summer cake!!!!!! A classic tropical combination of mango - coconut - yogurt, combined with a soft and spongy chocolate cake, in a shape that makes any "ocean soul" flutter.</p>
        </div>
        <div class="blog-col swiper-slide">
            <img src="http://localhost/baker_bite/app/asset/img/mousse-mango.jpg" >
            <h3>HOW TO MAKE MANGO – COCONUT – YOGURT MOUSSE</h3>
            <p>This year's summer cake!!!!!! A classic tropical combination of mango - coconut - yogurt, combined with a soft and spongy chocolate cake, in a shape that makes any "ocean soul" flutter.</p>
        </div>
        
        <!-- <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>   -->
    </div>
    <div class="swiper-pagination"></div>
    </div>

</section>

<!-----About us----->

    <section class="course">
        <h1>About Us</h1>
        <div class="row">
            <a href="http://localhost/baker_bite/app/views/about.php" class="course-col">
                <h3>Fresh cakes every day</h3>
                <p>Products are produced on the same day with quality and fresh ingredients.</p>
            </a>
            <a href="http://localhost/baker_bite/app/views/about.php" class="course-col">
                <h3>Diverse choices</h3>
                <p>The bakery chain offers more than 300 different kinds of baked goods, including artisan pastries, gourmet cakes and desserts, and handcrafted beverages.</p>
            </a>
            <a href="http://localhost/baker_bite/app/views/about.php" class="course-col">
                <h3>Dedicated service</h3>
                <p>Meticulousness, dedication and professionalism are always the lifeblood of service</p>
            </a>
            
        </div>
    
    
    </section>

<!-- feedbacks -->

<section class="feedbacks">
    <h1>Feedback</h1>
    <p>Some comments from our customers.</p>
    <div class="row">
        <div class="feedback-col">
            <img src="http://localhost/baker_bite/app/asset/img/Angelina_Jolie.jpg" >
            <div>
                <p>The cake looked and tasted lovely.</p>
                <h3>Angelina Jolie</h3>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>            </div>
        </div>
        <div>

        </div>
        <div class="feedback-col">
            <img src="http://localhost/baker_bite/app/asset/img/Tom_Cruise.jpg" >
            <div>
                <p>Just like to say thank you for the cupcakes, not only did they look lovely 
                they tasted it as well.</p>
                <h3>Tom Cruise</h3>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
            </div>
        </div>
    </div>
</section>

<!-- Call to action -->

<section class="cta">
    <h1>Enroll in our online baking courses anywhere in the world</h1>
    <a href="" class="hero-btn">CONTACT US</a>
</section>

<!-- Footer -->

<section class="footer">
            <div class="footer-content">
                <img style="width:150px; height:auto " src="http://localhost/baker_bite/app/asset/img/baker_bite-logo.png" alt="">
                <p>Where smiles are served daily</p>
                <div class="icons">
                    <a href="https://www.facebook.com/bakerbite2014" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/bakersbitekkr?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" ><i class="fa-brands fa-instagram"></i></a>
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
                <li><a href="#"><i class="fa-solid fa-house"></i> Số 8, Tôn Thất Thuyết, Mỹ Đình, Từ Liêm, Hà Nội</a></li>
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
    <!-- Linking SwiperJS script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="http://localhost/baker_bite/app/asset/js/script.js"></script>
</body>
</html>

