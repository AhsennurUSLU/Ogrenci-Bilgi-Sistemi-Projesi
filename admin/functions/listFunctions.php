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







?>


