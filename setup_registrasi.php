<?php
include "php/config.php";
$email          = $_POST['email'];
$password       = $_POST['Password'];
$kode           = md5(uniqid(rand()));
$cekEmail=mysql_num_rows(mysql_query("SELECT email FROM users WHERE email='$email'"));
if ($cekEmail > 0){
  echo "<script>window.alert('Mohon maaf, Email anda sudah terdaftar !');
        window.location=('index.php')</script>";
} else {
     
$kepada         = $_POST['email'];
$dari           = "security@faceboog.com";
$pesan          = "Silahkan klik link aktivasi dibawah ini untuk mengaktifkan akun anda <br><br>http://namasitus.com/aktivasi.php?id=$kode";
$judul          = "Aktivasi Akun";
mysql_query("INSERT INTO users (user_id, unique_id,fname,lname email, password, aktif, kode) VALUES ('$user_id','$unique_id','$fname','$lname', '$email', '$password', 'N', '$kode')") or die (mysql_error());
mail($email, $judul, $pesan, $dari);
echo "<script>window.alert('Pendaftaran berhasil, Silahkan Klik Link aktivasi yang telah kami kirim ke email anda!'); window.location=('login.php')</script>";
}
?>