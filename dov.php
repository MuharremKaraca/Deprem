<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Döviz Kuru API Örneði</title>
  </head>
  <body>
    <h1>Döviz Kuru</h1>
    <p id="exchange-rate"></p>

    <script>
      // API anahtarýnýzý buraya ekleyin
      const API_KEY = "AthH7lEIbd9JO9SX8PuymLP8DBzQupwe";

      // API'yi çaðýrmak için bir istek gönderin
      fetch(`https://api.exchangeratesapi.io/latest?symbols=USD,EUR&access_key=${API_KEY}`)
        .then(response => response.json())
        .then(data => {
          // Döviz kuru verilerini HTML sayfasýnda görüntüleyin
          document.getElementById("exchange-rate").innerHTML = `1 USD = ${data.rates.EUR.toFixed(2)} EUR`;
        })
        .catch(error => {
          console.error(error);
        });
    </script>
  </body>
</html>