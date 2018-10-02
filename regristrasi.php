<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
	<form action="regristrasi.php" method="POST">
		<center>
		<body bgcolor="#b2ffef">
		<br><br><br><br><br><br><br><br><br><br>
		<table border="1" bgcolor="pink">
			<tr bgcolor="yellow">
				<td>NIM 	: </td>
				<td><input type="text" name="nim" minlength="10" maxlength="10" required=""></td>
			</tr>
			<tr bgcolor="yellow">
				<td>Nama	: </td>
				<td><input type="text" name="nama" minlength="25" maxlength="25" required=""></td>
			</tr>
			<tr bgcolor="yellow">
				<td>E-mail	: </td>
				<td><input type="text" name="email" minlength="30" maxlength="30"  placeholder="@gmail.com" required=""></td>
			</tr>
			<tr>
				<td><input type="Submit" name="submit" value="Submit"></td>
			</tr>
		</table>
</body>
</html>

<?php
	if(isset($_POST['nim'])){
		if($_POST['nim'] == "kosong"){
			echo "<h4 style='color:red'>NIM belum dimasukkan!</h4>";
		}
	}
 	$servername = "localhost";
 	$nim = "root";
 	$nama = "";
 	$db = "mahasiswa";
 	$con = new mysqli($servername, $nim, $nama, $db);

 	if($con==false){
 		die("Koneksi Gagal" . $con->connect_error);
 	
 	}
 	if(isset($_POST['submit'])){
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$sql = "INSERT INTO mhs (nim,nama,email) values ('$nim','$nama','$email')";
	if (mysqli_query($con, $sql)){
		echo "<center>Database sudah masuk</center>";
	}else{
		echo "ERROR";
	}
	}

	?>
