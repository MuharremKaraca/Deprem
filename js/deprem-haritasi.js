    // Deprem verilerinin bulundu�u JSON dosyas�n�n URL'si
    const url = 'http://muharrem.platoonsoft.com/deprem/vericek.php';

    // Leaflet harita nesnesi olu�tur
    const map = L.map('map').setView([38.9637, 35.2433], 5);

    // OpenStreetMap harita katman�n� ekle
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 18
    }).addTo(map);

    // Y�kleme g�stergesi nesnesi
    const loading = document.getElementById('loading');

    // JSON verisini �ek ve haritada daireler �eklinde g�ster
    function updateData(magFilterValue) {
      console.log('veri güncellendi')
      // Daha �nce eklenmi� t�m daireleri kald�r
      map.eachLayer(layer => {
        if (layer instanceof L.CircleMarker) {
          map.removeLayer(layer);
        }
      });

      fetch(url)
        .then(response => response.json())
        .then(data => {
          // Her deprem i�in bir daire olu�tur ve haritaya ekle
          const getColor = (mag) => {
            return mag >= 20 ? 'red' :
              mag >= 10 ? '#F94B65' :
              mag >= 5 ? 'rgb(255, 199, 87)' :
              mag >= 2 ? 'rgb(247, 247, 57)' :
              'rgb(29, 206, 125)';
          };

          const circles = data.filter(deprem => magFilterValue === '' || +deprem.mag >= +magFilterValue)
            .map(deprem => {
              const circle = L.circleMarker([deprem.lat, deprem.lng], {
                radius: 2 + deprem.mag * 2,
                fillColor: getColor(deprem.mag),
                fillOpacity: 0.8,
                stroke: false
              });
              circle.bindPopup(`<b>${deprem.lokasyon}</b><br>${deprem.mag} büyüklüğünde`).openPopup();
              return circle;
            });

          // T�m daireleri bir grup olarak ekle
          let circleGroup = L.layerGroup(circles);
          circleGroup.addTo(map);

          // Filtreleme se�eneklerini dinle
          const magFilter = document.getElementById('mag-filter');
          magFilter.addEventListener('change', () => {
            // Filtrelenen b�y�kl�kten b�y�k depremler i�in daireleri filtrele
            const filteredCircles = data.filter(deprem => magFilter.value === '' || +deprem.mag >= +magFilter.value)
              .map(deprem => {
                const circle = L.circleMarker([deprem.lat, deprem.lng], {
                  radius: 2 + deprem.mag * 2, // Depremin b�y�kl���ne g�re daire boyutunu ayarla
                  fillColor: getColor(deprem.mag),
                  fillOpacity: 0.8,
                  stroke: false
                });
                circle.bindPopup(`<b>${deprem.lokasyon}</b><br>${deprem.mag} büyüklüğünde`).openPopup();
                return circle;
              });

            // Filtrelenen daireleri bir grup olarak ekle ve haritaya ekle
            let filteredCircleGroup = L.layerGroup(filteredCircles);
            map.removeLayer(circleGroup);
            filteredCircleGroup.addTo(map); // Filtrelenen daireleri haritaya ekle
            circleGroup = filteredCircleGroup; // Grubu g�ncelle

            loading.style.display = 'none'; // Y�kleme g�stergesini gizle
          });
        });
    }

    // Ba�lang��ta t�m depremleri g�ster
    updateData('');

    // Filtreleme se�eneklerini dinle
    const magFilter = document.getElementById('mag-filter');
    magFilter.addEventListener('change', () => {
      updateData(magFilter.value);
    });
    fetch('http://muharrem.platoonsoft.com/deprem/vericek.php')
      .then(response => response.json())
      .then(data => {
        // Son 2 deprem verisini al

        json = data;
        var newData = json;
        newData.sort((a, b) => new Date(b.name) - new Date(a.name));
        const sonDepremler = newData.slice(0, 6);
        // Verileri ekrana yazd�r
        const sonDepremlerDiv = document.getElementById('result');
        sonDepremlerDiv.innerHTML = `
        <tr>
            <td>${sonDepremler[0].name}</td>
            <td>${sonDepremler[0].lokasyon}</td>
            <td>${sonDepremler[0].mag}</td>
            <td><button class="detay-btn" data-ilce="${sonDepremler[0].lokasyon}"> Detay </button></td>
<tr>
<tr>
            <td>${sonDepremler[1].name}</td>
            <td>${sonDepremler[1].lokasyon}</td>
            <td>${sonDepremler[1].mag}</td>
            <td><button class="detay-btn" data-ilce="${sonDepremler[1].lokasyon}"> Detay </button></td>
<tr>
<tr>
            <td>${sonDepremler[2].name}</td>
            <td>${sonDepremler[2].lokasyon}</td>
            <td>${sonDepremler[2].mag}</td>
            <td><button class="detay-btn" data-ilce="${sonDepremler[2].lokasyon}"> Detay </button></td>
<tr>
<tr>
            <td>${sonDepremler[3].name}</td>
            <td>${sonDepremler[3].lokasyon}</td>
            <td>${sonDepremler[3].mag}</td>
            <td><button class="detay-btn" data-ilce="${sonDepremler[3].lokasyon}"> Detay </button></td>
<tr>
<tr>
            <td>${sonDepremler[4].name}</td>
            <td>${sonDepremler[4].lokasyon}</td>
            <td>${sonDepremler[4].mag}</td>
            <td><button class="detay-btn" data-ilce="${sonDepremler[4].lokasyon}"> Detay </button></td>
<tr>
<tr>
            <td>${sonDepremler[5].name}</td>
            <td>${sonDepremler[5].lokasyon}</td>
            <td>${sonDepremler[5].mag}</td>
            <td><button class="detay-btn" type="submit" data-ilce="${sonDepremler[5].lokasyon}"> Detay </button></td>
<tr>
        `;
        $('.detay-btn').click(function() {
        console.log("tikland�");
        // �lgili il�e bilgisini al
        var ilce = $(this).data('ilce');
        // Detay sayfas�na y�nlendir
        window.location.href = 'detay.php?ilce=' + ilce;
      });

      });