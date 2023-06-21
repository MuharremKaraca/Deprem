// citySelect adlı bir değişkene HTML'deki "city" seçeneğini atıyoruz.
var citySelect = document.getElementById("city");

// Verileri almak için fetch kullanıyoruz ve Promise zincirleri içindeki then blokları ile JSON verilerini alıyoruz.
fetch('https://muharrem.platoonsoft.com/deprem/vericek.php')
  .then(response => response.json())
  .then(json => {
    // Verileri data adlı bir değişkende saklıyoruz.
    data = json;
    // İlk olarak filtrelenmiş verileri tüm verilere eşitliyoruz.
    var filteredData = data;
    // Tarih sütununa göre verileri sıralıyoruz.
    filteredData.sort((a, b) => new Date(b.name) - new Date(a.name));
    // Eğer filtrelenmiş verilerin ilk öğesi yoksa, sorgu_element adlı bir değişkene "KAYIT BULUNAMADI" mesajını atıyoruz. 
    if (!filteredData[0]) {
      var sorgu_element = document.getElementById("kayit-sorgu");
      sorgu_element.innerHTML = "KAYIT BULUNAMADI";
    } else {
      // Aksi takdirde sorgu_element değişkenine bir şey yazmıyoruz.
      var sorgu_element = document.getElementById("kayit-sorgu");
      sorgu_element.innerHTML = "";
    }
    // Veri listesi adlı bir değişkene HTML'deki "veri-listesi" öğesini atıyoruz.
    var liste = document.getElementById('veri-listesi');
    liste.innerHTML = '';
    // Her veri öğesi için bir tablo satırı oluşturuyoruz.
    filteredData.forEach(item => {
      var tr = document.createElement('tr');
      // Şehir adını içeren bir hücre ekliyoruz.
      var tdCity = document.createElement('td');
      tdCity.textContent = item.lokasyon;
      tr.appendChild(tdCity);
      // Zamanı içeren bir hücre ekliyoruz.
      var tdTime = document.createElement('td');
      tdTime.textContent = item.name;
      tr.appendChild(tdTime);
      // Büyüklüğü içeren bir hücre ekliyoruz.
      var tdMag = document.createElement('td');
      tdMag.textContent = item.mag;
      tr.appendChild(tdMag);
      // Satırı listeye ekliyoruz.
      liste.appendChild(tr);
    });
  })
  .catch(error => console.error(error));

// Şehir seçeneklerinde bir değişiklik olduğunda, seçilen şehre göre verileri filtreliyoruz.
citySelect.addEventListener("change", function () {
  var selectedCity = citySelect.value;
  // Filtrelenmiş verileri tüm verilere eşitliyoruz.
  var filteredData = data.filter(item => item.lokasyon.includes(selectedCity));
  // Tarih sütununa göre verileri sıralıyoruz.
  filteredData.sort((a, b) => new Date(b.name) - new Date(a.name));
  // Eğer filtrelenmiş ver
  if (!filteredData[0]) {
    var sorgu_element = document.getElementById("kayit-sorgu");
    sorgu_element.innerHTML = "KAYIT BULUNAMADI";
  } else {
    var sorgu_element = document.getElementById("kayit-sorgu");
    sorgu_element.innerHTML = "";
  }

  var liste = document.getElementById('veri-listesi');
  liste.innerHTML = '';
  filteredData.forEach(item => {
    var tr = document.createElement('tr');

    var tdCity = document.createElement('td');
    tdCity.textContent = item.lokasyon;
    tr.appendChild(tdCity);

    var tdTime = document.createElement('td');
    tdTime.textContent = item.name;
    tr.appendChild(tdTime);

    var tdMag = document.createElement('td');
    tdMag.textContent = item.mag;
    tr.appendChild(tdMag);

    liste.appendChild(tr);
  });
});