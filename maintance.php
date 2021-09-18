<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
<style>
.ket a:hover{
	text-decoration:underline;
}
</style>
  <div class="wrapper">
    <section class="form signup">
      <header style="font-size:30px;text-align:center;">faceboog
<p style="text-align: center;color: white;user-select: none;font-size:10px;">Faceboog  |  Indonesia  | contry</p>
      </header>
<br/>
	<h2 style="text-align:center;">Perbaikan Sistem</h2>
<p id="demo" style="font-size:15px;color: #0984e3;user-select: none;font-family: sans-serif; text-align:center;"></p>

<script>
// Tetapkan tanggal kita menghitung mundur
var countDownDate = new Date("October 17, 2021 14:35:20").getTime();

// Perbarui hitungan mundur setiap 1 detik
var x = setInterval(function() {

  // Dapatkan tanggal dan waktu hari ini
  var now = new Date().getTime();
    
  // Temukan jarak antara sekarang dan tanggal hitung mundur
  var distance = countDownDate - now;
    
  // Perhitungan waktu untuk hari, jam, menit dan detik
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Keluarkan hasil dalam elemen dengan id = "demo"
  document.getElementById("demo").innerHTML = days + " Hari | " + hours + " Jam | "
  + minutes + " Menit | " + seconds + " Detik ";
    
  //Jika hitungan mundur selesai, tulis beberapa teks
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "Kami Akan Segera Online!";
  }
}, 1000);
</script>
      <p style="padding-top:10px;text-align:center;" class="ket">Kami Sekarang Sedang Melakukan Perbaikan Sistem, Tapi Anda Bisa <a href="#" style="color:white;">Hubungi Kami.</a> Kami Akan Memberitahu Anda Jika Ini Selesai.</p>

    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>