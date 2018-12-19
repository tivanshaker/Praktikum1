<!DOCTYPE html>
<html>
<head>
	<title>MENGEDIT FORM MAHASISWA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>QUIZ 2 PEMROGRAMAN WEB</h1>
		<h2>MENGEDIT DATABASE MAHASISWA</h2>
	</div>
	
	<br/>
	
	<a href="index.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Edit data</h3>
 
	<?php 
	include "teskoneksi.php";
	$nim = $_GET['nim'];
	$query_mysql = mysql_query("SELECT * FROM tb_biodata WHERE nim='$nim'")or die(mysql_error());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>NIM</td>
				<td>
					<input type="hidden" name="nim" value="<?php echo $data['nim'] ?>">	
					<input type="text" name="nim" value="<?php echo $data['nim'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="nim" value="<?php echo $data['nim'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Tempat Lahir</td>
				<td>
					<input type="hidden" name="nim" value="<?php echo $data['nim'] ?>">
					<input type="text" name="tmp_lahir" value="<?php echo $data['tmp_lahir'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Tanggal Lahir</td>
				<td>
					<input type="hidden" name="nim" value="<?php echo $data['nim'] ?>">
					<input type="text" name="tgl_lahir" value="<?php echo $data['tgl_lahir'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<input type="hidden" name="nim" value="<?php echo $data['nim'] ?>">
					<input type="radio" name="jk" value="<?php echo $data['jk'] ?>">laki-laki<br>
					<input type="radio" name="jk" value="<?php echo $data['jk'] ?>">Perempuan<br>
				</td>					
			</tr>	
			<tr>
				<td>Agama</td>
				<td>
					<input type="hidden" name="nim" value="<?php echo $data['nim'] ?>">
					<input type="text" name="agama" value="<?php echo $data['agama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Kewarganegaraan</td>
				<td>
					<input type="hidden" name="nim" value="<?php echo $data['nim'] ?>">
					<input type="text" name="warganegara" value="<?php echo $data['warganegara'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Hobby</td>
				<td>
					<input type="hidden" name="nim" value="<?php echo $data['nim'] ?>">
					<input type="text" name="hobby" value="<?php echo $data['hobby'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>					
			</tr>	
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $data['email'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>