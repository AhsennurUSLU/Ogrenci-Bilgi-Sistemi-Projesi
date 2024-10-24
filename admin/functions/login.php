<?php
session_start(); // Oturum başlatma

include "../../database/connect.php"; // Veritabanı bağlantısı

// Admin giriş yapma işlemi
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['adminLogin'])) {
    // Formdan gelen verileri alalım
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']); // Düz şifre

    // Veritabanında admin'i sorgula
    $query = "SELECT id, email, password FROM admin WHERE email = ?"; // Tek bir admin var
    if ($stmt = mysqli_prepare($connection, $query)) {
        // E-posta değerini sorguya bağla
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        // Admin bulundu mu kontrol et
        if (mysqli_stmt_num_rows($stmt) > 0) {
            // Sonuçları bağla
            mysqli_stmt_bind_result($stmt, $id, $db_email, $db_password);
            mysqli_stmt_fetch($stmt);

            // Şifreyi doğrudan karşılaştır
            if ($password === $db_password) {
                // Başarılı giriş: Oturum değişkenlerini ayarla
                $_SESSION['admin_id'] = $id;
                $_SESSION['admin_email'] = $db_email;

                // Giriş başarılı olduğunda yönlendirme yap
                header("Location: ../home.php");
                exit();
            } else {
                // Hatalı şifre
                echo "Hatalı şifre.";
            }
        } else {
            // Admin bulunamadı
            echo "Bu e-posta ile kayıtlı bir admin bulunamadı.";
        }

        // Sorguyu kapat
        mysqli_stmt_close($stmt);
    } else {
        // Sorgu hatası
        echo "Sorgu hatası: " . mysqli_error($connection);
    }

    // Veritabanı bağlantısını kapat
    mysqli_close($connection);
}
?>
