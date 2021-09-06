<?php
/**
 * The base (and only) template
 *
 * @package WordPress
 * @subpackage intentionally-blank
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Luciana is set in Povljana, 400 m from Perilo Beach, and offers a balcony, garden, free WiFi and free private parking. The air-conditioned apartment consists of 2 bedrooms, a living room, a fully equipped kitchen with a fridge and a kettle, and 1 bathroom with a bath or shower and a hairdryer. A flat-screen TV is featured.">
    <meta name="keywords" content="Pag, Povljana, Apartments, Luciana, Vacation, Destination">
    <meta name="robots" content="max-snippet:20">
    <meta name="google" content="nositelinkssearchbox" />
    <meta name="author" content="">

    <title>Luciana Apartments</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <!--load all styles -->

    <!-- Custom styles for this template -->
    <style>
        .icons{position:relative;width:100%;padding:60px 3em 30px;display:flex;text-align:center;justify-content:center;align-items:baseline;background-color:#fff;z-index:1}.icons div{width:200px;padding:0 10px;display:flex;flex-direction:column;flex-wrap:nowrap;justify-content:space-between}i{color:#004aad;padding-top:40px;padding-bottom:20px}h1{margin-top:70px;padding-top:50px}h4{height:100px;margin:0;padding:20px 0 20px;font-size:22px;display:flex;align-items:center;justify-content:center}h4+p{padding-bottom:60px}.carousel-item img{width:100%;height:100%}.carousel-item{height:80vh;min-height:300px;background-position:center;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}#carouselExampleIndicators,carousel-control-next,carousel-control-prev{height:80vh!important}div.parallax-image{z-index:-1;-webkit-background-size:cover;-moz-background-size:cover;background-size:cover;top:0;margin-top:-100vh;height:100vh;position:-webkit-sticky;position:sticky}#beach-banner{display:flex;flex-wrap:wrap;justify-content:space-around;align-items:center;width:100%;height:30vh;min-height:300px}.beaches{height:100%;width:100%;max-width:80%;display:flex;flex-wrap:wrap;justify-content:space-around;align-items:center}.beaches h3{color:#fff;font-weight:400;margin:0;font-size:2rem;text-align:center}.beaches-link{margin:0;border-radius:100px;padding:4px 30px;margin-top:4px;border:2px solid #ff9f00;width:fit-content;background-color:#ff9f00;color:#fff;transition:.3s background-color;text-decoration:none;font-size:1.5rem;font-weight:400;letter-spacing:4px}.beaches-link:hover{background-color:transparent;color:#fff;text-decoration:none}.galleries-container{padding:150px 3em;position:relative;background-color:#fff;width:100%;z-index:1}.galleries{max-width:80%;height:100%;width:100%;margin:0 auto;display:flex;justify-content:space-between;align-items:center}.gallery{display:inline-flex;width:40%;height:40vh;background-position:center;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;transition:.3s;font-size:2.5em;padding:150px 0;margin:15px;border:2px solid #000;border-radius:4px}.galleries a{height:100%;width:100%;display:flex;justify-content:center;align-items:center;text-align:center;color:#fff;text-decoration:none}.galleries a div{height:100%;width:100%;display:flex;justify-content:center;align-items:center;text-align:center;color:#fff;text-decoration:none}.gallery:hover{opacity:.8}@media only screen and (max-width:415px){.beaches-link{font-size:1em;padding:4px 20px}.gallery{padding:50px 0}h1{margin-top:100px}.galleries-container{padding:80px 3em}}@media only screen and (max-width:500px) and (min-width:415px){.gallery{padding:80px 0}.galleries-container{padding:100px 3em}}@media only screen and (max-width:991px){.nav-home{padding-right:8px;margin-top:15px}.galleries{flex-wrap:wrap;justify-content:center}.gallery{margin:10px auto}}@media only screen and (max-width:1054px){.icons{flex-wrap:wrap}h4+p{padding-bottom:10px}}@media only screen and (max-width:1200px){h4{font-size:18px}h4+p{font-size:14px}.galleries{flex-direction:column}.gallery{width:100%}}@media only screen and (max-width:1500px) and (min-width:1200px){.gallery{padding:100px 0}}@media only screen and (min-width:1300px){h4{font-size:20px}}@media only screen and (min-width:1200px){.gallery{width:100%;height:30vh}}@media screen and (prefers-reduced-motion:no-preference){html{scroll-behavior:smooth}}.back-to-top-wrapper{visibility:hidden;transition:3s}.back-to-top-link{text-decoration:none;position:fixed;bottom:25px;right:55px;z-index:99;background-color:#004aad;color:#fff;border:1px solid #004aad;padding:10px 15px;border-radius:5px;transition:.3s}.back-to-top-link>i{color:#fff;transition:color .3s}.back-to-top-link:hover{text-decoration:none;background-color:transparent;color:#ff9f00;border:1px solid #004aad}.back-to-top-link>i{color:#fff}.back-to-top-link:hover>i{color:#ff9f00}.home-navbar{background-color:#f8f9fa!important;transition:.6s}.scrolled{background-color:#f8f9fa!important}.navbar-brand{padding-bottom:20px}.navbar-light .navbar-nav .active>.nav-link{color:#004aad}.navbar-light .navbar-nav .nav-home a{border-radius:20px;padding:4px 12px;margin-top:4px;border:1px solid #004aad;width:fit-content;transition:background-color .3s,color .3s}.navbar-light .navbar-nav .nav-home a:hover{background-color:#004aad;color:#fff}.navbar-light .navbar-nav .nav-contact a{border-radius:20px;padding:4px 12px;margin-top:4px;border:1px solid #ff9f00;background-color:#ff9f00;color:#fff;width:fit-content;transition:background-color .3s,color .3s}.navbar-light .navbar-nav .nav-contact a:hover{padding-top:4px;padding-bottom:4px;margin-top:4px;border:1px solid #ff9f00;background-color:transparent;color:#ff9f00}.navbar-nav .nav-link{padding-right:8px;padding-left:8px}.navbar-light .navbar-nav .nav-link{color:#000;font-weight:700;transition:background-color .3s,color .3s}.navbar-light .navbar-nav .nav-link:hover{color:#ff9f00}.social-media{background-color:#1c1c1c}.social-media .container-fluid{display:flex;flex-direction:row;justify-content:center}.social-media .social-link{background-color:#3a5795;width:40px;height:40px;margin:15px 2px;display:flex;justify-content:center;align-items:center;border-radius:5px;transition:.3s}.social-media .social-link:hover{background-color:#4060a4}.social-media .social-link:nth-of-type(2){background-color:#3d739c}.social-media .social-link:nth-of-type(2):hover{background-color:#437eab}.social-media i{color:#fff;font-size:1.2em}footer .container-fluid{max-width:60%}.foot{display:flex;flex-direction:row;justify-content:space-between;flex-wrap:wrap}.foot-middle{color:#767676;background-color:#252525}.foot-contact{display:flex;flex-direction:column;text-align:left}.foot-contact p a{text-decoration:none;color:#767676}.foot-contact p a:hover{text-decoration:none;color:#767676}h5{margin-bottom:24px;color:#c5c5c5}.foot-book{text-align:center;color:#8e8e8e;margin-top:24px;font-size:1.2em}.foot-book p{margin-bottom:30px;font-size:1.5em;color:#f8f9fa}.foot-book a{font-size:1.5em;display:flex;flex-wrap:nowrap;margin:0 auto;border-radius:100px;padding:4px 20px;border:1px solid #ff9f00;background-color:#ff9f00;color:#fff;width:fit-content;transition:background-color .3s,color .3s}.foot-book a:hover{padding-top:4px;padding-bottom:4px;border:1px solid #ff9f00;background-color:transparent;color:#ff9f00;text-decoration:none}.foot-copy{color:#666;background-color:#1c1c1c}@media only screen and (max-width:1054px){.foot{flex-direction:column;justify-content:center;text-align:center;align-items:center}.foot-contact{text-align:center}.nav-contact{margin-bottom:20px}}@media only screen and (max-width:360px){.foot-book a{font-size:1em}.nav-home{margin-top:20px}footer p{font-size:.8em}}
    </style>


    <?php wp_head(); ?>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top home-navbar">
        <div class="container">
            <a class="navbar-brand" href="https://apartments-luciana.netlify.app/index.html"><img
                    src="https://apartments-luciana.netlify.app/images/logo.svg" alt="Luciana Apartments"
                    style="width:200px; height:50px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active nav-home">
                        <a class="nav-link" href="https://apartments-luciana.netlify.app/index.html">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="current"
                            href="https://apartments-luciana.netlify.app/gallery-luciana.html">Luciana</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://apartments-luciana.netlify.app/gallery-dendy.html">Dendy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://apartments-luciana.netlify.app/gallery-trivia.html">Attractions</a>
                    </li>
                    <li class="nav-item nav-contact">
                        <a class="nav-link" href="https://apartments-luciana.netlify.app/contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active"
                    style="background-image: url('https://apartments-luciana.netlify.app/images/carousel/otokPag.jpg')">
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item"
                    style="background-image: url('https://apartments-luciana.netlify.app/images/carousel/martin-stroissnig-0UBj8bSj8vI-unsplash.jpg'); background-position: 0% 50%">
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item"
                    style="background-image: url('https://apartments-luciana.netlify.app/images/carousel/kat-von-wood-QNR6pbCZW3Y-unsplash.jpg'); background-position: 0% 70% ">
                </div>
                <!-- Slide Four - Set the background image for this slide in the line below -->
                <div class="carousel-item"
                    style="background-image: url('https://apartments-luciana.netlify.app/images/carousel/mate-melega-9xVoc7snzhI-unsplash.jpg'); background-position: 0% 50%">
                </div>
                <!-- Slide Five - Set the background image for this slide in the line below -->
                <div class="carousel-item"
                    style="background-image: url('https://apartments-luciana.netlify.app/images/carousel/gaspar-uhas-cyp1pum5PqI-unsplash.jpg'); background-position: 0% 30%">
                </div>
                <!-- Slide Six - Set the background image for this slide in the line below -->
                <div class="carousel-item"
                    style="background-image: url('https://apartments-luciana.netlify.app/images/carousel/gaspar-uhas-oG4sjAdB-lE-unsplash.jpg'); background-position: 0% 35%">
                </div>
                <!-- Slide Seven - Set the background image for this slide in the line below -->
                <div class="carousel-item"
                    style="background-image: url('https://apartments-luciana.netlify.app/images/carousel/ivan-ulamec-5BQr04Uquaw-unsplash.jpg'); background-position: 0% 20%">
                </div>
                <!-- Slide Eight - Set the background image for this slide in the line below -->
                <div class="carousel-item"
                    style="background-image: url('https://apartments-luciana.netlify.app/images/carousel/sophie-pedrinazzi-XdYqk2owJW8-unsplash.jpg'); background-position: 0% 30%">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <div class="foot-book">
                        <p>Reserve Your Apartment Stay Now!</p>
                        <a href="https://apartments-luciana.netlify.app/contact.html" class="mb-5">Book Now</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>



    <div class="container-fluid icons">
        <div>
            <i class="fas fa-snowflake fa-4x"></i>
            <h4>Air Conditioning</h4>
            <p>All apartments have an individual Air Conditiong system</p>
        </div>
        <div>
            <i class="fas fa-wifi fa-4x" style="color:#004AAD;"></i>
            <h4>Wireless Internet</h4>
            <p>Internet coverage is in all our rooms</p>
        </div>
        <div>
            <i class="fas fa-car fa-4x" style="color:#004AAD;"></i>
            <h4>Free Parking</h4>
            <p>We provide free parking service as long as you need</p>
        </div>
        <div>
            <i class="far fa-smile fa-4x" style="color:#004AAD;"></i>
            <h4>Family Friendly Environment</h4>
            <p>For whole family to enjoy and relax</p>
        </div>
        <div>
            <i class="fas fa-shower fa-4x" style="color:#004AAD;"></i>
            <h4>Essentials</h4>
            <p>As a guest you have access to towels, beddings and other essentials</p>
        </div>
        <div>
            <i class="fas fa-key fa-4x" style="color:#004AAD;"></i>
            <h4>Private Entrance</h4>
            <p>You will be provided with key and your private entrance to use</p>
        </div>
    </div>

    <div class="parallax-image"
        style="background-image: url('https://apartments-luciana.netlify.app/images/carousel/fabio-fistarol-vkLv1LP_xCw-unsplash.jpg');">
    </div>
    <div id="beach-banner">
        <div class="beaches">
            <h3>Find Out More About Best Povljana Beaches</h3>
            <a href="https://apartments-luciana.netlify.app/gallery-plaze.html" class="beaches-link">Beach Gallery</a>
        </div>
    </div>

    <div class="container-fluid galleries-container">
        <div class="galleries">
            <a href="https://apartments-luciana.netlify.app/gallery-luciana.html">
                <div class="gallery"
                    style="background-image: url('https://apartments-luciana.netlify.app/images/Luciana/20.jpg')">
                    Luciana</div>
            </a>
            <a href="https://apartments-luciana.netlify.app/gallery-dendy.html">
                <div class="gallery"
                    style="background-image: url('https://apartments-luciana.netlify.app/images/Dendy/11.jpg')">Dendy
                </div>
            </a>
            <a href="https://apartments-luciana.netlify.app/gallery-trivia.html">
                <div class="gallery"
                    style="background-image: url('https://apartments-luciana.netlify.app/images/Trivia/00.jpg'); background-position:top;">
                    Attractions
                </div>
            </a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark">
        <div class="m-0 text-center social-media">
            <div class="container-fluid text-center">
                <p class="m-0">
                    <a title="Luciana Apartments on Facebook" aria-label="Luciana Apartments on Facebook"
                        target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/luciana.apartments">
                        <div class="social-link">
                            <i class="fab fa-facebook-f p-0"></i>
                        </div>
                    </a>
                </p>
                <p class="m-0">
                    <a title="Luciana Apartments on Instagram" aria-label="Luciana Apartments on Instagram"
                        target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/luciana.apartments">
                        <div class="social-link">
                            <i class="fab fa-instagram p-0"></i>
                        </div>
                    </a>
                </p>
            </div>
        </div>
        <div class="m-0 py-5 text-center foot-middle">
            <div class="container-fluid foot">
                <div class="foot-contact">
                    <h5 class="mb-4">CONTACT INFO</h5>
                    <p><a href="mailto:krpan.marina@gmail.com">krpan.marina@gmail.com
                        </a></p>
                    <p>Phone:<a href="tel:+385 91 570 4448">+385 91 570 4448</a></p>
                    <p>Contact us via <a href="whatsapp://send?text=Hello!&phone=385915704448">WhatsApp</a></p>
                </div>
                <div class="foot-book">
                    <p>Reserve Your Apartment Stay Now!</p>
                    <a href="https://apartments-luciana.netlify.app/contact.html">Book Now</a>
                </div>
            </div>
        </div>
        <div class="p-4 text-center foot-copy">
            <div class="container-fluid text-left p-0">
                <p class="m-0">Copyright &copy; 2021 Luciana Apartments All Rights Reserved</p>
            </div>
            <!-- Back to Top link -->
            <div class="back-to-top-wrapper">
                <a href="#top" class="back-to-top-link" aria-label="Scroll to Top"><i class="fas fa-chevron-up p-0"></i>
                    &nbsp; Back To Top</a>
            </div>
        </div>
        <!-- /. -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        $(document).scroll(function () {
            let scrollToTopButton = document.querySelector(".back-to-top-wrapper");
            let y = window.scrollY;
            // If the scroll value is greater than the window height, let's add a class to the scroll-to-top button to show it!
            if (y > 500) {
                scrollToTopButton.style = "opacity: 1; transition: 0.3s; visibility:visible"
            } else {
                scrollToTopButton.style = "opacity: 0; transition: 0.3s; visibility:hidden"
            }
        });

        $(function () {
            $(document).scroll(function () {
                var $nav = $("nav");
                $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
            });
        });
        $(window).load(function () {
            var $nav = $("nav");
            $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
        });

    </script>
</body>

</html>