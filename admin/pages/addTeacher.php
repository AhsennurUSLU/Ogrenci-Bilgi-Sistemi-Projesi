<?php include "../includes/header.php"; ?>
<div class="container-scroller">
    <?php include  "../includes/navbar.php";  ?>

    <div class="container-fluid page-body-wrapper d-flex">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-4 sidebar sidebar-offcanvas">
            <?php include "../includes/sidebar.php"; ?>
        </nav>

        <!-- Main content (form) -->


       


<div class="container">
            <form method="POST" action="../functions/addFunctions.php" enctype="multipart/form-data">
                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="name">İsim</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="surname">Soyisim</label>
                        <input type="text" class="form-control" id="surname" name="surname">
                    </div>
                    
                  
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="identificationNum">T.C Kimlik Numarası</label>
                        <input type="text" class="form-control" id="identificationNum" name="identificationNum">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="teacherNum">Öğretmen Numarası</label>
                        <input type="text" class="form-control" id="teacherNum" name="teacherNum">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">Şifre</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="phone">Telefon</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="appellation">Ünvan</label>
                        <select id="appellation" class="form-control" name="appellation">
                            <option selected>Seç</option>
                            <option>Doktor</option>
                            <option>Araştırma Görevlisi</option>
                            <option>Doçent</option>
                            <option>Profesör</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">E-Mail</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="faculty">Fakülte</label>
                      
                        <?php
                      
                      include "../functions/listFunctions.php";

                      // Fakülteleri al
                      $faculties = getFaculties();

                      echo  '<select id="faculty" class="form-control" name="faculty">';

                      echo '<option selected>Seç</option>';
                      foreach ($faculties as $faculty) {
                        //  echo    '<option>' . htmlspecialchars($faculty) . '</option>';
                          echo '<option value="' . $faculty['id'] . '">' . htmlspecialchars($faculty['name']) . '</option>';

                      }
                      echo '</select>';
                      echo '</div>';
                      ?>
                   
                    <div class="form-group col-md-6">
                        <label for="department">Bölüm</label>
                        <select id="department" class="form-control" name="department">
                            <option selected>Seç</option>
                          
                        </select>
                    </div>

                 
                </div>
                <div class="form-group col-md-6">
                        <label for="teacherPhoto">Fotoğraf Seç</label>
                        <input type="file" class="form-control-file" id="teacherPhoto" name="teacherPhoto">
                    </div>

                <button type="submit" class="btn btn-primary" name="addTeacher">Kaydet</button>
            </form>
        </div>


    </div>
</div>

<?php include "../includes/footer.php"; ?>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Fakülte seçimi değiştiğinde
        $('#faculty').on('change', function() {
            var facultyId = $(this).val(); // Seçilen fakültenin id'sini al

            if (facultyId) {
                $.ajax({
                    type: 'POST',
                    url: '../functions/getDepartments.php', // Fakülteye göre bölümleri çeken PHP dosyası
                    data: { faculty_id: facultyId },
                    dataType: 'json',
                    success: function(response) {
                        $('#department').empty(); // Bölüm select kutusunu temizle
                        $('#department').append('<option selected>Seç</option>'); // Varsayılan option ekle

                        // Gelen bölümleri döngüyle ekleyelim
                        $.each(response, function(key, value) {
                            $('#department').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            } else {
                $('#department').empty(); // Eğer fakülte seçilmediyse bölümleri temizle
                $('#department').append('<option selected>Seç</option>'); // Varsayılan option ekle
            }
        });
    });
</script>


 