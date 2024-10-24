<?php 

session_start();

if (isset($_SESSION['teacher_id'])) {
   
} else {
    // Giriş yapmamışsa yönlendir
    header("Location: ../functions/login.php");
    exit();
}



?>
<?php include  "../config.php";  ?>
<?php include __DIR__ . "/../includes/header.php"; ?>
<?php include __DIR__ . "/../includes/content-navbar.php"; ?>

<?php include __DIR__ . "/../includes/teacher-sidebar.php"; ?>






















<?php include __DIR__ . "/../includes/footer.php"; ?>