<?php
session_start();
session_unset(); // Tüm oturum değişkenlerini temizle
session_destroy(); // Oturumu sonlandır

// Çıkış yaptıktan sonra giriş sayfasına yönlendir
header("Location: ../pages/admin-login-page.php");
exit();
?>
