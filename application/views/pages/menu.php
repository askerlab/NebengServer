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
                  <li<?= @$is_active == 'beranda' ? " class=\"active\"" : null ?>><a href="<?= base_url() ?>">Beranda</a></li>
                  <li<?= @$is_active == 'pembayaran' ? " class=\"active\"" : null ?>><a href="<?= base_url() ?>confirmation">Konfirmasi Pembayaran</a></li>
                  <li<?= @$is_active == 'kontak' ? " class=\"active\"" : null ?>><a href="<?= base_url() ?>contact">Kontak</a></li>
              </ul>
          </div>
          <!-- Secondary Menu Links End -->
      </div>
  </nav>
  <!-- Secondary Menu End -->

</div>
<!-- Menu Area End -->