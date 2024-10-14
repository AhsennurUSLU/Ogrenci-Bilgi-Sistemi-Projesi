<?php
require "../../database/connect.php"; // Veritabanı bağlantısını ekleyin

if (isset($_POST['faculty_id'])) {
    $faculty_id = $_POST['faculty_id'];

    // Fakülteye bağlı bölümleri department_faculty tablosu üzerinden çeken SQL sorgusu
    $query = "SELECT d.id, d.name 
              FROM department d
              JOIN department_faculty df ON d.id = df.department_id
              WHERE df.faculty_id = ?";
              
    $stmt = $connection->prepare($query);
    $stmt->bind_param("i", $faculty_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Bölümleri diziye ekliyoruz
    $departments = [];
    while ($row = $result->fetch_assoc()) {
        $departments[] = $row;
    }

    // JSON formatında döndür
    echo json_encode($departments);
}
?>
