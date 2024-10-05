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

<h4>Öğrenci Ekle</h4>

            <form method="POST" action="../functions/functions.php" enctype="multipart/form-data">
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
                        <label for="studentNum">Okul Numarası</label>
                        <input type="text" class="form-control" id="studentNum" name="studentNum">
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
                        <label for="class">Sınıf</label>
                        <select id="class" class="form-control" name="class">
                            <option selected>Seç</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
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
                        <select id="faculty" class="form-control" name="faculty">
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
                        <label for="department">Bölüm</label>
                        <select id="department" class="form-control" name="department">
                            <option selected>Seç</option>
                            <option>Bilgisayar mühendisliği</option>
                            <option>Elektrik-Elektronik mühendisliği</option>
                            <option>Makine mühendisliği</option>
                            <option>Gıda mühendisliği</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="advisor">Danışman</label>
                        <input type="text" class="form-control" id="advisor" name="advisor">
                    </div>

                 
                </div>
                <div class="form-group col-md-6">
                        <label for="studentPhoto">Fotoğraf Seç</label>
                        <input type="file" class="form-control-file" id="studentPhoto" name="studentPhoto">
                    </div>

                <button type="submit" class="btn btn-primary" name="addStudent">Kaydet</button>
            </form>
        </div>


    </div>
</div>

<?php include "../includes/footer.php"; ?>