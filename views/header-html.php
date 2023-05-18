<?php 
if( !defined('SunnyDays') ) exit();

if( isset($_SESSION['loged']) && $_SESSION['loged'] ){
  $loged = true;
}else{
  $loged = false;
}
?>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="/menu/contact.php">contact@sunnydays.com</a>
        <i class="call-icon"><img src="/assets/img/Icons/call_white_18dp.svg"></i>
          <span>
            <a href="tel://+35988123456">088 123 4567</a>
          </span>
      </div>

            <!-- Profile -->
            <div class="profile-info d-flex align-items-left" title="Моят профил">
              <?php
              if (isset ($_SESSION['user']['name'])){
                ?>
                  <a href="/profile.php" aria-expanded="false" id="profileMenuLink" role="button"><img src="/assets/img/Icons/person_white_24dp.svg" class="icon1">
                    <span class="af-user">
                      <span class="dd-text d-none d-md-inline">
                        <span style="text-decoration: underline">
                          <?php
                          echo "{$_SESSION['user']['name']} {$_SESSION['user']['family']}";
                          ?>
                        </span>
                      </span>
                    </span>
                  </a>
                <?php
              }
              ?>
            </div>
              <!--End Profile -->

      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>
  <!-- End ======= Top Bar ======= -->
  
  <!-- Start ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

    <a href="/" class="logo"><img src="/assets/img/SD_Logo3.gif" alt="" class="img-fluid"></a>  
    <a href="/" class="logo">Sunny Days</a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/"<?php if ($activemenu == 'homepage'){ ?>class="active"<?php } ?>><img src="/assets/img/Icons/home_white_24dp.svg"></a></li>
          <li><a href="/menu/about.php"<?php if ($activemenu == 'about'){ ?>class="active"<?php } ?>>За нас</a></li>
            <li class="dropdown"><a href="/menu/service/service_home.php"<?php if ($activemenu == 'services'){ ?>class="active"<?php } ?> ><span>Услуги</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="/menu/service/service_1.php">Изграждане на Фотоволтаични системи</a></li>
                <li><a href="/menu/service/service_2.php">Наблюдение на електростанцията в реално време</a></li>
                <li><a href="/menu/service/service_3.php">Поддръжка и ремонт на фотоволтаични системи</a></li>
              </ul>
          <li><a href="/menu/projects.php"<?php if ($activemenu == 'projects'){ ?>class="active"<?php } ?>>Проекти</a></li>
          <li><a href="/menu/offer.php"<?php if ($activemenu == 'offer'){ ?>class="active"<?php } ?>>Поискай оферта</a></li>
          <li><a href="/menu/team.php"<?php if ($activemenu == 'team'){ ?>class="active"<?php } ?>><img src="/assets/img/Icons/team_white_24dp.svg" class="icon1">Екип</a></li>

          <a href="/menu/contact.php"<?php if ($activemenu == 'contact'){ ?>class="active"<?php } ?>>Контакти</a>
          <a href="/reg.php" <?php if ($activemenu == 'reg'){ ?>class="active"<?php } ?>>Регистрация</a>
          <?php
            if( !$loged ){?>
              <a href="/login.php" <?php if ($activemenu == 'login'){ ?>class="active"<?php } ?>><img src="/assets/img/Icons/login_white_24dp.svg" class="icon1">Вход</a>
            <?}else{?>
              <a href="/logout.php" <?php if ($activemenu == 'logout'){ ?>class="active"<?php } ?>>Изход<img src="/assets/img/Icons/logout_white_24dp.svg" class="icon2"></a>
            <?}?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->