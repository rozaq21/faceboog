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
 .settign :hover{
  transform: rotateZ(60deg);
  transition: 0.3s;
 } 
.nama{
	color:#fff;
}
.nama:hover{
	text-decoration:underline;
}
<!-- <span class="material-icons" style="color:black;">
settings
</span> -->
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
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><a href="#" class="nama"><?php echo $row['fname']. " " . $row['lname'] ?></a><p style="float:right;color:green;"><?php echo $row['verified']; ?></p></span>
            <p><?php echo $row['status']; ?>
          </div>
        </div>
        
<a class="settign" href="settign.php"><i class="fas fa-cog fa-spin"style="color:white;font-size:22px;"title="Pengaturan"></i></a>
      </header>
      <div class="search">
        <span class="text" style="color:white;">Pilih Teman Anda Untuk Memulai Pesan</span>
        <input type="text" placeholder="Masukkan Nama Untuk Mencari">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>