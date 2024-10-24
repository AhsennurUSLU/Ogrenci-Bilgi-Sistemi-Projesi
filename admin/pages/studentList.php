<?php
session_start(); // Oturumu başlat

// Admin girişi yapılmış mı kontrol et
if (!isset($_SESSION['admin_id'])) {
    // Eğer admin giriş yapmamışsa, login sayfasına yönlendir
    header("Location: ../admin-login-page.php");
    exit();
}

// Eğer bu kod buraya geldiyse, admin oturumu açmıştır
?>

<?php include "../includes/header.php"; ?>
<div class="container-scroller">
    <?php include  "../includes/navbar.php";  ?>

    <div class="container-fluid page-body-wrapper d-flex">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-4 sidebar sidebar-offcanvas">
            <?php include "../includes/sidebar.php"; ?>
        </nav>

        <!-- Main content (form) -->


        <div class="container">

<h4>Öğrenci Listesi</h4>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Fotoğraf</th>
      <th scope="col">İsim</th>
      <th scope="col">Soyisim</th>
      <th scope="col">T.C Kimlik Numarası</th>
      <th scope="col">Öğrenci Numarası</th>
      <th scope="col">Fakülte</th>
      <th scope="col">Bölüm</th>
      <th scope="col">Danışman</th>
      <th scope="col">Sınıf</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Telefon Numarası</th>
   
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>            



        </div>


    </div>
</div>

<?php include "../includes/footer.php"; ?>


 