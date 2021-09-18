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
color:black;
}
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
<a href="javascript:history.go(-1)"><i class="fas fa-arrow-left" style="float:left;color:white;"></i></a>
          <p style="font-weight:bold;font-size:20px;padding-left:20px;"><i class="fas fa-envelope"></i> Kotak Masuk</p>

      </header>
<div>

	<p style="padding:30px 10px 30px 10px;font-size:15px;"><i class="fas fa-bullhorn"></i> Perbaikan Sistem</p>
</div>
    </section>
  </div>

<script src="javascript/main.js"></script>

<link rel="stylesheet" type="text/css" href="settign.css">
  <script src="javascript/users.js"></script>

</body>
</html>