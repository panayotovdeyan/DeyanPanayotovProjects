<?php 
if( !defined('cmsdp') ) exit(); 
?>
  <?php require_once 'head-html.php'; 
  $activemenu = 'about'; // $activemenu - за активна страница
  ?>
  


  
    <?php require_once 'header-html.php'; ?>

<main id="main">

<!-- ======= Menu About ======= -->
  <body class = "about-body">
    <section id="about1" class="inner-page" data-aos="fade-up">
      <div class="container">

          <!-- ======= Menu About 1 ======= -->
        <section id="about1" class="inner-page">
            <div class="container">
              <h2><?php echo $pageAbout1->title ?></h2>
              <h3><?php echo $pageAbout1->subtitle ?></h3>
              <p><?php echo $pageAbout1->text ?></p>
              <center><video autoplay="" hide-on-mobile="" loop="" muted="" playsinline="" preload="metadata" width="60%">
                <?php echo "<source src='" . $pageAbout1->image . "'>";?>>
              </video></center>
            </div>
        </section>


          <!-- ======= Menu About 2 ======= -->
        <section id="about2" class="inner-page">
          <div class="container">
            <h2><?php echo $pageAbout2->title ?></h2>
            <h3><?php echo $pageAbout2->subtitle ?></h3>
            <p><?php echo $pageAbout2->text ?></p>
            <center><?php echo "<img src='" . $pageAbout2->image . "'>"; ?></center>
          </div>
        </section>


          <!-- ======= Menu About 3 ======= -->
        <section id="about3" class="inner-page">
          <div class="container">
            <h2><?php echo $pageAbout3->title ?></h2>
              <a href="/menu/service/service_home.php" style="text-decoration: underline" >
              <h3><?php echo $pageAbout3->subtitle ?></h3>
              <p><?php echo $pageAbout3->text ?></p>
              <?php echo "<img src='" . $pageAbout3->image . "'>"; ?>
              </a>
          </div>
        </section>

          <!-- ======= Menu About 4 ======= -->

        <section id="about4" class="inner-page">
          <div class="container">
            <h2><?php echo $pageAbout4->title ?></h2>
            <h3><?php echo $pageAbout4->subtitle ?></h3>
            <p><?php echo $pageAbout4->text ?></p>
            <?php echo "<img src='" . $pageAbout4->image . "'>"; ?>
          </div>
        </section>

<!-- ======= End Menu About ======= -->
      </div>
    </section>
  </body>
</main><!-- End #main -->


<?php require_once 'footer-html.php'; ?>