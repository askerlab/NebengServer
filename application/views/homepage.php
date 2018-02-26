<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>CloudServer - Responsive HTML5 Technology, Web Hosting and WHMCS Template</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- ==== Favicons ==== -->
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="icon" href="favicon.png" type="image/x-icon">

    <!-- ==== Google Font ==== -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900%7CMontserrat:700' rel='stylesheet' type='text/css'>

    <!-- ==== Font Awesome ==== -->
    <link href="<?= base_url() ?>resources/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- ==== Bootstrap ==== -->
    <link href="<?= base_url() ?>resources/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- ==== jQuery UI ==== -->
    <link href="<?= base_url() ?>resources/css/jquery-ui.min.css" rel="stylesheet">

    <!-- ==== Animate CSS Library ==== -->
    <link href="<?= base_url() ?>resources/css/animate.min.css" rel="stylesheet">

    <!-- ==== Owl Carousel Plugin ==== -->
    <link href="<?= base_url() ?>resources/css/owl.carousel.css" rel="stylesheet">
    
    <!-- ==== Magnific Popup Plugin ==== -->
    <link href="<?= base_url() ?>resources/css/magnific-popup.css" rel="stylesheet" type='text/css'>
    
    <!-- ==== FakeLoader Plugin ==== -->
    <link href="<?= base_url() ?>resources/css/fakeLoader.css" rel="stylesheet" type='text/css'>
    
    <!-- ==== Main Stylesheet ==== -->
    <link href="<?= base_url()?>resources/style.css" rel="stylesheet">
    
    <!-- ==== Responsive Stylesheet ==== -->
    <link href="<?= base_url() ?>resources/css/responsive-style.css" rel="stylesheet">
    
    <!-- ==== Theme Color Stylesheet ==== -->
    <link href="<?= base_url() ?>resources/css/colors/theme-color-1.css" rel="stylesheet" id="changeColorScheme">
    
    <!-- ==== Custom Stylesheet ==== -->
    <link href="<?= base_url() ?>resources/css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.<?= base_url() ?>resources/js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- FakeLoader Start -->
    <div id="fakeLoader"></div>
    <!-- FakeLoader End -->

    <!-- Menu Area Start -->
    <div id="menu">
        <!-- Promo Area Start -->
        <!--
        <div id="promo" class="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        
            <div class="container">
                <p><strong>Cyber Monday! </strong>Up To<strong> 98% Off</strong> All Of Your New Order. Coupon Code: "<strong>cm98</strong>". Time Left: <strong data-counter-down="2017/11/29">00:00:00</strong></p>

                <a href="#" class="btn btn-custom">Click Here</a>
            </div>
        </div>-->
        <!-- Promo Area End -->
    
        <!-- Primary Menu Start -->
        <nav id="primaryMenu" class="navbar">
            <div class="container">
                <div id="primaryNavbar" class="reset-padding">
                    <!-- Primary Menu Links Start -->
                    <ul class="primary-menu-links nav navbar-nav">
                        <li class="hidden-xs"><span>Dapatkan promo 50% hari ini!</span></li>
                        <li><span class="phone"><i class="fa fa-phone"></i>+62 89 2345 8123</span></li>
                        <li><span class="email"><i class="fa fa-envelope"></i>info@nebengserver.com</span></li>
                    </ul>
                    <!-- Primary Menu Links End -->
                    
                    <!-- Primary Social Links Start -->
                    <ul class="primary-social-menu-links nav navbar-nav navbar-right">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                    <!-- Primary Social Links End -->
                </div>
            </div>
        </nav>
        <!-- Primary Menu End -->

        <!-- Secondary Menu Start -->
        <nav id="secondaryMenu" class="navbar" data-sticky="true">
            <div class="container">
                <div class="navbar-header">
                    <!-- Logo Start -->
                    <a href="index.html" class="navbar-brand">
                        <img src="<?= base_url() ?>resources/img/logo.png" alt="" class="img-responsive" />
                    </a>
                    <!-- Logo End -->
                </div>
                
                <!-- Secondary Menu Links Start -->
                <div id="secondaryNavbar" class="navbar-right reset-padding hidden-sm hidden-xs">
                    <ul class="secondary-menu-links nav navbar-nav">
                        <li class="active"><a href="<?= base_url() ?>">Home</a></li>
                        <!-- <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hosting <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="shared-hosting.html">Shared Hosting</a></li>
                                <li><a href="reseller-hosting.html">Reseller Hosting</a></li>
                                <li><a href="vps-hosting.html">VPS Hosting</a></li>
                                <li><a href="dedicated-hosting.html">Dedicated Hosting</a></li>
                            </ul>
                        </li>
                        <li><a href="domain.html">Domain</a></li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="about.html">About</a></li>
                                <li><a href="service-details.html">Service Details</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="datacenter.html">Datacenter</a></li>
                                <li><a href="testimonial.html">Testimonial</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="affiliate.html">Affiliate</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-details-left.html">Blog Details Left</a></li>
                                <li><a href="blog-details-right.html">Blog Details Right</a></li>
                            </ul>
                        </li> -->
                        <!-- <li><a href="contact.html">Contact</a></li> -->
                    </ul>
                </div>
                <!-- Secondary Menu Links End -->
            </div>
        </nav>
        <!-- Secondary Menu End -->

    </div>
    <!-- Menu Area End -->

    <!-- Banner Area Start -->
    <div id="banner">
        <!-- Banner Slider Start -->
        <div class="banner-slider">
            <!-- Banner Item Start -->
            <div class="banner-item bg--overlay" data-bg-img="<?= base_url() ?>resources/img/home-slider-img/slider-bg-01.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="vc-parent">
                                <div class="vc-child">
                                    <!-- Banner Item Content Start -->
                                    <section class="banner-item-content">
                                        <h1><span>WordPress</span> Hosting Services</h1>
                                        
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui eaque explicabo blanditiis, commodi repellat cupiditate magni dolorem nulla porro.</p>
                                        
                                        <a href="#" class="btn btn-lg btn-custom">View Details</a>
                                    </section>
                                    <!-- Banner Item Content End -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 hidden-sm hidden-xs">
                            <div class="vc-parent">
                                <div class="vc-child">
                                    <!-- Banner Item Image Start -->
                                    <div class="banner-item-img">
                                        <img src="<?= base_url() ?>resources/img/home-slider-img/slider-item-01.png" alt="" class="img-responsive">
                                    </div>
                                    <!-- Banner Item Image End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Item End -->
        </div>
        <!-- Banner Slider End -->
    </div>
    <!-- Banner Area End -->
    
    <!-- Domain Search Area Start -->
    <div id="domainSearch">
        <div class="container">
            <div class="row content">
                <div class="col-md-4 left-content">
                    <h2>Get 10% Off Today</h2>
                    <p>by register a domain name</p>
                </div>
                
                <div class="col-md-8 right-content">
                    <!-- Domain Search Form Start -->
                    <div data-form-validation="true">
                        <form action="http://billing.ywhmcs.com/domainchecker.php?systpl=CloudServer01" method="post" id="domainSearchForm">
                            <div class="row reset-gutter">
                                <div class="col-sm-6">
                                    <input class="form-control" name="domain" type="text" placeholder="Enter your domain" required>
                                </div>
                                
                                <div class="col-sm-3 select-box">
                                    <select class="form-control" name="ext">
                                        <option>.com</option>
                                        <option>.net</option>
                                        <option>.org</option>
                                        <option>.info</option>
                                        <option>.us</option>
                                        <option>.eu</option>
                                    </select>
                                </div>
                                
                                <div class="col-sm-3">
                                    <button class="btn submit-button-custom" type="submit">SEARCH</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Domain Search Form End -->
                    
                    <div class="row domain-ext hidden-xs">
                        <div class="col-sm-2">
                            <a href="#" class="extension">
                                <span class="name">.com</span>
                                <span>$3.99/year</span>
                            </a>
                        </div>
                        
                        <div class="col-sm-2">
                            <a href="#" class="extension">
                                <span class="name">.net</span>
                                <span>$3.99/year</span>
                            </a>
                        </div>
                        
                        <div class="col-sm-2">
                            <a href="#" class="extension">
                                <span class="name">.org</span>
                                <span>$3.99/year</span>
                            </a>
                        </div>
                        
                        <div class="col-sm-2">
                            <a href="#" class="extension">
                                <span class="name">.info</span>
                                <span>$3.99/year</span>
                            </a>
                        </div>
                        
                        <div class="col-sm-2">
                            <a href="#" class="extension">
                                <span class="name">.us</span>
                                <span>$3.99/year</span>
                            </a>
                        </div>
                        
                        <div class="col-sm-2">
                            <a href="#" class="extension">
                                <span class="name">.eu</span>
                                <span>$3.99/year</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Domain Search Area End -->
    
    <!-- Features Area Start -->
    <div id="features">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title">
                <h2>Domain Features</h2>
            </div>
            <!-- Section Title End -->
            
            <div class="row">
                <!-- Feature Item Start -->
                <div class="col-md-3 col-sm-6 feature--item">
                    <div class="feature--icon">
                        <div class="vc-parent">
                            <div class="vc-child">
                                <img src="<?= base_url() ?>resources/img/features-img/icon-01.png" alt="" class="img-responsive center-block"/>
                            </div>
                        </div>
                    </div>
                        
                    <div class="feature--content">
                        <h4>Firewall</h4>
                        <p>Lorem ipsum dolor sit amet, placeat necessitatibus adipisicing elit.</p>
                        <a href="#" class="btn btn-custom">View Details</a>
                    </div>
                </div>
                <!-- Feature Item End -->
                
                <!-- Feature Item Start -->
                <div class="col-md-3 col-sm-6 feature--item">
                    <div class="feature--icon">
                        <div class="vc-parent">
                            <div class="vc-child">
                                <img src="<?= base_url() ?>resources/img/features-img/icon-02.png" alt="" class="img-responsive center-block"/>
                            </div>
                        </div>
                    </div>
                        
                    <div class="feature--content">
                        <h4>Data Encryption</h4>
                        <p>Lorem ipsum dolor sit amet, placeat necessitatibus adipisicing elit.</p>
                        <a href="#" class="btn btn-custom">View Details</a>
                    </div>
                </div>
                <!-- Feature Item End -->
                
                <!-- Feature Item Start -->
                <div class="col-md-3 col-sm-6 feature--item">
                    <div class="feature--icon">
                        <div class="vc-parent">
                            <div class="vc-child">
                                <img src="<?= base_url() ?>resources/img/features-img/icon-03.png" alt="" class="img-responsive center-block"/>
                            </div>
                        </div>
                    </div>
                        
                    <div class="feature--content">
                        <h4>Data Analysis</h4>
                        <p>Lorem ipsum dolor sit amet, placeat necessitatibus adipisicing elit.</p>
                        <a href="#" class="btn btn-custom">View Details</a>
                    </div>
                </div>
                <!-- Feature Item End -->
                
                <!-- Feature Item Start -->
                <div class="col-md-3 col-sm-6 feature--item">
                    <div class="feature--icon">
                        <div class="vc-parent">
                            <div class="vc-child">
                                <img src="<?= base_url() ?>resources/img/features-img/icon-04.png" alt="" class="img-responsive center-block"/>
                            </div>
                        </div>
                    </div>
                        
                    <div class="feature--content">
                        <h4>Data Protection</h4>
                        <p>Lorem ipsum dolor sit amet, placeat necessitatibus adipisicing elit.</p>
                        <a href="#" class="btn btn-custom">View Details</a>
                    </div>
                </div>
                <!-- Feature Item End -->
            </div>
        </div>
    </div>
    <!-- Features Area End -->
    
    <!-- Pricing Area Start -->
    <div id="pricing" class="bg--lightgray">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title">
                <h2>Paket WordPress</h2>
            </div>
            <!-- Section Title End -->
            
            <!-- Pricing Slider Start -->
            <div class="pricing--slider">
                <?php foreach($packages as $package): ?>
                <!-- Pricing Item Start -->
                <div class="pricing--item">
                    <div class="pricing--content">
                        <div class="pt-head">
                            <div class="caption">Mulai dari</div>
                            <div class="pt-price-tag"><?= $package['price'] ?><span>/bulan</span></div>
                            <div class="pt-plan"><?= $package['name'] ?></div>
                        </div>
                        
                        <div class="pt-body">
                            <div class="pt-features">
                                <ul>
                                    <?php foreach($package['features'] as $feature): ?>
                                    <li><?= $feature ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="pt-footer">
                            <a href="#" class="btn btn-lg btn-custom">Order Now</a>
                        </div>
                    </div>
                </div>
                <!-- Pricing Item End -->
                <?php endforeach; ?>
            </div>
            <!-- Pricing Slider End -->
        </div>
    </div>
    <!-- Pricing Area End -->
    
    <!-- Services Area Start -->
    <div id="services">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title">
                <h2>Solusi untuk Bisnis Anda!</h2>
            </div>
            <!-- Section Title End -->
            
            <div class="row row-vc">
                <!-- Services Item Content Start -->
                <div class="col-md-6 service-item-content">
                    <h2><span>Wordpress</span>Hosting</h2>
                    
                    <p>Kami siap membantu anda kapanpun dan dimanapun untuk menjalankan <strong>Bisnis</strong> Anda.</p>
                    
                    <div class="price">
                        <a href="#" class="btn btn-lg btn-custom">Butuh bantuan? Hubungi kami</a>
                    </div>
                </div>
                <!-- Services Item Content End -->
                
                <!-- Services Item Image Start -->
                <div class="col-md-6 service-item-img">
                    <img src="<?= base_url() ?>resources/img/services-img/01.png" alt="" class="img-responsive center-block">
                </div>
                <!-- Services Item Image End -->
            </div>
        </div>
    </div>
    <!-- Services Area End -->
    
    <!-- Contact Info Area Start -->
    <div id="contactInfo">
        <div class="container">
            <div class="row reset-gutter">
                <!-- Contact Info Item Start -->
                <div class="contact-info--item col-md-3 col-xs-6">
                    <a href="#"><i class="fa fa-headphones"></i>24/7 Customer Support</a>
                </div>
                <!-- Contact Info Item End -->
                
                <!-- Contact Info Item Start -->
                <div class="contact-info--item col-md-3 col-xs-6">
                    <a href="#"><i class="fa fa-envelope-o"></i>support@nebengserver.com</a>
                </div>
                <!-- Contact Info Item End -->
                
                <!-- Contact Info Item Start -->
                <div class="contact-info--item col-md-3 col-xs-6">
                    <a href="#"><i class="fa fa-comments-o"></i>Click Here To Live Chat</a>
                </div>
                <!-- Contact Info Item End -->
                
                <!-- Contact Info Item Start -->
                <div class="contact-info--item col-md-3 col-xs-6">
                    <a href="#"><i class="fa fa-phone"></i>+62 89 8919 2345</a>
                </div>
                <!-- Contact Info Item End -->
            </div>
        </div>
    </div>
    <!-- Contact Info Area End -->
    
    <!-- Footer Area Start -->
    <div id="footer">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Start -->
                <div class="col-md-6 col-sm-6 footer-widget">
                    <!-- Footer Title Start -->
                    <h4>Perusahaan</h4>
                    <!-- Footer Title End -->
                    
                    <ul>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Syarat dan Ketentuan</a></li>
                    </ul>
                </div>
                <!-- Footer Widget End -->
                
                <!-- Footer Widget Start -->
                <div class="col-md-6 col-sm-6 footer-widget">
                    <!-- Footer Title Start -->
                    <h4>Berlangganan</h4>
                    <!-- Footer Title End -->
                    
                    <!-- Footer Subscribe Widget Start -->
                    <div class="footer--subscribe-widget" data-form-validation="true">
                        <form action="#" method="post" name="subscribe" target="_blank" novalidate="novalidate">
                            <input type="email" value="" name="EMAIL" placeholder="Masukkan email anda untuk berlangganan." class="form-control" required>
                            <input type="submit" value="BERLANGGANAN SEKARANG!" class="btn btn-custom-reverse">
                        </form>
                    </div>
                    <!-- Footer Subscribe Widget End -->
                    
                    <!-- Footer Social Widget Start -->
                    <div class="footer--social-widget">
                        <p>TEMUKAN KAMI DI:</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- Footer Social Widget End -->
                </div>
                <!-- Footer Widget End -->
            </div>
        </div>
    </div>
    <!-- Footer Area End -->
    
    <!-- Copyright Area Start -->
    <div id="copyright">
        <div class="container">
            <!-- Copyright Text Start -->
            <p class="left">Copyright 2018 &copy; <a href="#">NebengServer</a>. All Rights Reserved.</p>
            <!-- Copyright Text End -->
            <p class="right">KAMI MENERIMA: <img src="<?= base_url() ?>resources/img/payment-methods.png" alt=""></p>
        </div>
    </div>
    <!-- Copyright Area End -->

    <!-- Back To Top Button Start -->
    <div id="backToTop">
        <a href="body" data-animate-scroll="true"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- Back To Top Button End -->

    <!-- ==== jQuery Library ==== -->
    <script src="<?= base_url() ?>resources/js/jquery-3.1.0.min.js"></script>

    <!-- ==== jQuery UI ==== -->
    <script src="<?= base_url() ?>resources/js/jquery-ui.min.js"></script>
    
    <!-- ==== jQuery UI Touch Punch Plugin ==== -->
    <script src="<?= base_url() ?>resources/js/jquery.ui.touch-punch.min.js"></script>

    <!-- ==== Bootstrap ==== -->
    <script src="<?= base_url() ?>resources/js/bootstrap.min.js"></script>

    <!-- ==== FakeLoader Plugin ==== -->
    <script src="<?= base_url() ?>resources/js/fakeLoader.min.js"></script>

    <!-- ==== StickyJS Plugin ==== -->
    <script src="<?= base_url() ?>resources/js/jquery.sticky.js"></script>

    <!-- ==== Owl Carousel Plugin ==== -->
    <script src="<?= base_url() ?>resources/js/owl.carousel.min.js"></script>
    
    <!-- ==== jQuery Tubuler Plugin ==== -->
    <script src="<?= base_url() ?>resources/js/jquery.tubular.1.0.js"></script>
    
    <!-- ==== Magnific Popup Plugin ==== -->
    <script src="<?= base_url() ?>resources/js/jquery.magnific-popup.min.js"></script>

    <!-- ==== jQuery Validation Plugin ==== -->
    <script src="<?= base_url() ?>resources/js/jquery.validate.min.js"></script>

    <!-- ==== Animate Scroll Plugin ==== -->
    <script src="<?= base_url() ?>resources/js/animatescroll.min.js"></script>

    <!-- ==== jQuery Waypoints Plugin ==== -->
    <script src="<?= base_url() ?>resources/js/jquery.waypoints.min.js"></script>

    <!-- ==== jQuery CounterUp Plugin ==== -->
    <script src="<?= base_url() ?>resources/js/jquery.counterup.min.js"></script>
    
    <!-- ==== jQuery CountDown Plugin ==== -->
    <script src="<?= base_url() ?>resources/js/jquery.countdown.min.js"></script>
    
    <!-- ==== RetinaJS ==== -->
    <script src="<?= base_url() ?>resources/js/retina.min.js"></script>

    <!-- ==== Main JavaScript ==== -->
    <script src="<?= base_url() ?>resources/js/main.js"></script>
</body>
</html>
