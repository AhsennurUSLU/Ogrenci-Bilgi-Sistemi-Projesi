<?php include  "../config.php" ;  ?>
<?php include __DIR__ . "/../includes/header.php"; ?>
<?php include __DIR__ . "/../includes/content-navbar.php"; ?>

<style>
    .card {
    border-radius: 50%;
    overflow: hidden;
    width: 150px;
    height: 150px;
    margin: 10px;
    position: relative; /* Relative pozisyon eklendi */
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
    transform: translate(-50%, -50%); /* Ortalamak için */
    color: white; /* Yazı rengi beyaz yapıldı */
    z-index: 2; /* Resmin üstünde olması için z-index eklendi */
    width: 100%; /* Yazı alanı tam kart genişliğinde */
    text-align: center;
    background-color: rgba(0, 0, 0, 0.5); /* Yarı şeffaf bir arka plan eklendi */
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

.th-title{
    text-align: center; /* Yatay olarak ortalandı */
    vertical-align: middle; /* Dikey olarak ortalandı */
}
</style>

<div class="container mt-5">

<table class="table table-bordered">
  <thead>
  <th colspan="12" class="th-title">2024-2025 GÜZ YARI YILI</th>
    <tr>
  
      <th scope="col">DERS KODU</th>
      <th scope="col">YIL</th>
      <th scope="col">DERS ADI</th>
      <th scope="col">KREDİ</th>
      <th scope="col">KATSAYI</th>
      <th scope="col">MUAF</th>
      <th scope="col">VİZE 1</th>
      <th scope="col">VİZE 2</th>
      <th scope="col">FİNAL</th>
      <th scope="col">BÜTÜNLEME</th>
      <th scope="col">TEK DERS</th>
      <th scope="col">HARF NOTU</th>    
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>2024</td>
      <td>İşlerim Sistemleri</td>
      <td>4</td>
      <td>4</td>
      <td></td>
      <td>56</td>
      <td>45</td>
      <td>82</td>
      <td></td>
      <td></td>
      <td>CB</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <th scope="row">6</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
 
  
 
  
 
  </tbody>
</table>

</div>


<?php include __DIR__ . "/../includes/footer.php"; ?>
