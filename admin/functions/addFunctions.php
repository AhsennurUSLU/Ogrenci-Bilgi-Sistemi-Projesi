<?php
session_start();
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


$sql = "INSERT INTO student (name, surname, identificationNum, studentNum, department, faculty, advisor, class, email, phone, password, studentPhoto) VALUES ('$name', '$surname', '$identificationNum', '$studentNum', '$department', '$faculty', '$advisor', '$class', '$email', '$phone', '$hashedPassword', '$studentPhotoPath')";                        

if(mysqli_query($connection, $sql)) {
    // Eklenen öğrenci ID'sini al
    $student_id = mysqli_insert_id($connection);

    // Öğrenci başarıyla eklendi, şimdi 'student_department' tablosuna ekleyelim
    $sql2 = "INSERT INTO student_department (student_id, department_id) VALUES ('$student_id', '$department')";

    if(mysqli_query($connection, $sql2)) {
        $_SESSION['success_message'] = "Öğrenci başarıyla kaydedildi ve bölüm bilgisi eklendi!";
        header("location: ../studentList.php");
        exit();
    } else {
        echo "Öğrenci eklenirken hata oluştu (student_department): " . mysqli_error($connection);
    }

} else {
    echo "Öğrenci eklenirken hata oluştu (student): " . mysqli_error($connection);
}

mysqli_close($connection);
}





// öğretmen ekleme işlemleri

if($_SERVER["REQUEST_METHOD"]== "POST" && isset($_POST['addTeacher'])) {

    $name = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['name'])) ; 
    $surname = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['surname'])) ; 
    $identificationNum = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['identificationNum'])) ; 
    $teacherNum = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['teacherNum'])) ; 
    $password = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['password']));
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);  // Şifreyi hashle
    $phone = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['phone'])) ; 
    $appellation = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['appellation'])) ; 
    $email = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['email'])) ; 
    $faculty = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['faculty'])) ; 
    $department = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['department'])) ; 
    $teacherPhoto = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['teacherPhoto'])) ;
    
    // fotoğraf kaydetme işlemleri
    
    if(isset($_FILES['teacherPhoto']) && $_FILES['teacherPhoto']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['teacherPhoto']['tmp_name'];
        $fileName = $_FILES['teacherPhoto']['name'];
        $uploadFileDir = '../../assets/uploads/';  // Yüklenen dosyanın kaydedileceği dizin
        $dest_path = $uploadFileDir . $fileName;
    
        // Fotoğrafı sunucuya yükle
        if(move_uploaded_file($fileTmpPath, $dest_path)) {
            $teacherPhotoPath = $dest_path; // Fotoğrafın sunucuda kaydedildiği tam yolu path olarak al
        } else {
            echo "Fotoğraf yüklenirken hata oluştu.";
            exit();
        }
    } else {
        $teacherPhotoPath = '';  // Eğer fotoğraf seçilmediyse boş bırak
    }
    
    // Sonrasında $studentPhotoPath'i veritabanına kaydet
    
    
    $sql = "INSERT INTO teacher (name, surname, identificationNum, teacherNum, department, faculty, email, appellation, phone, teacherPhoto, password) VALUES ('$name', '$surname', '$identificationNum', '$teacherNum', '$department', '$faculty',  '$email','$appellation', '$phone','$teacherPhotoPath', '$hashedPassword')";                        
    
    if(mysqli_query($connection,$sql)){  
    
       // echo "Öğrenci başarıyla eklendi.";
       $_SESSION['success_message'] = "Öğretmen başarıyla kaydedildi!";  // Session'a başarı mesajı ekliyoruz
        header("location: ../home.php");
        exit();
        
        } else {
            echo "Öğretmen eklenirken hata oluştu: " . mysqli_error($connection);
           
        }
    
     
        mysqli_close($connection);
        }
    







// Fakülte Ekleme işlemleri


if($_SERVER["REQUEST_METHOD"]== "POST" && isset($_POST['addFaculty'])) {
   
    $name = mysqli_real_escape_string($connection, $_POST['name']) ; 
    $facultyNum = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['facultyNum'])) ; 
    $facultyDean = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['facultyDean'])) ; 
   
    
  
    
    $sql = "INSERT INTO faculty (name,facultyNum,facultyDean) VALUES ('$name', '$facultyNum', '$facultyDean')";                        
    
    if(mysqli_query($connection,$sql)){  
    
       // echo "Öğrenci başarıyla eklendi.";
       $_SESSION['success_message'] = "Fakülte başarıyla kaydedildi!";  // Session'a başarı mesajı ekliyoruz
        header("location: ../pages/generalFacultyList.php");
        exit();
        
        } else {
            echo "Fakülte eklenirken hata oluştu: " . mysqli_error($connection);
           
        }
    
     
        mysqli_close($connection);
        }
    






