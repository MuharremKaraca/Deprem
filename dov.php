<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>D�viz Kuru API �rne�i</title>
  </head>
  <body>
    <h1>D�viz Kuru</h1>
    <p id="exchange-rate"></p>

    <script>
      // API anahtar�n�z� buraya ekleyin
      const API_KEY = "AthH7lEIbd9JO9SX8PuymLP8DBzQupwe";

      // API'yi �a��rmak i�in bir istek g�nderin
      fetch(`https://api.exchangeratesapi.io/latest?symbols=USD,EUR&access_key=${API_KEY}`)
        .then(response => response.json())
        .then(data => {
          // D�viz kuru verilerini HTML sayfas�nda g�r�nt�leyin
          document.getElementById("exchange-rate").innerHTML = `1 USD = ${data.rates.EUR.toFixed(2)} EUR`;
        })
        .catch(error => {
          console.error(error);
        });
    </script>
  </body>
</html>