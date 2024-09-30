<?php include  "../config.php";  ?>
<?php include __DIR__ . "/../includes/header.php"; ?>
<?php include __DIR__ . "/../includes/content-navbar.php"; ?>

<style>
    
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
        width: 150px;
        height: auto; /* Yükseklik otomatik oranlansın */
    }
</style>



<div class="container mt-5">

<div class="row">

<div class="col-md-2">
    <img src="../assets/images/profile.png"  class="small-image" alt="profile">
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





















<?php include __DIR__ . "/../includes/footer.php"; ?>