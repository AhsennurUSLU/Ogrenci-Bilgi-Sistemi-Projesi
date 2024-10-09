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


$sql = "INSERT INTO student (name,surname,identificationNum,studentNum,department,faculty,advisor,class,email,phone,password,studentPhoto) VALUES ('$name', '$surname', '$identificationNum', '$studentNum', '$department', '$faculty', '$advisor', '$class', '$email', '$phone', '$hashedPassword ', '$studentPhotoPath')";                        

if(mysqli_query($connection,$sql)){  

   // echo "Öğrenci başarıyla eklendi.";
   $_SESSION['success_message'] = "Öğrenci başarıyla kaydedildi!";  // Session'a başarı mesajı ekliyoruz
    header("location: ../home.php");
    exit();
    
    } else {
        echo "Öğrenci eklenirken hata oluştu: " . mysqli_error($connection);
       
    }

 
    mysqli_close($connection);
    }



// öğretmen ekleme işlemleri

if($_SERVER["REQUEST_METHOD"]== "POST" && isset($_POST['addTeacher'])) {

    $name = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['Tname'])) ; 
    $surname = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['Tsurname'])) ; 
    $identificationNum = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['TidentificationNum'])) ; 
    $teacherNum = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['teacherNum'])) ; 
    $password = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['Tpassword']));
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);  // Şifreyi hashle
    $phone = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['Tphone'])) ; 
    $appellation = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['appellation'])) ; 
    $email = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['Temail'])) ; 
    $faculty = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['Tfaculty'])) ; 
    $department = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['Tdepartment'])) ; 
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
    
    
    $sql = "INSERT INTO teacher (name,surname,identificationNum,teacherNum,department,faculty,email,appellation,phone,teacherPhoto,password) VALUES ('$name', '$surname', '$identificationNum', '$teacherNum', '$department', '$faculty',  '$email','$appellation', '$phone','$teacherPhotoPath', '$hashedPassword ')";                        
    
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


        








?>