// bölüm ekleme işlemleri




if ($_SERVER["REQUEST_METHOD"]== "POST" && isset($_POST['addDepartment'])) {
    $faculty_id =htmlspecialchars(mysqli_real_escape_string($connection, $_POST['chooseFaculty'])); // Fakülte id'sini alıyoruz
    $name = htmlspecialchars(mysqli_real_escape_string($connection,$_POST['name']));
    $departmentNum = htmlspecialchars(mysqli_real_escape_string($connection,$_POST['departmentNum']));
    $departmentHead = htmlspecialchars(mysqli_real_escape_string($connection,$_POST['departmentHead']));

    // Bölüm tablosuna kaydet
    $query = "INSERT INTO department (name, departmentNum, departmentHead) VALUES ('$name', '$departmentNum', '$departmentHead')";
    $result = mysqli_query($connection, $query);

    // Bölüm id'sini almak için son eklenen kaydı alıyoruz
    $department_id = mysqli_insert_id($connection);

    // Fakülte ile bölümü ilişkilendiren tabloya da kaydet
    $query_relation = "INSERT INTO department_faculty (faculty_id, department_id) VALUES ('$faculty_id', '$department_id')";
    mysqli_query($connection, $query_relation);

    // Yönlendirme işlemi başarılıysa
    if ($result) {
        header("Location: ../pages/generalFacultyList.php"); 
    } else {
        echo "Kayıt başarısız!";
    }
}


        




// ders ekleme işlemleri

if ($_SERVER["REQUEST_METHOD"]== "POST" && isset($_POST['addLessons'])) {
   
    // Formdan gelen verileri al
    $lessonName = mysqli_real_escape_string($connection, $_POST['lessonName']);
    $lessonNum = mysqli_real_escape_string($connection, $_POST['lessonNum']);
    $acts = mysqli_real_escape_string($connection, $_POST['acts']); 
    $lessonPeriod = mysqli_real_escape_string($connection, $_POST['lessonPeriod']); 
    $lessonYear = mysqli_real_escape_string($connection, $_POST['lessonYear']); 
    $class = mysqli_real_escape_string($connection, $_POST['class']); 
    $teacherId = mysqli_real_escape_string($connection, $_POST['teacherId']); 
    $departmentId = mysqli_real_escape_string($connection, $_POST['departmentId']); 

    
    // Verileri 'lessons' tablosuna ekleyelim
    $insertLessonQuery = "INSERT INTO lessons (name, lessonNum, acts, lessonPeriod, lessonsYear, lessonsClass, lessonsTeacher, lessonsDepartment) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    // Prepared statement kullanarak veriyi güvenli bir şekilde ekleyelim
    if ($stmt = mysqli_prepare($connection, $insertLessonQuery)) {
        // Parametreleri bağla
        mysqli_stmt_bind_param($stmt, "ssssssss", $lessonName, $lessonNum, $acts, $lessonPeriod,  $lessonYear,  $class, $teacherId, $departmentId);
        
        // Sorguyu çalıştır
        if (mysqli_stmt_execute($stmt)) {
            // Eklenen lesson_id'yi al
            $lessonId = mysqli_insert_id($connection);
            
            // 'department_lessons' tablosuna ekleyelim
            $insertDepartmentLessonQuery = "INSERT INTO department_lessons (department_id, lesson_id) VALUES (?, ?)";
            if ($stmtDept = mysqli_prepare($connection, $insertDepartmentLessonQuery)) {
                mysqli_stmt_bind_param($stmtDept, "ii", $departmentId, $lessonId);
                mysqli_stmt_execute($stmtDept);
                mysqli_stmt_close($stmtDept);
            }

            // 'teacher_lessons' tablosuna ekleyelim
            $insertTeacherLessonQuery = "INSERT INTO teacher_lessons (teacher_id, lesson_id) VALUES (?, ?)";
            if ($stmtTeacher = mysqli_prepare($connection, $insertTeacherLessonQuery)) {
                mysqli_stmt_bind_param($stmtTeacher, "ii", $teacherId, $lessonId);
                mysqli_stmt_execute($stmtTeacher);
                mysqli_stmt_close($stmtTeacher);
            }

            // Başarılı mesajı ve yönlendirme
            
            header("Location: ../pages/generalFacultyList.php");
            exit();
        } else {
            echo "Ders eklenirken bir hata oluştu.";
        }
        
        // Statement'ı kapat
        mysqli_stmt_close($stmt);
    }
}

// Veritabanı bağlantısını kapat
mysqli_close($connection);





?>

