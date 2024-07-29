<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/baker_bite/app/asset/css/header.css">
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
                    <li><a href="http://localhost/baker_bite/app/views/gallery.php">GALLERY</a></li>
                    <li class="a"><a href="http://localhost/baker_bite/app/views/about.php"style="color:#EB684A">ABOUT US</a></li>
                    <li><a href="http://localhost/baker_bite/app/views/contact.php">CONTACT US</a></li>

                </ul>
            </div>
            <i class="fa-solid fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>About Us</h1>
    </section>

<!-- About us content -->
<!-- <section class="about-us">
    <div class="row">
        <div class="about-col">
            <h1>Bakerz Bite</h1>
            <p>Since its launch, Bakerz Bite has flourished into a reputable bakery and café, known for its passionate craftsmanship and commitment to quality. Specializing in an impressive variety of baked goods, we ensure every item is made from the finest ingredients, guaranteeing a delightful experience for every customer.</p>
        </div>
        <div class="about-col">
            <img src="http://localhost/baker_bite/app/asset/img/pink.jpg" >
        </div>
        <div class="about-col">
            <h1>Fresh cakes every day</h1>
            <p>Our commitment to quality is unwavering. At Bakerz Bite, we believe in using only the best ingredients, such as real butter, fresh cream, and unbleached flour. We source our ingredients carefully to ensure that every bite you take is not only delicious but also wholesome. This dedication to quality extends to everything we make, from our simplest bread to our most elaborate desserts.</p>
        </div>
        <div class="about-col">
            <img src="http://localhost/baker_bite/app/asset/img/pink.jpg" >
        </div>
        <div class="about-col">
            <h1>Diverse choices</h1>
            <p>At Bakerz Bite, we pride ourselves on an extensive menu featuring over 300 varieties of baked goods. Each item is made fresh in-store every day by our skilled bakers who bring their expertise and creativity to every creation. Our selection includes:</p>
            <div class="choices">
                <div class="choice-col 1">
                    <h1>Artisan Pastries</h1>
                    <p>Flaky croissants, rich danishes, and buttery scones made with traditional techniques.</p>
                </div>
                <div class="choice-col 2">
                    <h1>Gourmet Cakes and Desserts</h1>
                    <p>From classic chocolate cakes to intricate layer cakes and tarts, each dessert is a masterpiece.</p>
                </div>
                <div class="choice-col 3">
                    <h1>Handcrafted Beverages</h1>
                    <p>Complement your treat with our range of specialty coffees, teas, and refreshing beverages, all crafted to perfection.</p>
                </div>
            </div>
            <a href="" class="hero-btn red-btn">EXPLORE NOW</a>

        </div>
        <div class="about-col">
            <img src="http://localhost/baker_bite/app/asset/img/pink.jpg" >
        </div>
        <div class="about-col">
            <h1>Dedicated service</h1>
            <p>We believe in treating our customers like family, which means we would never use any ingredient that we wouldn’t serve to our loved ones. This philosophy is at the heart of everything we do and is reflected in our welcoming atmosphere and attentive service. At Bakerz Bite, every customer is greeted with a smile and treated to the highest standards of hospitality.</p>
        </div>
        <div class="about-col">
            <img src="http://localhost/baker_bite/app/asset/img/pink.jpg" >
        </div>
    </div>
</section> -->
<section class="about-us tabbed-layout">
    <div class="tabs">
        <button class="tab-button" data-tab="tab-1">About Us</button>
        <button class="tab-button" data-tab="tab-2">Fresh Cakes</button>
        <button class="tab-button" data-tab="tab-3">Diverse Choices</button>
        <button class="tab-button" data-tab="tab-4">Dedicated Service</button>
    </div>
    <div class="tab-content">
        <div id="tab-1" class="tab-pane active">
            <h1>Bakerz Bite</h1>
            <p>Since its launch, Bakerz Bite has flourished into a reputable bakery and café, known for its passionate craftsmanship and commitment to quality. Specializing in an impressive variety of baked goods, we ensure every item is made from the finest ingredients, guaranteeing a delightful experience for every customer.</p>
        </div>
        <div id="tab-2" class="tab-pane">
            <h1>Fresh cakes every day</h1>
            <p>Our commitment to quality is unwavering. At Bakerz Bite, we believe in using only the best ingredients, such as real butter, fresh cream, and unbleached flour. We source our ingredients carefully to ensure that every bite you take is not only delicious but also wholesome. This dedication to quality extends to everything we make, from our simplest bread to our most elaborate desserts.</p>
        </div>
        <div id="tab-3" class="tab-pane">
            <h1>Diverse choices</h1>
            <p>At Bakerz Bite, we pride ourselves on an extensive menu featuring over 300 varieties of baked goods. Each item is made fresh in-store every day by our skilled bakers who bring their expertise and creativity to every creation. Our selection includes:</p>
            <div class="choices">
                <div class="choice-col">
                    <h1>Artisan Pastries</h1>
                    <p>Flaky croissants, rich danishes, and buttery scones made with traditional techniques.</p>
                </div>
                <div class="choice-col">
                    <h1>Gourmet Cakes and Desserts</h1>
                    <p>From classic chocolate cakes to intricate layer cakes and tarts, each dessert is a masterpiece.</p>
                </div>
                <div class="choice-col">
                    <h1>Handcrafted Beverages</h1>
                    <p>Complement your treat with our range of specialty coffees, teas, and refreshing beverages, all crafted to perfection.</p>
                </div>
            </div>
            <a href="#" class="hero-btn red-btn explore-btn">EXPLORE NOW</a>
        </div>
        <div id="tab-4" class="tab-pane">
            <h1>Dedicated service</h1>
            <p>We believe in treating our customers like family, which means we would never use any ingredient that we wouldn’t serve to our loved ones. This philosophy is at the heart of everything we do and is reflected in our welcoming atmosphere and attentive service. At Bakerz Bite, every customer is greeted with a smile and treated to the highest standards of hospitality.</p>
        </div>
    </div>
</section>

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
                <li><a href="#"><i class="fa-solid fa-house"></i> Số 8, Tôn Thất Thuyết, Mỹ Đình, Từ Liêm, Hà Nội</a></li>
                <li><a href="#"><i class="fa-solid fa-envelope"></i> support@bakerbite.vn</a></li>
                <li><a href="#"><i class="fa-solid fa-phone fa-flip-horizontal"></i> 024 3856 3856</a></li>
1                <li><a href="#"><i class="fa-solid fa-money-check"></i> 0103833363</a></li>
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

        document.querySelectorAll('.tab-button').forEach(button => {
    button.addEventListener('click', () => {
        const tabId = button.getAttribute('data-tab');
        document.querySelectorAll('.tab-pane').forEach(pane => {
            pane.classList.remove('active');
        });
        document.getElementById(tabId).classList.add('active');
    });
});

    </script>
</body>
</html>