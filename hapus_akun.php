<?php
include"koneksi.php";


$query = "DELETE FROM users 
							WHERE unique_id ='$_GET[unique_id]'
								";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:index.php');

?>

