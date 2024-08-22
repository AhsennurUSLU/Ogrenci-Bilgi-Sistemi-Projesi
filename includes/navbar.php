

<style>
    .header {
        background-color: #1A4870;
        /* Koyu arka plan rengi */
        color: white;
        /* Beyaz metin rengi */
        padding: 15px;
        /* İç boşluk */
    }

    html,
    body {
        height: 100%;
        margin: 0;
        background-color: #F5F7F8;
    }

    /* İçeriği sayfanın tamamına yay */
    .wrapper {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    /* İçerik kısmı otomatik genişlesin */
    .content {
        flex: 1;
    }

    /* Resim boyutlandırma */
    .header img {
        width: 50px;
        /* İstediğiniz genişlik */
        height: auto;
        /* Yüksekliği otomatik ayarlar */
        margin-right: 10px;
        /* Yazı ile resim arasına boşluk ekler */
    }

    /* Sol taraf stil ayarları */
    .header .d-flex {
        align-items: center;
        /* Dikey olarak ortalar */
    }

    /* Yazı ve resim arasındaki boşluk */
    .header h3 {
        display: inline-block;
        margin: 0;
       
        /* Varsayılan margin'i kaldırır */
    }
</style>
<!-- Header Bölümü -->
<div class="wrapper">
    <!-- Header Bölümü -->
    <header class="header">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
                <!-- Sol Taraf -->
                <div>
                    <img src="../assets/images/kep.png" alt="Logo">
                    <h3>ÖĞRENCİ BİLGİ SİSTEMİ</h3>
                </div>

                <!-- Sağ Taraf -->
                <div>
                    <nav>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Öğrenci Girişi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Öğretmen Girişi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">İletişim</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>