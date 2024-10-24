<?php
session_start();
include '../database/connect.php'; // Veritabanı bağlantısı






// Öğrenci giriş yapma işlemleri
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['loginStudent'])) {
    // Formdan gelen verileri alalım
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    // Veritabanında email'e karşılık gelen kullanıcıyı sorgula
    $query = "SELECT id, studentNum, email, password, name, surname, faculty, department, advisor, class FROM student WHERE email = ?";
    if ($stmt = mysqli_prepare($connection, $query)) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        // Öğrenci bulundu mu kontrol et
        if (mysqli_stmt_num_rows($stmt) > 0) {
            mysqli_stmt_bind_result($stmt, $id, $student_num, $db_email, $db_password, $name, $surname, $faculty, $department, $advisor, $class);
            mysqli_stmt_fetch($stmt);

            // Şifreyi doğrula (şifrenin hash'li olduğunu varsayıyoruz)
            if (password_verify($password, $db_password)) {
                // Başarılı giriş: Oturum değişkenlerini başlat
                $_SESSION['student_id'] = $id;
                $_SESSION['student_num'] = $student_num;
                $_SESSION['student_email'] = $db_email;
                $_SESSION['student_name'] = $name;
                $_SESSION['student_surname'] = $surname;
                $_SESSION['student_faculty'] = $faculty;
                $_SESSION['student_department'] = $department;
                $_SESSION['student_advisor'] = $advisor;
                $_SESSION['student_class'] = $class;

                // Giriş başarılı olduğunda yönlendirme yap
                header("Location: ../pages/student-home.php");
                exit();
            } else {
                echo "Hatalı şifre.";
            }
        } else {
            echo "Bu e-posta ile kayıtlı bir öğrenci bulunamadı.";
        }

        // Statement'ı kapat
        mysqli_stmt_close($stmt);
    } else {
        echo "Sorgu hatası: " . mysqli_error($connection);
    }
}



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////







// öğretmen için login işlemleri


// Öğrenci giriş yapma işlemleri
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['loginTeacher'])) {
    // Formdan gelen verileri alalım
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    // Veritabanında email'e karşılık gelen kullanıcıyı sorgula
    $query = "SELECT id, email, password FROM teacher WHERE email = ?";
    if ($stmt = mysqli_prepare($connection, $query)) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        // Sorgudan veri döndü mü kontrol edin
        if (mysqli_stmt_num_rows($stmt) > 0) {
            // Sonuçları bağla
            mysqli_stmt_bind_result($stmt, $id, $db_email, $db_password);

            // Verileri çekin
            if (mysqli_stmt_fetch($stmt)) {
                // Şifre kontrolü
                if (password_verify($password, $db_password)) {
                    // Oturum değişkenlerini ayarla ve yönlendir
                    $_SESSION['teacher_id'] = $id;
                    $_SESSION['teacher_email'] = $db_email;
                    header("Location: ../pages/teacher-home-page.php");
                    exit();
                } else {
                    echo "Hatalı şifre.";
                }
            } else {
                echo "Veritabanından veri çekilemedi.";
            }
        } else {
            echo "Bu e-posta ile kayıtlı bir öğretmen bulunamadı.";
        }
    }
}

?>