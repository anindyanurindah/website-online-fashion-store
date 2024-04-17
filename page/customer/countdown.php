<!DOCTYPE html>
<html>
<head>
  <title>Countdown Pembayaran (24 Jam)</title>
  <script>
    // Set waktu akhir pembayaran dalam 24 jam
    var countDownDate = new Date();
    countDownDate.setHours(countDownDate.getHours() + 24);

    // Update countdown setiap 1 detik
    var countdown = setInterval(function() {
      // Dapatkan tanggal dan waktu saat ini
      var now = new Date().getTime();

      // Hitung selisih antara waktu akhir dan waktu saat ini
      var distance = countDownDate - now;

      // Hitung waktu dalam jam, menit, dan detik
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Tampilkan waktu dalam elemen dengan id "countdown"
      document.getElementById("countdown").innerHTML = hours + " jam, " + minutes + " menit, " + seconds + " detik ";

      // Jika waktu countdown berakhir, tampilkan pesan
      if (distance < 0) {
        clearInterval(countdown);
        document.getElementById("countdown").innerHTML = "Waktu pembayaran telah berakhir.";
      }
    }, 1000);
  </script>
</head>
<body>
  <h1>Countdown Pembayaran (24 Jam)</h1>
  <p id="countdown"></p>
</body>
</html>
