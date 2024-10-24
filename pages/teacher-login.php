<?php include  "../config.php" ;  ?>
<?php include __DIR__ .  "/../includes/header.php"  ?>


<style>
    .wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 80vh;
        /* Yüksekliği ekranın %80'i yapar */
    }

    .card-img-top {
        max-width: 100%;
        /* Resim genişliğini kartın genişliği ile uyumlu yapar */
        height: auto;
        /* Yüksekliği oranlı yapar */
    }

    .header,
    .footer {
        background-color: #1A4870;
        /* Renk ayarı */
        color: white;
        padding: 15px 0;
        /* Üst ve alt boşluk */
        width: 100%;
        /* Tam genişlik */
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



<div class="container">
<div class="wrapper">
    <div class="col-md-6">
        <div class="card">
            <img src="../assets/images/teacher.png" class="card-img-top" alt="Logo">
            <div class="card-body">
                <form method="POST" action="../functions/login.php"> 
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"  placeholder="E-Mailinizi Giriniz.">
                    </div>
                    <div class="form-group">
                        <label for="password">Şifre</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Şifrenizi Giriniz.">
                    </div>
                    <!-- <button type="submit" class="buton1">Giriş Yap</button> -->
                   
                    <button type="submit" name="loginTeacher" class="buton1">Giriş Yap</button>
                   
                </form>
            </div>
        </div>
    </div>
</div>
</div>


