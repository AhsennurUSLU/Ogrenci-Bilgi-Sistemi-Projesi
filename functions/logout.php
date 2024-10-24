<?php
session_start();  // Oturumu başlat

// Tüm oturum verilerini temizle
session_unset();

// Oturumu yok et
session_destroy();

// Kullanıcıyı giriş sayfasına yönlendir
header("Location: ../index.php");
exit();
?>
