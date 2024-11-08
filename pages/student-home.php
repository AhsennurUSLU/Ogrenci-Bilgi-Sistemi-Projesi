<?php
session_start();

if (!isset($_SESSION['student_id'])) {
    // Giriş yapılmamışsa yönlendirme
    header("Location: ../functions/login.php");
    exit();
}

// Kullanıcı oturum bilgilerini çek
$student_id = $_SESSION['student_id'];
$student_num = $_SESSION['student_num'];
$student_name = $_SESSION['student_name'];
$student_surname = $_SESSION['student_surname'];
$student_email = $_SESSION['student_email'];
$student_faculty = $_SESSION['student_faculty'];
$student_department = $_SESSION['student_department'];
$student_advisor = $_SESSION['student_advisor'];
$student_class = $_SESSION['student_class'];
?>

<?php include "../config.php"; ?>
<?php include __DIR__ . "/../includes/header.php"; ?>

<style>
    /* Sadece başlıkların arka plan rengini özelleştir */
    .custom-table .table-header th {
        background-color: #1A4870;
        color: #FFFFFF;
    }
</style>

<div class="container-scroller">
    <?php include __DIR__ . "/../includes/content-navbar.php"; ?>

    <div class="container-fluid page-body-wrapper d-flex">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-4 sidebar sidebar-offcanvas">
            <?php include __DIR__ . "/../includes/student-sidebar.php"; ?>
        </nav>

        <!-- Main content (form) -->
        <div class="container mt-4">
            <div class="row">
                <!-- Profile Picture Column -->
                <div class="col-md-3 text-center">
                    <img src="../assets/images/profile.png" class="img-fluid rounded-circle mb-3" alt="profile" style="width: 100px; height: 100px;">
                    <h5 class="text-primary"><?php echo $student_name . " " . $student_surname; ?></h5>
                </div>

                <!-- Information Table Column -->
                <div class="col-md-8">
                    <table class="table table-bordered custom-table">
                        <thead>
                            <tr class="table-header">
                                <th colspan="2" class="text-center">Danışmanlık İşlemleri</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Öğrenci No:</th>
                                <td><?php echo $student_num; ?></td>
                            </tr>
                            <tr>
                                <th>Adı Soyadı:</th>
                                <td><?php echo $student_name . " " . $student_surname; ?></td>
                            </tr>
                            <tr>
                                <th>Fakülte:</th>
                                <td><?php echo $student_faculty; ?></td>
                            </tr>
                            <tr>
                                <th>Bölüm:</th>
                                <td><?php echo $student_department; ?></td>
                            </tr>
                            <tr>
                                <th>Danışman:</th>
                                <td><?php echo $student_advisor; ?></td>
                            </tr>
                            <tr>
                                <th>Sınıf:</th>
                                <td><?php echo $student_class; ?></td>
                            </tr>
                            <tr>
                                <th>E-Posta:</th>
                                <td><?php echo $student_email; ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered custom-table mt-4">
                        <thead>
                            <tr class="table-header">
                                <th colspan="2" class="text-center">Bölüm Bilgileri</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Bölüm Adı:</th>
                                <td><?php echo $student_department; ?></td>
                            </tr>
                            <tr>
                                <th>Bölüm Başkanı:</th>
                                <td>İsmail Sarıtaş</td>
                            </tr>
                            <tr>
                                <th>E-Posta:</th>
                                <td>isaritas@selcuk.edu.tr</td>
                            </tr>
                            <tr>
                                <th>Web Sayfası:</th>
                                <td><a href="http://tf.selcuk.edu.tr" target="_blank">tf.selcuk.edu.tr</a></td>
                            </tr>
                            <tr>
                                <th>Telefon:</th>
                                <td>03322233354</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>

<?php include __DIR__ . "/../includes/footer.php"; ?>
