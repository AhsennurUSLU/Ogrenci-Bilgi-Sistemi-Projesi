<?php
session_start();

// Admin girişi yapılmış mı kontrol et
if (!isset($_SESSION['admin_id'])) {
    // Eğer giriş yapılmamışsa, admin-login.php sayfasına yönlendir
    header("Location: /OBS-Project/admin/pages/admin-login-page.php");
    exit();
}
?>

<?php



// öğrenci ekleme alerti
if (isset($_SESSION['success_message'])) {
  echo '<div id="success-alert" class="alert alert-success" style="position: fixed; top: 10px; right: 10px; z-index: 9999;">
           ' . $_SESSION['success_message'] . '
           <button class="close-btn" onclick="document.getElementById(\'success-alert\').style.display=\'none\'">&times;</button>
        </div>';

  // Mesajı gösterdikten sonra session'dan siliyoruz
  unset($_SESSION['success_message']);
}


// Başlık ve gerekli dosyaları dahil edin
require "includes/header.php";
require "../database/connect.php"; // Veritabanı bağlantısı dosyanızı ekleyin

// Fakülte, bölüm, öğrenci ve öğretmen sayılarını almak için SQL sorguları
$facultyQuery = "SELECT COUNT(*) AS faculty_count FROM faculty";
$departmentQuery = "SELECT COUNT(*) AS department_count FROM department";
$studentQuery = "SELECT COUNT(*) AS student_count FROM student";
$teacherQuery = "SELECT COUNT(*) AS teacher_count FROM teacher";
$lessonQuery = "SELECT COUNT(*) AS lesson_count FROM lessons";

// Sorguları çalıştırıyoruz
$facultyResult = mysqli_query($connection, $facultyQuery);
$departmentResult = mysqli_query($connection, $departmentQuery);
$studentResult = mysqli_query($connection, $studentQuery);
$teacherResult = mysqli_query($connection, $teacherQuery);
$lessonResult = mysqli_query($connection, $lessonQuery);

// Sonuçları çekiyoruz
$facultyCount = mysqli_fetch_assoc($facultyResult)['faculty_count'];
$departmentCount = mysqli_fetch_assoc($departmentResult)['department_count'];
$studentCount = mysqli_fetch_assoc($studentResult)['student_count'];
$teacherCount = mysqli_fetch_assoc($teacherResult)['teacher_count'];
$lessonCount = mysqli_fetch_assoc($lessonResult)['lesson_count'];

?>

<div class="container-scroller">
    <!-- Navbar -->
    <?php require "includes/navbar.php"; ?>

    <div class="container-fluid page-body-wrapper d-flex">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-4 sidebar sidebar-offcanvas">
            <?php require "includes/sidebar.php"; ?>
        </nav>
        <?php require "includes/main.php"; ?>
       
    </div>
</div>

<?php require "includes/footer.php"; ?>
