<style>
    .content {
        margin-top: 50px;
    }

    .card-img-top {
        max-width: 100%;
        /* Resim genişliğini kartın genişliği ile uyumlu yapar */
        height: auto;
        /* Yüksekliği oranlı yapar */
    }

    .card {
        margin: 10px;
        /* Card'lar arasındaki boşluk */
    }

    .card-body {
        text-align: center;
        /* Başlık ve butonu ortalamak için */
    }

    .btn-container {
        display: flex;
        justify-content: center;
        /* Butonu ortalamak için */
        margin-top: 20px;
        /* Buton ile başlık arasına boşluk ekler */
    }

    .buton1 {
        background-color: #1A4870;
        border-radius: 20px;
        border: 3px solid;
        color: white;
        padding: 13px;
        text-decoration: none;
        width: 100%;
        /* Butonu tam genişlikte yapar */
        display: block;
        /* Butonu tam genişliğe yayar */
        text-align: center;
        /* Metni ortalar */
    }

    .buton1:hover {
        text-decoration: none;
        /* Hover durumunda da alt çizgiyi kaldırır */
        color: #96CEB4;
    }
</style>


<!-- İçerik Bölümü -->
<div class="content container mt-5">
    <div class="row justify-content-center">
        <!-- İlk Card -->
        <div class="col-md-5">
            <div class="card mb-3">
                <img src="assets/images/student.png" class="card-img-top" alt="ogrenci">
                <div class="card-body">
                    <h5 class="card-title">Öğrenci Girişi</h5>
                    <a name="ogrenci_giris" class="buton1" type="button" href="pages/student-login.php">Giriş Yap</a>

                </div>
            </div>
        </div>

        <!-- İkinci Card -->
        <div class="col-md-5">
            <div class="card mb-3">
                <img src="assets/images/teacher.png" class="card-img-top" alt="ogretmen">
                <div class="card-body">
                    <h5 class="card-title">Öğretmen Girişi</h5>
                    <a name="ogretmen_giris" class="buton1" type="button" href="pages/teacher-login.php">Giriş Yap</a>

                </div>
            </div>
        </div>


    </div>
</div>