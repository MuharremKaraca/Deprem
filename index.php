<!doctype html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="logom1.png" type="image/x-icon">
  <title>Anasayfa</title>
  <script src="https://kit.fontawesome.com/6abbd6417f.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="./css/navbar.css">
  <link rel="stylesheet" href="./css/leaflet.css">
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="./css/footer.css">
  <style>
    /* Stil tanımları */
  </style>

</head>

<body>
  <?php require_once "navbar.php" ?>
  <div class="header"></div>
  <div id="scroll-progress">
    <span></span>
  </div>
  <div class="header-main">
    <!-- Sayfa başlığı ile ilgili içerik -->
  </div>
  <div class="container-fluid mt-5">
    <div class="row">
      <div class="deprem">
        <div id="map" style="border-radius:5px"></div>
        <div id="filter">
          <!-- Deprem büyüklüğü filtresi -->
          <label for="mag-filter">Deprem büyüklüğü:</label>
          <select id="mag-filter">
            <option style="background-color: rgb(29, 206, 125);" value="">Hepsi</option>
            <option style="background-color: rgb(247, 247, 57);" value="2">2 >=</option>
            <option style="background-color: rgb(255, 199, 87);" value="5">5 >=</option>
            <option style="background-color: #F94B65;" value="10">10>=</option>
            <option style="background-color: red;" value="20">20>=</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row" id="kutu-row">
      <div class="col-6 box ">
        <p class="box-b">DEPREM BÖLGELERİ</p>
        <div class="box-t">
          <div class="box-header">
            <div class="deger">
              <!-- Bölge değeri -->
            </div>
            <div class="lokasyon">
              Şehir
            </div>
            <div class="buyukluk">
              <!-- Büyüklük -->
            </div>
            <div class="tarih">
              <!-- Tarih -->
            </div>
          </div>
        </div>
        <div class="box-t">
          <div class="box-header">
            <div class="deger">
            <i class="fa-solid fa-building-shield" style="color:red;"></i>
            </div>
            <div class="lokasyon">
              Kahramanmaraş
            </div>
            <div class="buyukluk">
            </div>
            <div class="tarih">
            </div>
          </div>
        </div>
        <div class="box-t">
          <div class="box-header">
            <div class="deger">
            <i class="fa-solid fa-building-shield" style="color:red;"></i>
            </div>
            <div class="lokasyon">
            Kayseri
            </div>
            <div class="buyukluk">
            </div>
            <div class="tarih">
            </div>
          </div>
        </div>
        <div class="box-t">
          <div class="box-header">
            <div class="deger">
            <i class="fa-solid fa-building-shield" style="color:red;"></i>
            </div>
            <div class="lokasyon">
            Hatay
            </div>
            <div class="buyukluk">
            </div>
            <div class="tarih">
            </div>
          </div>
        </div>
        <div class="deprem_link">
          <a href="index1.php" class="diger_link">Daha fazla bilgi için <i class="fa-solid fa-person-walking"></i>..</a>
        </div>
      </div>
      <div class="col-6 box ">
        <p class="box-b">DEPREM DESTEK</p>
        <div class="box-t">
          <div class="box-header">
            <div class="deger">
              <!-- Değer -->
            </div>
            <div class="lokasyon">
              Kurum
            </div>
            <div class="buyukluk">
              Numara
            </div>
            <div class="tarih">
              Yazılması Gereken
            </div>
          </div>
        </div>
        <div class="box-t">
          <div class="box-header">
            <div class="icon">
              <i class="fa-solid fa-heart-pulse" style="color: #a30000;"></i>
            </div>
            <div class="lokasyon">
              Kızılay
            </div>
            <div class="buyukluk">
              2868
            </div>
            <div class="tarih">
              DEPREM
            </div>
          </div>
        </div>
        <div class="box-t">
          <div class="box-header">
            <div class="icon">
              <i class="fa-solid fa-heart-pulse" style="color: #a30000;"></i>
            </div>
            <div class="lokasyon">
              Afad
            </div>
            <div class="buyukluk">
              2868
            </div>
            <div class="tarih">
              DEPREM
            </div>
          </div>
        </div>
        <div class="deprem_link">
          <a href="index1.php" class="diger_link">Daha fazla bilgi için <i class="fa-solid fa-person-walking"></i>..</a>
        </div>
      </div>
    </div>
  </div>
  <?php require_once "footer.php" ?>
  <!-- DEPREM HARİTASI İÇİN GEREKLİ OLAN JAVASCRİPT KODLARI -->
  <script src="./js/leaflet.js"></script>
  <!-- DEPREM HARİTASI İÇİN KULLANILAN JAVASCRİPT KODLARI -->
  <script src="./js/deprem-haritasi.js"></script>
  <!-- İNDEX DOSYASINDA ÇALIŞAN JAVASCRİPT KODLARI -->
  <script src="./js/index.js"></script>
  <!-- AJAX kütüphanesini ekleyin (örneğin jQuery) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
