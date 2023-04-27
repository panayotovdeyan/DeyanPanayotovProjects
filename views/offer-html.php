<?php 
if( !defined('cmsdp') ) exit();
?>

<?php
require_once 'head-html.php';
$activemenu = 'offer'; // $activemenu - за активна страница
?>
<body>
    <?php require_once 'header-html.php'; ?>

    <main id="main">


    <!-- ======= Offer Section ======= -->
    <section id="offer" class="contact">
      <div class="container">

        <div class="section-title">
          <span><?php echo $offer1->title ?></span>
          <br>
          <p><?php echo $offer1->subtitle ?></p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12">
            <div class="info-box mb-4">
              <p><?php echo $offer1->text ?></p>
            </div>
          </div>
        </div>

        <div class="row" data-aos="fade-up">

          <div class="col-lg-6 ">
            <a class="mb-4 mb-lg-0" href="/menu/service/service_home.php"><?php echo "<img src='" . $offer1->image . "' style='width: 100%;'>";?></a>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <input type="hidden" name="mailOffer" value="0" id="mailOffer">
            <!-- <input type="hidden" name="csrf_token" value="<?=$_SESSION['csrf_token'] ?>" > -->

              <div class="row">
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <label for="name">Име</label>
                <input type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <label for="email">Имейл</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
              <div class="col-md-3 form-group mt-1 mt-md-2">
                <label for="phone">Телефон</label>
                <input type="phone" class="form-control" name="phone" id="phone" required>
              </div>
              <div class="form-group mt-2">
                <label for="adress">Адрес (моля, посочете задълнително и етажа)</label>
                <input type="text" class="form-control" name="adress" id="adress" >
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-2">
                <label for="text1">Kонсумация на месец в kw/h</label>
                <input type="text" class="form-control" name="text1" id="text1" >
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-2">
                <label for="text2">Kвадратура на покрива</label>
                <input class="form-control" name="text2" id="text2" >
              </div>
              <div class="form-group mt-2">
                <label for="message">Добавете коментар ако желаете</label>
                <textarea class="form-control" name="message" id="message"></textarea>
              </div>
              <div class="my-3">
                <div class="text-center">
                  <button type="submit" onclick="document.getElementById('mailOffer').value=1;">Изпрати запитването</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      </div>
    </section><!-- End Offer Section -->

    </main><!-- End #main -->

<?php require_once 'footer-html.php'; ?>