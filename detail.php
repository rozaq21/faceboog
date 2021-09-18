<html>
<title>Admin Panel | Faceboog</title>
<head>
<link rel="stylesheet" href="style/materialize.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
</head>
<body>
<nav>
        <div class="nav-wrapper teal">
        <div class="container">
          <a href="index.php" class="brand-logo center white-text">ADMIN PANEL FOR FACEBOOG</a>
        </div>
        </div>
</nav>

<?php
	include"koneksi.php";
	$no = 1;
	$data = mysqli_query ($koneksi, " select 
											unique_id,
											fname,
											lname,
											img,
											email,
											password
									  from 
									  users 
									  where unique_id = $_GET[id]");
	$row = mysqli_fetch_array ($data);
	
?>
<div class="container" style="margin-top:8%">
	<div class="row">
		<div class="col-md-8 col-md-offset-2"> 
			<p>
				<center>
					<h5>Detail <?php echo $row['fname'],$row['lname']; ?> </h5><hr>
				</center>
			</p>
			<br>
			<p>
				<a class="btn red lighten-2" href="vwxyz.php">Kembali</a>
			</p>
			<table class="table table-stripped">
<img src="../php/images/<?php echo $row['img']; ?>" alt="" style="width:20%;">
<tr>
					<td style="width:10%;">
						Foto Name
					</td>
					<td>
						: <?php echo $row['img']; ?>
					</td>
				</tr>
				<tr>
					<td style="width:10%;">
						Nama Depan
					</td>
					<td>
						: <?php echo $row['fname']; ?>
					</td>
				</tr>
				<tr>
					<td style="width:10%;">
						Nama Belakang
					</td>
					<td>
						: <?php echo $row['lname']; ?>
					</td>
				</tr>
				<tr>					
					<td>
						Email
					</td>
					<td>
						: <?php echo $row['email']; ?>
					</td>
				</tr>
				<tr>		
					<td>
						Password
					</td>
					<td>
						: <?php echo $row['password']; ?>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
</body>
</html>