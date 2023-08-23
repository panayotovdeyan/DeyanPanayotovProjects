<?php 
if( !defined('admindp') ) exit();
?>
  <?php require_once 'head-html.php'; 
  $activemenu = 'team'; // $activemenu - за активна страница
  ?>
  

  <body>
    <?php require_once 'header-html.php';?>

  <main id="main">

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

    <div class="section-header">
          <h2>Меню: Екип</h2>
          <?php if(!empty($saveEdit)){
            echo "Промените са запазени за: " . $saveEdit;
          }
        ?>

        <table class="table">
          <thead class="headerTable">
            <tr class="tr">
              <th scope="col">№</th>
              <th scope="col">Имена</th>
              <th scope="col">Позиция</th>
              <th scope="col">Публикувано</th>
              <th scope="col">Редакция</th>
            </tr>
          </thead>
            <tbody class="tableBody">
              <?php
              foreach($member as $m=>$member){
                echo "<tr>";
                echo "<th scope='row'>".$member['id']."</th>";
                echo "<td>".$member['memberName']."</td>";
                echo "<td>".$member['memberPosition']."</td>";
                echo "<td>".$member['published']."</td>";
                echo "<td><a class='btn-get-started' href='team.php?id=".$member['id']."'>Редактирай</a></td>";
              }
              ?>
            </tbody>
        </table>
      </div>
    </div>
  </section><!-- End Hero Section -->

      <?php require_once 'footer-html.php'; ?>