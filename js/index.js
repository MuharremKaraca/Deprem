  var downbtn = document.querySelector('.down-button');
  var scrollDistance = window.innerHeight; // Her ad�mda kayd�r�lacak mesafe
  var scrollDuration = 1000; // Kayd�rma s�resi (ms)
  var intervalId; // Animasyonun setInterval() fonksiyonundan d�nen ID'si

// A�a��daki kod, bir "A�a��" butonuna t�kland���nda sayfay� belirli bir mesafe a�a�� kayd�ran bir animasyon ger�ekle�tiren JavaScript kodudur.

downbtn.addEventListener('click', function() {
  startScrollAnimation();
});

// startScrollAnimation() fonksiyonu, mevcut bir animasyon �al���yorsa durdurur, ba�lang�� zaman�n�, ba�lang�� y�ksekli�ini ve biti� y�ksekli�ini belirler, ve bir setInterval fonksiyonu kullanarak animasyonu ba�lat�r.
function startScrollAnimation() {
  clearInterval(intervalId); // E�er ba�ka bir animasyon �al���yorsa durdur
  var startTime = performance.now();
  var startTop = window.pageYOffset;
  var endTop = startTop + scrollDistance;

  intervalId = setInterval(function() {
    var elapsed = performance.now() - startTime;
    var progress = elapsed / scrollDuration;
    var scrollTop = easeInOutQuad(progress, startTop, scrollDistance, 1);

    window.scrollTo(0, scrollTop);

    if (elapsed >= scrollDuration) {
      clearInterval(intervalId);
    }
  }, 16); // Yakla��k 60 FPS animasyon
}

// easeInOutQuad() fonksiyonu, zaman�, ba�lang�� de�erini, de�i�im miktar�n� ve toplam s�reyi kullanarak, zaman�n ilerlemesine ba�l� olarak animasyonun g�ncel de�erini hesaplar.
function easeInOutQuad(t, b, c, d) {
  t /= d / 2;
  if (t < 1) return c / 2 * t * t + b;
  t--;
  return -c / 2 * (t * (t - 2) - 1) + b;
}

    window.addEventListener('scroll', function() {
      var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
      var scrollHeight = document.documentElement.scrollHeight || document.body.scrollHeight;
      var scrollPercent = (scrollTop / (scrollHeight - window.innerHeight)) * 100;
      var progressBar = document.querySelector('#scroll-progress span');
      progressBar.style.width = scrollPercent + '%';
    });

    const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
      on: {
        autoplayTimeLeft(s, time, progress) {
          progressCircle.style.setProperty("--progress", 2 - progress);
          progressContent.textContent = `${Math.ceil(time / 1)}s`;
        }
      }
    });