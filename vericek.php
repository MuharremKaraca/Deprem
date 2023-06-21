<?php
// Rasathane'nin son 24 saat içinde kaydedilmiş deprem verilerinin bulunduğu XML dosyasının URL'si
$url = 'http://udim.koeri.boun.edu.tr/zeqmap/xmlt/son24saat.xml';
//$url = 'http://udim.koeri.boun.edu.tr/zeqmap/xmlt/202303.xml';

// XML dosyasını yükle
$xml = simplexml_load_file($url);
// Verileri işle
$data = array();
foreach ($xml->earhquake as $quake) {
    $item = array(
        "name" => (string)$quake["name"],
        "lokasyon" => (string)$quake["lokasyon"],
        "mag" => (string)$quake["mag"],
        "lat" => (string)$quake["lat"],
        "lng" => (string)$quake["lng"],
        "Depth" => (string)$quake["Depth"],
    );
    array_push($data, $item);
}
usort($data, function($a, $b) {
    return strtotime($a['name']) < strtotime($b['name']);
});
// JSON formatına dönüştür
$json = json_encode($data);

// JSON verisini gönder
header('Content-Type: application/json');
echo $json;
?>