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
                        <label for="Tname">İsim</label>
                        <input type="text" class="form-control" id="Tname" name="Tname">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Tsurname">Soyisim</label>
                        <input type="text" class="form-control" id="Tsurname" name="Tsurname">
                    </div>
                    
                  
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="TidentificationNum">T.C Kimlik Numarası</label>
                        <input type="text" class="form-control" id="TidentificationNum" name="TidentificationNum">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="teacherNum">Öğretmen Numarası</label>
                        <input type="text" class="form-control" id="teacherNum" name="teacherNum">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Tpassword">Şifre</label>
                        <input type="password" class="form-control" id="Tpassword" name="Tpassword">
                    </div>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="Tphone">Telefon</label>
                        <input type="text" class="form-control" id="Tphone" name="Tphone">
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
                        <label for="Temail">E-Mail</label>
                        <input type="email" class="form-control" id="Temail" name="Temail">
                    </div>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="Tfaculty">Fakülte</label>
                        <select id="Tfaculty" class="form-control" name="Tfaculty">
                            <option selected>Seç</option>
                            <option>Teknoloji Fakültesi</option>
                            <option>Tıp Fakültesi</option>
                            <option>Eğitim Fakültesi</option>
                            <option>Hukuk Fakültesi</option>
                            <option>Mimarlık Fakültesi</option>
                            <option>Veterinerlik Fakültesi</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Tdepartment">Bölüm</label>
                        <select id="Tdepartment" class="form-control" name="Tdepartment">
                            <option selected>Seç</option>
                            <option>Bilgisayar mühendisliği</option>
                            <option>Elektrik-Elektronik mühendisliği</option>
                            <option>Makine mühendisliği</option>
                            <option>Gıda mühendisliği</option>
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


 