<?php session_start(); 

// öğrenci ekleme alerti
if (isset($_SESSION['success_message'])) {
  echo '<div id="success-alert" class="alert alert-success" style="position: fixed; top: 10px; right: 10px; z-index: 9999;">
           ' . $_SESSION['success_message'] . '
           <button class="close-btn" onclick="document.getElementById(\'success-alert\').style.display=\'none\'">&times;</button>
        </div>';
  
  // Mesajı gösterdikten sonra session'dan siliyoruz
  unset($_SESSION['success_message']);
}

?>

<?php require  "includes/header.php" ;  ?>



  <body class="with-welcome-text">
    <div class="container-scroller">
     
<!-- navbar -->
      <?php require  "includes/navbar.php" ;  ?>
   
      <div class="container-fluid page-body-wrapper">
<!-- sidebar -->
        <?php require   "includes/sidebar.php" ;  ?>

      
      </div>

     
          <?php require  "includes/footer.php" ;  ?>
    