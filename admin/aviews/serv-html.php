<?php 
if( !defined('admindp') ) exit();
?>
  <?php require_once 'head-html.php'; 
  $activemenu = 'serv'; // $activemenu - за активна страница
  ?>
  

  <body>
    <?php require_once 'header-html.php';?>

  <main id="main">

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

    <div class="section-header">
          <h2>Меню: Услуги</h2>
          <?php if(!empty($saveEdit)){
            echo "Промените са запазени за: " . $saveEdit;
          }
        ?>

        <table class="table">
          <thead class="headerTable">
            <tr class="tr">
              <th scope="col">№</th>
              <th scope="col">Наименование на услугата</th>
              <th scope="col">Редакция</th>
              <th scope="col">Публикувано</th>
            </tr>
          </thead>
            <tbody class="tableBody">
              <?php
              foreach($serv as $k=>$serv){
                echo "<tr>";
                echo "<th scope='row'>".$serv['id']."</th>";
                echo "<td>".$serv['service_name']."</td>";
                echo "<td><a class='btn-get-started' href='services.php?id=".$serv['id']."'>Редактирай</a></td>";
                echo "<td>".$serv['published']."</td>";
              }
              ?>
            </tbody>
        </table>
      </div>
    </div>
  </section><!-- End Hero Section -->

      <?php require_once 'footer-html.php'; ?>