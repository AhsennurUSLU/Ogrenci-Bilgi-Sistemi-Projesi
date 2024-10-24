<?php

include "../../database/connect.php";

//FAKÜLTELERİ LİSTELEYEN FONKSİYON 

// Fakülteleri getiren fonksiyon
function getFaculties() {
    global $connection; // Bağlantı değişkenini global olarak al

    $sql = "SELECT * FROM faculty"; // Fakülte adlarının olduğu tablo
    $result = mysqli_query($connection, $sql);

    // Fakülteleri tutacak dizi
    $faculties = [];

   // if(mysqli_num_rows($result) > 0) {
        // Sonuçları diziye ekleyelim
        while($row = mysqli_fetch_assoc($result)) {
            $faculties[] = $row;
           
        }
   // }

    return $faculties; // Fakülteleri geri döndür
}



// Belirli bir fakülteye ait bölümleri getiren fonksiyon
function getDepartmentsByFaculty($faculty_id) {
    global $connection;

    // Fakülte ID'ye göre bölümleri alıyoruz
    $sql = "SELECT d.name FROM department d
            INNER JOIN department_faculty df ON d.id = df.department_id
            WHERE df.faculty_id = $faculty_id";
    
    $result = mysqli_query($connection, $sql);
    
    $departments = [];

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $departments[] = $row;
        }
    }

    return $departments;
}




// öğretmen verilerini çek
// Veritabanı bağlantısını dahil et


function getTeachers() {
    global $connection; // Bağlantı değişkenini global olarak al

    // Sorgu
    $sql = "SELECT teacherPhoto, appellation, name, surname, identificationNum, teacherNum, faculty, department, email, phone FROM teacher";

    // Sorguyu çalıştır
    $result = mysqli_query($connection, $sql);

    // Sorgu hatasını kontrol et
    if (!$result) {
        die("Sorgu hatası: " . mysqli_error($connection));
    }

    // Sonuçları kontrol et ve döndür
    if (mysqli_num_rows($result) > 0) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC); // Tüm sonuçları dizi olarak döndür
    } else {
        return []; // Boş dizi döndür
    }
}



// sadece tüm bölümleri çeken fonksiyon


function getDepartments() {
    global $connection;

    $query = "SELECT id, name FROM department";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Veritabanı sorgusu başarısız: " . mysqli_error($connection));
    }

    $departments = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $departments[] = $row;
    }

    return $departments;
}









// Öğretmenleri getiren fonksiyon
function getTeachers2() {
    global $connection; // Veritabanı bağlantısını kullan

    $query = "SELECT id, name, surname , appellation FROM teacher";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Veritabanı sorgusu başarısız: " . mysqli_error($connection));
    }
    // Sonuçları dizi halinde döndür
    $teachers = array();
   
    while ($row = mysqli_fetch_assoc($result)) {
        $teachers[] = $row;
        }
    
    return $teachers;
}






?>






