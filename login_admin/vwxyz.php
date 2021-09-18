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
           <a href="logout.php">Logout</a>
        </div>
</nav>
<div class="container" style="margin-top:8%">
	<div class="row">
		<div class="col-md-8 col-md-offset-2"> 
			<p>
				<center>
					<h5 style="user-select: none;"><b>Selamat Datang Admin</b></h5><hr>
				</center>
				<p style="text-align: center;user-select: none;">Halaman Ini Hanya Boleh Diakses Oleh Admin</p>
			</p>
			<br>
			<p>
				<a class="btn btn-primary" href="tambah.php">Tambah</a>
			</p>
			<table class="table table-bordered">
				<tr style="text-align: center;background-color: ;">
					<th>
						No 
					</th>
					<th>
						ID Database
					</th>
					<th>
						Nama Depan
					</th>
					<th>
						Nama Belakang
					</th>
					<th>
						Email
					</th>
					<th>
						Password
					</th>
					<th>
						Verifikasi
					</th>
					<th>
						Opsi
					</th>
				</tr>
					<?php
						include"koneksi.php";
						$no = 1;
						$data = mysqli_query ($koneksi, " select 
																unique_id,
																fname,
																lname,
																email,
																password,verified
														  from 
														  users 
														  order by unique_id DESC");
						while ($row = mysqli_fetch_array ($data))
						{
					?>
				<tr align="center">
					<td>
						<?php echo $no++; ?>
					</td>
					<td>
						<?php echo $row['unique_id']; ?>
					</td>
					<td>
						<?php echo $row['fname']; ?>
					</td>
					<td>
						<?php echo $row['lname']; ?>
					</td>
					<td>
						<?php echo $row['email']; ?>
					</td>
					<td>
						<?php echo $row['password']; ?>
					</td>
					<td style="color: green;" title="Terverifikasi">
						<?php echo $row['verified']; ?>
					</td>
					<td>
						<a class="btn orange" href="detail.php?id=<?php echo $row['unique_id']; ?>">Detail</a> 
						<a class="btn green" href="edit.php?id=<?php echo $row['unique_id']; ?>">Edit</a> 
						<a class="btn red" href="hapus.php?id=<?php echo $row['unique_id']; ?>">Hapus</a>
					</td>
				</tr>
				<?php
					}
				?>
			</table>
		</div>
	</div>
</div>
</body>
<footer>
	<p style="text-align: center;color: grey;user-select: none;">Faceboog | Indonesia | contry</p>
</footer>
</html>