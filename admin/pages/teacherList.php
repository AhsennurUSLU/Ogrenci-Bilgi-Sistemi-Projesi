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

<?php
// Gerekli dosyaları dahil et
include "../includes/header.php";
include "../functions/listFunctions.php"; // Fonksiyonu dahil et

// Öğretmen verilerini getir
$teachers = getTeachers();
?>

<style>
    table th, table td {
    white-space: nowrap; /* Hücrelerdeki metin taşmaz, yerine kaydırma çubuğu çıkar */
}

table th {
    min-width: 150px; /* Kolonlar için minimum genişlik belirleyin */
}

table td img {
    max-width: 50px; /* Resimlerin genişliğini sınırlandırın */
}

</style>


<div class="container-scroller">
    <?php include "../includes/navbar.php"; ?>

    <div class="container-fluid page-body-wrapper d-flex">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-4 sidebar sidebar-offcanvas">
            <?php include "../includes/sidebar.php"; ?>
        </nav>

        <!-- Main content (table) -->
        <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Fotoğraf</th>
                        <th scope="col">Ünvan</th>
                        <th scope="col">İsim</th>
                        <th scope="col">Soyisim</th>
                        <th scope="col">T.C Kimlik Numarası</th>
                        <th scope="col">Öğretmen Numarası</th>
                        <th scope="col">Fakülte</th>
                        <th scope="col">Bölüm</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">Telefon</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($teachers)): ?>
                        <?php foreach ($teachers as $teacher): ?>
                        <tr>
                            <td><img src="<?php echo $teacher['teacherPhoto']; ?>" alt="Teacher Photo" width="50"></td>
                            <td><?php echo $teacher['appellation']; ?></td>
                            <td><?php echo $teacher['name']; ?></td>
                            <td><?php echo $teacher['surname']; ?></td>
                            <td><?php echo $teacher['identificationNum']; ?></td>
                            <td><?php echo $teacher['teacherNum']; ?></td>
                            <td><?php echo $teacher['faculty']; ?></td>
                            <td><?php echo $teacher['department']; ?></td>
                            <td><?php echo $teacher['email']; ?></td>
                            <td><?php echo $teacher['phone']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="10">Hiç veri bulunamadı.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
            </div> 
        </div>
    </div>
</div>

<?php include "../includes/footer.php"; ?>
