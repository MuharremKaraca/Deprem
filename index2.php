<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="logom.png" type="image/x-icon"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>SON DEPREMLER</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/navbar.css">
  <style>
    select {
      background-color: rgb(102, 255, 0);
      padding: 5px;
      border: 0;
      border-radius: 5px;
    }

    select option {

      background-color: #fff;
    }

    label {
      color: #fff;
      text-transform: uppercase;
      font-weight: bold;
    }
  </style>
</head>

<body>
<?php require_once "navbar.php" ?>
  <div class="header"></div>
  

  <table>
    <div class="TopBox">
    <p> VERİLERİN YÜKLENMESİ CİHAZINIZ VE İNTERNET HIZINIZA BAĞLI OLARAK DEĞİŞEBİLİR</p>
    <p>Chrome, Opera gibi tarayıcınız varsa <a href= "index1.php"> Buraya Tıklayın </a></p>
    <label for="city">Verilerde Filtreleme Yapmak İçin:</label>
  <select id="city">
    <option value="">--BÜTÜN VERİLER--</option>
    <option value="(ADANA)">ADANA</option>
    <option value="(ADIYAMAN)">ADIYAMAN</option>
    <option value="(AFYONKARAHİSAR)">AFYONKARAHİSAR</option>
    <option value="(AĞRI)">AĞRI</option>
    <option value="(AMASYA)">AMASYA</option>
    <option value="(ANKARA)">ANKARA</option>
    <option value="(ANTALYA)">ANTALYA</option>
    <option value="(ARTVİN)">ARTVİN</option>
    <option value="(AYDIN)">AYDIN</option>
    <option value="(BALIKESİR)">BALIKESİR</option>
    <option value="(BARTIN)">BARTIN</option>
    <option value="(BATMAN)">BATMAN</option>
    <option value="(BAYBURT)">BAYBURT</option>
    <option value="(BİLECİK)">BİLECİK</option>
    <option value="(BİNGÖL)">BİNGÖL</option>
    <option value="(BİTLİS)">BİTLİS</option>
    <option value="(BOLU)">BOLU</option>
    <option value="(BURDUR)">BURDUR</option>
    <option value="(BURSA)">BURSA</option>
    <option value="(ÇANAKKALE)">ÇANAKKALE</option>
    <option value="(ÇANKIRI)">ÇANKIRI</option>
    <option value="(ÇORUM)">ÇORUM</option>
    <option value="(DENİZLİ)">DENİZLİ</option>
    <option value="(DİYARBAKIR)">DİYARBAKIR</option>
    <option value="(DÜZCE)">DÜZCE</option>
    <option value="(EDIRNE)">EDIRNE</option>
    <option value="(ELAZIG)">ELAZIG</option>
    <option value="(ERZINCAN)">ERZINCAN</option>
    <option value="(ERZURUM)">ERZURUM</option>
    <option value="(ESKISEHIR)">ESKISEHIR</option>
    <option value="(GAZIANTEP)">GAZIANTEP</option>
    <option value="(GIRESUN)">GIRESUN</option>
    <option value="(GUMUSHANE)">GUMUSHANE</option>
    <option value="(HAKKARI)">HAKKARI</option>
    <option value="(HATAY)">HATAY</option>
    <option value="(IGDIR)">IGDIR</option>
    <option value="(ISPARTA)">ISPARTA</option>
    <option value="(ISTANBUL)">ISTANBUL</option>
    <option value="(IZMIR)">IZMIR</option>
    <option value="(KAHRAMANMARAS)">KAHRAMANMARAS</option>
    <option value="(KARABUK)">KARABUK</option>
    <option value="(KARAMAN)">KARAMAN</option>
    <option value="(KARS)">KARS</option>
    <option value="(KASTAMONU)">KASTAMONU</option>
    <option value="(KAYSERI)">KAYSERI</option>
    <option value="(KIRIKKALE)">KIRIKKALE</option>
    <option value="(KIRKLARELI)">KIRKLARELI</option>
    <option value="(KIRSEHIR)">KIRSEHIR</option>
    <option value="(KILIS)">KILIS</option>
    <option value="(KOCAELI)">KOCAELI</option>
    <option value="(KONYA)">KONYA</option>
    <option value="(KUTAHYA)">KUTAHYA</option>
    <option value="(MALATYA)">MALATYA</option>
    <option value="(MANISA)">MANISA</option>
    <option value="(MARDIN)">MARDIN</option>
    <option value="(MERSIN)">MERSIN</option>
    <option value="(MUGLA)">MUGLA</option>
    <option value="(MUS)">MUS</option>
    <option value="(NEVSEHIR)">NEVSEHIR</option>
    <option value="(NIGDE)">NIGDE</option>
    <option value="(ORDU)">ORDU</option>
    <option value="(OSMANIYE)">OSMANIYE</option>
    <option value="(RIZE)">RIZE</option>
    <option value="(SAKARYA)">SAKARYA</option>
    <option value="(SAMSUN)">SAMSUN</option>
    <option value="(SIIRT)">SIIRT</option>
    <option value="(SINOP)">SINOP</option>
    <option value="(SIVAS)">SIVAS</option>
    <option value="(SANLIURFA)">SANLIURFA</option>
    <option value="(SIRNAK)">SIRNAK</option>
    <option value="(TEKIRDAG)">TEKIRDAG</option>
    <option value="(TOKAT)">TOKAT</option>
    <option value="(TRABZON)">TRABZON</option>
    <option value="(TUNCELI)">TUNCELI</option>
    <option value="(USAK)">USAK</option>
    <option value="(VAN)">VAN</option>
    <option value="(YALOVA)">YALOVA</option>
    <option value="(YOZGAT)">YOZGAT</option>
    <option value="(ZONGULDAK)">ZONGULDAK</option>
    <!-- diğer şehirler -->
  </select>
  </div>
    
    <thead>
      <tr>
        <th>Şehir</th>
        <th>Zaman</th>
        <th>Büyüklük</th>
      </tr>
    </thead>
    <tbody id="veri-listesi">
      <div id="kayit-sorgu"></div>
    </tbody>

  </table>
  <script src="./js/vericek2.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>