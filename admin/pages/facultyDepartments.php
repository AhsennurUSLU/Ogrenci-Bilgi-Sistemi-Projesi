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
include "../includes/header.php";
include "../functions/listFunctions.php";

// GET ile gelen fakülte ID'sini alıyoruz
if (isset($_GET['faculty_id'])) {
    $faculty_id = intval($_GET['faculty_id']); // Fakülte ID'sini güvenli bir şekilde alıyoruz

    // Fakülteye ait bölümleri alalım
    $departments = getDepartmentsByFaculty($faculty_id);
} else {
    echo "Geçersiz fakülte ID!";
    exit;
}

?>

<div class="container-scroller">
    <?php include  "../includes/navbar.php";  ?>

    <div class="container-fluid page-body-wrapper d-flex">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-4 sidebar sidebar-offcanvas">
            <?php include "../includes/sidebar.php"; ?>
        </nav>


        <style>
            .class-card {
                display: flex;
                /* Flexbox kullanarak kartları hizalar */
                justify-content: center;
                /* İçerik ortalanır */
                align-items: center;
                /* İçerik dikey olarak ortalanır */
                background-color: #f8f9fa;
                /* Soft background color */
                border: 1px solid #e0e0e0;
                /* Light border */
                border-radius: 10px;
                /* Rounded corners */
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                /* Soft shadow */
                transition: transform 0.2s, box-shadow 0.2s;
                /* Smooth scaling and shadow on hover */
                text-decoration: none;
                /* Alt çizgiyi kaldır */
                color: inherit;
                /* Yazı rengini miras al */
                height: 150px;
                /* Kart yüksekliğini ayarlama */
                margin-bottom: 20px;
                /* Kartlar arasında boşluk bırakma */
            }

            .class-card:hover {
                transform: scale(1.05);
                /* Slightly enlarge on hover */
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                /* Darker shadow on hover */
            }

            .card-title {
                font-size: 1 rem;
                color: #333;
                /* Darker text color for contrast */
                font-weight: bold;
                /* Bold font for emphasis */
            }
        </style>





        <!-- Main content -->
        <div class="container my-5">
            <h3 class="text-center mb-4">Bölümler</h3>
            <div class="row">
                <?php
                if (!empty($departments)) {
                    foreach ($departments as $department) {
                        echo  '<div class="col-md-3">';
                        echo    '<div class="class-card">';
                        echo       '<div class="card-body text-center">';
                        echo          '<h5 class="card-title">' . htmlspecialchars($department['name']) . '</h5>';
                        echo       '</div>';
                        echo    '</div>';
                        echo  '</div>';
                    }
                } else {
                    echo '<p class="text-center">Bu fakülteye ait bölüm bulunmamaktadır.</p>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include "../includes/footer.php"; ?>
