<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
<style>
.logout{
color:white;
}
*{color:#fff;}
</style>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          
<a href="javascript:history.go(-1)"><span class="material-icons" style="float:left;color:#fff;">
arrow_back
</span></a>
<p style="font-weight:bold;font-size:20px;margin-left:10px;">Pengaturan</p>
      </header>
<br>
<div style="padding:10px 10px;">
   <span class="material-icons" style="float:left;padding-right:5px;">
password
</span><a href="ubah_pass.php" style="color:white;"> Ganti Password</a>
<br>
<div style="margin-top: 15px">
<span class="material-icons" style="float:left;padding-right:5px;">
admin_panel_settings
</span>
<a href="login_admin/" style="color:white;"> Admin Panel</a>
</div>
<div style="margin-top: 15px">
<span class="material-icons" style="float:left;padding-right:5px;">
email
</span>
<a href="kotakmasuk.php" style="color:white;"> Kotak Masuk</a>
</div>
<div style="margin-top: 15px">
<span class="material-icons" style="float:left;padding-right:5px;">
verified_user
</span>
<a href="verifikasi_send.php" style="color:white;"> Minta Verifikasi</a>
</div>
<div style="margin-top: 15px">
<span class="material-icons"style="float:left;padding-right:5px;">
delete
</span>
<a href="hapus_akun.php" style="color:white;"> Hapus Akun</a>
</div>
<div style="margin-top:15px">
<span class="material-icons" style="float:left;padding-right:5px;">
logout
</span>
<a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
</div>
<br>
<hr>
<p>&copycopyright2021 | faceboog V.0.1
<div style="font-size:10px;">
<a href="">Kebijakan</a> dan<a href=""> Privasi</a>
</div>
</div>
    </section>
  </div>

<script src="javascript/main.js"></script>

<link rel="stylesheet" type="text/css" href="settign.css">
  <script src="javascript/users.js"></script>

</body>
</html>