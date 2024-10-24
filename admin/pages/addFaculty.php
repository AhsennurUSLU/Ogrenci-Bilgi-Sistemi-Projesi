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


     

            
            <div class="container my-5">

            <form method="POST" action="../functions/addFunctions.php" enctype="multipart/form-data">
                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="name"> Fakülte Adı</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="facultyNum">Fakülte Numarası</label>
                        <input type="text" class="form-control" id="facultyNum" name="facultyNum">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="facultyDean">Fakülte Dekanı</label>
                        <input type="text" class="form-control" id="facultyDean" name="facultyDean">
                    </div>


                </div>


  

        <button type="submit" class="btn btn-primary" name="addFaculty">Kaydet</button>
        </form>
        </div>
    </div>
</div>




<?php include "../includes/footer.php"; ?>