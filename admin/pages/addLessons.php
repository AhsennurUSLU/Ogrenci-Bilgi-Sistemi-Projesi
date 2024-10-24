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
            <form method="POST" action="../functions/addFunctions.php">
                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="lessonName">Ders Adı</label>
                        <input type="text" class="form-control" id="lessonName" name="lessonName">
                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="lessonNum">Ders Numarası</label>
                            <input type="text" class="form-control" id="lessonNum" name="lessonNum">
                        </div>

                    </div>

                </div>



                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="acts">ACTS</label>
                        <input type="text" class="form-control" id="acts" name="acts">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="lessonPeriod">Ders Dönemi</label>
                        <select id="lessonPeriod" class="form-control" name="lessonPeriod">
                            <option selected>Seç</option>
                            <option>Güz Dönemi</option>
                            <option>Bahar Dönemi</option>

                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lessonYear">Ders Yılı</label>
                        <select id="lessonYear" class="form-control" name="lessonYear">
                            <option selected>Seç</option>
                            <option>2020-2021</option>
                            <option>2021-2022</option>
                            <option>2022-2023</option>
                            <option>2023-2024</option>
                            <option>2024-2025</option>
                            <option>2025-2026</option>
                            <option>2026-2027</option>

                        </select>
                    </div>


                    
                    <div class="form-group col-md-6">
                        <label for="class">Dersi Alacak Sınıf</label>
                        <select id="class" class="form-control" name="class">
                            <option selected>Seç</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>

                  

                </div>

                <div class="form-row">


                <div class="form-group col-md-6">
                        <label for="teacherId">Öğretim Görevlisi</label>
                        <select id="teacherId" class="form-control" name="teacherId">
                            <option selected>Seç</option>
                            <?php
                            // Öğretmenleri al ve listele
                            include "../functions/listFunctions.php";
                            $teachers = getTeachers2();

                            foreach ($teachers as $teacher) {
                                echo '<option value="' . $teacher['id'] . '">' . htmlspecialchars($teacher['appellation']) . "  " . htmlspecialchars($teacher['name']) . "  "  . htmlspecialchars($teacher['surname']) . '</option>';
                            }
                            ?>
                        </select>
                    </div>

                    
                    <div class="form-group col-md-6">
                        <label for="departmentId">Bölüm</label>
                        <select id="departmentId" class="form-control" name="departmentId">
                            <option selected>Seç</option>
                            <?php
                            // Bölümleri al ve listele


                            $departments = getDepartments();

                            foreach ($departments as $department) {

                                echo '<option value="' . $department['id'] . '">' . htmlspecialchars($department['name']) . '</option>';
                            }
                            ?>
                        </select>
                    </div>



                </div>


                <button type="submit" class="btn btn-primary" name="addLessons">Kaydet</button>
            </form>
        </div>


    </div>
</div>

<?php include "../includes/footer.php"; ?>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>