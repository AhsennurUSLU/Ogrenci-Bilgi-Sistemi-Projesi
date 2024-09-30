<?php include  "../config.php";  ?>
<?php include __DIR__ . "/../includes/header.php"; ?>
<?php include __DIR__ . "/../includes/content-navbar.php"; ?>

<style>
    .card {
        border-radius: 50%;
        overflow: hidden;
        width: 150px;
        height: 150px;
        margin: 10px;
        position: relative;
        /* Relative pozisyon eklendi */
        text-align: center;
        transition: transform 0.2s;
    }

    .card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
    }

    .card-body {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        /* Ortalamak için */
        color: white;
        /* Yazı rengi beyaz yapıldı */
        z-index: 2;
        /* Resmin üstünde olması için z-index eklendi */
        width: 100%;
        /* Yazı alanı tam kart genişliğinde */
        text-align: center;
        background-color: rgba(0, 0, 0, 0.5);
        /* Yarı şeffaf bir arka plan eklendi */
    }

    .card-title {
        font-size: 1rem;
        margin: 0;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card a {
        text-decoration: none;
        color: inherit;
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        min-height: 60vh;
    }

    @media (min-width: 576px) {
        .card {
            width: 120px;
            height: 120px;
        }
    }

    @media (min-width: 768px) {
        .card {
            width: 140px;
            height: 140px;
        }
    }

    @media (min-width: 992px) {
        .card {
            width: 160px;
            height: 160px;
        }
    }

    @media (min-width: 1200px) {
        .card {
            width: 180px;
            height: 180px;
        }
    }

    .small-image {
        width: 120px;
        height: auto; /* Yükseklik otomatik oranlansın */
    }
</style>




<div class="container mt-5">

    <div class="row">
        <div class="col-md-6">
        <div class="row">

            <div class="col-md-2">
                <img src="../assets/images/profile.png" class="small-image" alt="profile">
               
            </div>
  
            <div class="col-md-4">
                <table class="table table-bordered">
                    <th colspan="12">DANIŞMANLIK İŞLEMLERİ</th>

                    <tbody>
                        <tr>
                            <th scope="row">Öğrenci No:</th>
                            <td>703302002</td>
                        </tr>
                        <tr>
                            <th scope="row">Adı Soyadı:</th>
                            <td>Ahsennur Uslu</td>
                        </tr>
                        <tr>
                            <th scope="row">Fakülte:</th>
                            <td>Teknoloji Fakültesi</td>
                        </tr>
                        <tr>
                            <th scope="row">Bölüm:</th>
                            <td>Elektrik-Elektronik Mühendisliği</td>
                        </tr>
                        <tr>
                            <th scope="row">Danışman:</th>
                            <td>Hulusi Karaca</td>
                        </tr>
                        <tr>
                            <th scope="row">Sınıf:</th>
                            <td>2</td>
                        </tr>
                        <tr>
                            <th scope="row">E-Posta:</th>
                            <td>703302002@ogr.selcuk.edu.tr</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">Bölüm Adı:</th>
                            <td>Elektrik-Elektronik Mühendisliği</td>
                        </tr>
                        <tr>
                            <th scope="row">Bölüm Başkanı:</th>
                            <td>İsmail Sarıtaş</td>
                        </tr>
                        <tr>
                            <th scope="row">E-Posta:</th>
                            <td>isaritas@selcuk.edu.tr</td>
                        </tr>
                        <tr>
                            <th scope="row">Web Sayfası</th>
                            <td>http://tf.selcuk.edu.tr</td>
                        </tr>
                        <tr>
                            <th scope="row">Telefon:</th>
                            <td>03322233354</td>
                        </tr>

                </table>
            </div>


            </div>
        </div>



        <div class="col-md-6">


            <div class="card-container">
                <!-- Kartlar burada -->
                <div class="card">
                    <a href="student-home.php">
                        <img src="../assets/images/kep.png" alt="Admin">
                        <div class="card-body">
                            <h5 class="card-title">Anasayfa</h5>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="pages/admin_login.php">
                        <img src="../assets/images/kep.png" alt="Admin">
                        <div class="card-body">
                            <h5 class="card-title">Ders Kaydı</h5>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="pages/admin_login.php">
                        <img src="../assets/images/kep.png" alt="Admin">
                        <div class="card-body">
                            <h5 class="card-title">Onay Takip</h5>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="grade-info.php">
                        <img src="../assets/images/kep.png" alt="Student">
                        <div class="card-body">
                            <h5 class="card-title">Not Bilgilerim</h5>
                        </div>
                    </a>
                </div>

                <div class="card">
                    <a href="absence-info.php">
                        <img src="../assets/images/kep.png" alt="Teacher">
                        <div class="card-body">
                            <h5 class="card-title">Akademisyen ve Bölüm Bilgileri</h5>
                        </div>
                    </a>
                </div>

              
                <div class="card">
                    <a href="transcript-info.php">
                        <img src="../assets/images/kep.png" alt="Admin">
                        <div class="card-body">
                            <h5 class="card-title">Transkript</h5>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="advisor-page.php">
                        <img src="../assets/images/kep.png" alt="Admin">
                        <div class="card-body">
                            <h5 class="card-title">Harç Durumu</h5>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="advisor-page.php">
                        <img src="../assets/images/kep.png" alt="Admin">
                        <div class="card-body">
                            <h5 class="card-title">Sınav Tarihleri</h5>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="advisor-page.php">
                        <img src="../assets/images/kep.png" alt="Admin">
                        <div class="card-body">
                            <h5 class="card-title">Uzaktan Eğitim</h5>
                        </div>
                    </a>
                </div>
           


                <!-- Diğer kartlar da burada -->
            </div>



        </div>
    </div>
</div>

<?php include __DIR__ . "/../includes/footer.php"; ?>