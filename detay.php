<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// JSON dosyasını oku
$jsonDosya = file_get_contents('http://muharrem.platoonsoft.com/deprem/vericek.php');

// JSON verisini diziye dönüştür
$veri = json_decode($jsonDosya, true);

// Eşleşen ilçeden gelen verinin en güncelini bulma
function en_guncel_veriyi_bul($ilce, $veri_listesi) {
    $en_guncel_veri = null;
    foreach ($veri_listesi as $veri) {
        if (trim(strtolower(str_replace('-', '', $veri['lokasyon']))) == trim(strtolower(str_replace('-', '', $ilce)))) {
            if ($en_guncel_veri == null || $veri['name'] > $en_guncel_veri['name']) {
                $en_guncel_veri = $veri;
            }
        }
    }
    return $en_guncel_veri;
}

// $_GET ile gelen ilçe verisini al
$ilce = isset($_GET['ilce']) ? $_GET['ilce'] : '';

// Eşleşen ilçeden gelen verinin en güncelini bulup yazdırma
$en_guncel_veri = en_guncel_veriyi_bul($ilce, $veri);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="logom.png" type="image/x-icon">
  <title>Anasayfa</title>
  <script src="https://kit.fontawesome.com/6abbd6417f.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/navbar.css">
  <link rel="stylesheet" href="./css/leaflet.css">
  <script src="leaflet.js"></script>
<style>
    .Detay-Title{
        font-size: 30px;
        color: #222;
    }
</style>
  </head>
  <body>
    <?php require_once "navbar.php" ?>
    <div class="header"></div>
    <div class="container">
    <p class="Detay-Title"><?php echo $en_guncel_veri['name'].', '.$en_guncel_veri['lokasyon'].' '.'Büyüklük: '. $en_guncel_veri['mag'] ?></p>
        <div class="row">
        
        </div>
        <div class="row">
            <div class="veri-bloğu">
                <p><? echo $en_guncel_veri['name'] ?></p>
                <p><?php 
                    echo "Tarih/Saat: " . $en_guncel_veri['name'] . "<br>";
                    echo "Lokasyon: " . $en_guncel_veri['lokasyon'] . "<br>";
                    echo "Büyüklük: " . $en_guncel_veri['mag'] . "<br>";
                    echo "Enlem: " . $en_guncel_veri['lat'] . "<br>";
                    echo "Boylam: " . $en_guncel_veri['lng'] . "<br>";
                    echo "Derinlik: " . $en_guncel_veri['Depth'] . "<br>";
                ?></p>
            </div>
        </div>
    </div>
</body>
</html>