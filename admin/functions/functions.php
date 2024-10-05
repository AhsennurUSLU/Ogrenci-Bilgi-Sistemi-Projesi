<?php

include "../../database/connect.php";


// öğrenci ekleme işlemleri

if($_SERVER["REQUEST_METHOD"]== "POST" && isset($_POST['addStudent'])) {

$name = mysqli_real_escape_string($connection, $_POST['name']) ; 
$surname = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['surname'])) ; 
$identificationNum = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['identificationNum'])) ; 
$studentNum = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['studentNum'])) ; 
$password = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['password']));
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);  // Şifreyi hashle
$phone = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['phone'])) ; 
$class = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['class'])) ; 
$email = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['email'])) ; 
$faculty = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['faculty'])) ; 
$department = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['department'])) ; 
$advisor = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['advisor'])) ; 
$studentPhoto = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['studentPhoto'])) ;

// fotoğraf kaydetme işlemleri

if(isset($_FILES['studentPhoto']) && $_FILES['studentPhoto']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['studentPhoto']['tmp_name'];
    $fileName = $_FILES['studentPhoto']['name'];
    $uploadFileDir = '../../assets/uploads/';  // Yüklenen dosyanın kaydedileceği dizin
    $dest_path = $uploadFileDir . $fileName;

    // Fotoğrafı sunucuya yükle
    if(move_uploaded_file($fileTmpPath, $dest_path)) {
        $studentPhotoPath = $dest_path; // Fotoğrafın sunucuda kaydedildiği tam yolu path olarak al
    } else {
        echo "Fotoğraf yüklenirken hata oluştu.";
        exit();
    }
} else {
    $studentPhotoPath = '';  // Eğer fotoğraf seçilmediyse boş bırak
}

// Sonrasında $studentPhotoPath'i veritabanına kaydet


$sql = "INSERT INTO student (name,surname,identificationNum,studentNum,department,faculty,advisor,class,email,phone,password,studentPhoto) VALUES ('$name', '$surname', '$identificationNum', '$studentNum', '$department', '$faculty', '$advisor', '$class', '$email', '$phone', '$hashedPassword ', '$studentPhotoPath')";                        

if(mysqli_query($connection,$sql)){

    header("location: ../index.php");
        echo "Öğrenci başarıyla eklendi.";
    } else {
        echo "Öğrenci eklenirken hata oluştu: " . mysqli_error($connection);
    }

 
    mysqli_close($connection);
    }













?>