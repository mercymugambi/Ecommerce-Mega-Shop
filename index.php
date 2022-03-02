<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <!-- These are meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Merc-tech mega shop for html, css, bootstrap, javascript and php">
    <meta name="keywords" content="e-commerce system, online mega shop, mega shop, merc-tech">
    <meta name="author" content="Mercy Mugambi">

    <!-- Custom css linked here-->
    <style> <?php include 'CSS/main.css'; ?></style>

    <!-- Font awesome link for icons version 4.7.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS version 4.6.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- Testimonial owl Carousel -->
   
    <!-- This is the title -->
    <title>MERC-TECH MEGA SHOP</title>

</head>
<body>
    <!-- Top navbar with blink and account, cart begins here -->
    <div id="page">
        <div class="wrapper">
            <div class="top_nav">
                <div class="left">
                  <p id="blink"> 50% Products Offer available on <b>15<sup>th</sup>March 2022 </b></p>
                </div>
                <div class="right">
                  <!-- Dropdown Menu starts here -->
                  <div class="nav-item dropdown">
                    <a 

                        class="nav-link"
                        href ="#"
                        id="navbarDropdown"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"><i class="fa fa-fw fa-user"></i>
                        Account
                        <span class="fa fa-angle-down"></span>                              
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="login.php">Login</a>
                        <a class="dropdown-item" href="register.php">Register</a>
                    </div>
                    </div>
                    <!--Drop Down items ends here -->
                </div>
            </div>
            <!-- End of top nav -->

            <!-- Start of bottom Nav -->
            <div class="bottom_nav" >
                <img id="logo" src="images/logo/logo1.png" style="width: 80px; height: 50px;">
                <ul class="standard-nav visible-lg">
                    <li><a id="contact-linker" class="scroll" href="#"><i class="fa fa-address-card-o" aria-hidden="true"></i></i>ContactUs</a></li>
                    <li><a id="cart-linker" class="scroll" href="#">Cart<i class="fa fa-shopping-cart" aria-hidden="true"></i></a><sup><span class="badge badge-light" style="color:red">0</span></sup></li>
                </ul>
            </div>
            <!-- End of bottom nav -->
        </div>
        <!-- End of nav wrapping -->
        <div class="container-fluid dark-nav">
            <div class="row">
                <!--- col code for sidebar nav -->
                <div class="col-2" style="height: 100%;">
                    <div class="categories">
                        <br>
                        <h5><u>Categories</u></h5>
                        <a class ="active" href="#" style="font-size: 20px; color; green">Vegetables</a><br><br>
                        <a href="#Fruits">Fruits</a><br><br>
                        <a href="#Dairy Produce">Dairy Produce</a><br><br>
                        <a href="#bakery">Bakery</a><br><br>
                        <a href="#beverages">Beverages</a><br><br><br><br><br>
                    </div>
                </div>
                <!-- Start of Sliders center grid -->
                <div class="col-7">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                              <img src="images/slider/blended.PNG" class="d-block w-100" height="500px" width="960px" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/slider/grocerydelivers.PNG" class="d-block w-100" height="500px" width="960px"  alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/slider/fruitveges.png" class="d-block w-100" height="500px" width="960px" alt="...">
                          </div>
                        </div>
                    </div>
                </div>
                <!-- Start of grid at right side -->
                <div class="col-3">
                    <div class="grid-container">
                        <div class="item1"><img src="images/services/fruits.PNG" class="d-block w-100" alt="..."></div>
                        <hr>
                        <div class="item2"><img src="images/services/bouquet.PNG" class="d-block w-100" alt="..."></div>
                        <hr>
                        
                    </div>
                </div>
                <!-- end of right slider grid -->
            </div>
            
            <div class="row">
                <!-- Testimonial slider -->
                <div class="col-sm-2" style="background-color: #ffffff;">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/testmonials/user3.jpg" class="centerblock team" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h2 style="color: green; font-size: small;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h2>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/testmonials/user3.jpg" class="centerblock team" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h2 style="color: green; font-size: small;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h2>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/testmonials/user3.jpg" class="centerblock team" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h2 style="color: green; font-size: small;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h2>
                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial slider ends here -->
                <hr>
                <div class="col-sm-10" style="background-color: #ffffff;">
                    <!--Carousel Wrapper-->
                    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                        <!--Controls-->
                        <div class="controls-top">
                         <a class="btn-floating" style="color: #32CD32;" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                            <a class="btn-floating" style="color: #32CD32;" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                        </div>
                        <!--/.Controls end -->
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                            <li data-target="#multi-item-example" data-slide-to="1"></li>
                            <li data-target="#multi-item-example" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->
                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <!--First slide-->
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="card mb-0">
                                            <img class="card-img-top" src="images/slider/cupcake.jpg" alt="Card image cap">
                                        </div>
                                    </div>
                                    <div class="col-md-2 clearfix d-none d-md-block">
                                        <div class="card mb-0">
                                            <img class="card-img-top" src="images/slider/dailydrinks.jpg" alt="Card image cap">
                                        </div>
                                    </div>
                                    <div class="col-md-2 clearfix d-none d-md-block">
                                        <div class="card mb-0">
                                            <img class="card-img-top" src="images/slider/fastfood.jpg" alt="Card image cap">
                                        </div>
                                    </div>
                                    <div class="col-md-2 clearfix d-none d-md-block">
                                        <div class="card mb-0">
                                            <img class="card-img-top" src="images/slider/jarspices.jpg" alt="Card image cap">
                                        </div>
                                    </div>
                                    <div class="col-md-2 clearfix d-none d-md-block">
                                        <div class="card mb-0">
                                            <img class="card-img-top" src="images/slider/dailydrinks.jpg" alt="Card image cap">
                                        </div>
                                    </div>
                                    <div class="col-md-2 clearfix d-none d-md-block">
                                        <div class="card mb-0">
                                            <img class="card-img-top" src="images/slider/icecream.jpg" alt="Card image cap">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.First slide-->
                            <!--First slide-->
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-2" >
                                        <div class="card mb-0">
                                            <img class="card-img-top" src="images/slider/jarspices.jpg" alt="Card image cap">
                                        </div>
                                    </div>
                                    <div class="col-md-2 clearfix d-none d-md-block">
                                        <div class="card mb-0">
                                            <img class="card-img-top" src="images/slider/juice.jpg" alt="Card image cap">
                                        </div>
                                    </div>
                                    <div class="col-md-2 clearfix d-none d-md-block">
                                        <div class="card mb-0">
                                            <img class="card-img-top" src="images/slider/icecream.jpg" alt="Card image cap">
                                        </div>
                                    </div>
                                    <div class="col-md-2 clearfix d-none d-md-block">
                                        <div class="card mb-0">
                                            <img class="card-img-top" src="images/slider/fastfood.jpg" alt="Card image cap">
                                        </div>
                                    </div>
                                    <div class="col-md-2 clearfix d-none d-md-block">
                                        <div class="card mb-0">
                                            <img class="card-img-top" src="images/slider/icecream.jpg" alt="Card image cap">
                                        </div>
                                    </div>
                                    <div class="col-md-2 clearfix d-none d-md-block">
                                        <div class="card mb-0">
                                            <img class="card-img-top" src="images/slider/dailydrinks.jpg" alt="Card image cap">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.First slide-->
                        </div>
                        <!--/.Slides-->
                    </div>
                    <!--/.Carousel Wrapper-->
                </div>
            </div>

            <!-- Products navbar-->
            <div class="section">
                <div class="row" >
                    <div class="col-2" >
                        <!-- Sidebar banner -->
                        <div class="banner">
                        <img src="images/banners/banner1.png" alt="banner" ;>            
                        </div>
                        <hr>
                        <!--Featured products -->
                        <div class="sidebar" id="featured">
                            <a class="active" href="#home">Home</a><br>
                            <a href="#news">News</a>
                            <a href="#contact">Contact</a>
                            <a href="#about">About</a>
                        </div>
                        
                    </div>
                    <div class="col-10">
                    <div class="border-bottom py-3">
                        <div class="container">
                          <div class="row align-items-center justify-content-between">
                            <div class="col-md-9 col-lg-10">
                              <ul class="nav nav-underline border-0 justify-content-between justify-content-md-start">
                                <li class="nav-item mr-md-4"><a data-toggle="tab" class="text-graphite active" href="#" aria-selected="true">Featured</a>
                                </li>
                                <li class="nav-item mr-md-4"><a data-toggle="tab" class="text-graphite" href="#fruits" aria-selected="false">Latest</a>
                              </ul>
                            </div>
                          </div>
                        </div><!-- container -->
                      </div>
                      <div class="container">
                        <div class="tab-content mt-md-6 mt-4">
                          <div id="vegetables" class="tab-pane show active" role="tabpanel">
                            <h2 class="text-center p-3">Vegetables</h2>
                            <div class="row align-items-center">
                              <div class="col-md-8 mx-auto text-md-center">
                                <p class="mb-4">The dream of colonizing the moon, Mars, and beyond requires space travel and long-term habitation. LunarXP has pioneered new technologies and environments that make space flight and colony living not just safe – but unexpectedly comfortable. From our surface stations to our orbital platform, learn more about the different colonial posts in the LunarXP community.</p>
                              </div>
                            </div>
                            <div class="row mt-6">
                              <div class="col-md-12">
                                <div class="row text-center">
                                  <div class="col-md-4 px-3">
                                    <img alt="XP-1" class="img-fluid border" src="https://raw.githubusercontent.com/solodev/page-navigation-toolbar/master/images/xp-1.jpg">
                                    <h3 class="text-orange mt-4">XP-1</h3>
                                    <p class="mt-4">Live and work in the first sustainable settlement on another planet.</p>
                                  </div>
                                  <div class="col-md-4 px-3">
                                    <img alt="HAB-1" class="img-fluid border" src="https://raw.githubusercontent.com/solodev/page-navigation-toolbar/master/images/hab-1.jpg">
                                    <h3 class="text-orange mt-4">HAB-1</h3>
                                    <p class="mt-4">Tour your “home away from home” on the surface of the moon.</p>
                                  </div>
                                  <div class="col-md-4 px-3">
                                    <img alt="Orbiter-1" class="img-fluid border" src="https://raw.githubusercontent.com/solodev/page-navigation-toolbar/master/images/orbiter-1.jpg">
                                    <h3 class="text-orange mt-4">Orbiter-1</h3>
                                    <p class="mt-4">Be part of the crew on the most advanced space station ever built.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="explore" class="tab-pane fade text-center" role="tabpanel">
                            <h2 class="p-3">Explore</h2>
                            <div class="container py-2 text-left">
                              <div class="row py-3">
                                <div class="col-md-5">
                                  <h1 class="h3">Watch Our Latest Video, "From the Moon to Mars"</h1>
                                  <p class="my-4">Since the dawn of time, mankind has looked to the stars with restless hearts and endless wonder. Not since the Apollo moon program have we endeavored to travel so far from Earth - and LunarXP is where it begins.
                                  </p>
                                  <p><strong>Are you ready to explore?</strong></p>
                                  <a href="#" class="mt-3 btn btn-secondary text-white">Watch the Video</a>
                                </div>
                                <div class="col-md-6 ml-auto mt-md-0 mt-5">
                                  <img class="w-100 img-fluid" alt="Lunar XP Video" src="https://raw.githubusercontent.com/solodev/page-navigation-toolbar/master/images/explore.jpg">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="mission" class="tab-pane fade text-center" role="tabpanel">
                            <h2 class="p-3">Mission</h2>
                            <p>At LunarXP, we’re dreamers and explorers.
                              We’ve always looked up for purpose – and we’ve never looked back.
                              As a company, we believe that the future of mankind lies beyond earth and in the stars.
                              Together, we can make a better tomorrow for all of us. It starts with one small step.</p>
                          </div>
                        </div><!-- tab content -->
                      </div><!-- container -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer begins here -->
        <footer class="footer-distributed">
            <div class="footer-left">
                <h3>MercTech<span>MegaShop</span></h3>
                <p class="footer-links">
                    <a href="index.php" class="link-1">Home</a>
                    <a href="#">Categories</a>
                    <a href="#">Cart</a>
                </p><br>
                <p style="color: white;";><i>MercTech MegaShop Copyright &copy; <script>document.write(new Date().getFullYear())</script> All Rights Reserved</i></p>
            </div>
            <div class="footer-center">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>P.O Box Private bag</span> 00217, Nairobi</p>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <p>+254723460025</p>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:info@megashop.com">info@megashop.com</a></p>
                </div>
            </div>
            <div class="footer-right">
                <p class="footer-company-about">
                    <span>ABOUT US</span>
                    Merc-tech mega shop provides variety of products ata affordable price. Pay is on delivery.
                    </p>
                <div class="footer-icons">
                    <a href="https://web.facebook.com/franny.makena"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/in/mercy-m-a8a470127/"><i class="fa fa-linkedin"></i></a>
                    <a href="https://github.com/mercymugambi"><i class="fa fa-github"></i></a>
                </div>
            </div>
        </footer>
    </div>

    <!-- Blinking javascript code -->
    <script type="text/javascript">
        var blink = document.getElementById('blink');
        setInterval(function() {
            blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
        }, 1000);
    </script>
  
    
    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" ></script>

</body>
</html>
