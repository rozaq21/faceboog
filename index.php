<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header style="font-size:30px;text-align:center;">faceboog
<p style="text-align: center;color: white;user-select: none;font-size:10px;">Faceboog  |  Indonesia  | contry</p>
      </header>
      <form action="setup_registrasi.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nama Depan</label>
            <input type="text" name="fname" placeholder="Nama Depan" required>
          </div>
          <div class="field input">
            <label>Nama Belakang</label>
            <input type="text" name="lname" placeholder="Nama Belakang" required>
          </div>
        </div>
        <div class="field input">
          <label>Alamat Email</label>
          <input type="text" name="email" placeholder="Masukkan Email Kamu" required>
        </div>
        <div class="field input">
          <label>Kata Sandi</label>
          <input type="password" name="password" placeholder="Masukkan Kata Sandi" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Pilih Foto</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Daftar">
        </div>
      </form>
      <div class="link">Sudah Punya Akun? <a href="login.php" style="color:white;">Login Sekarang</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>