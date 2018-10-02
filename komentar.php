<form action="" method="POST">
	<center>
		<body bgcolor="#b2ffef">
		<br><br><br><br><br><br><br><br><br><br>
		<table border="1" bgcolor="pink">
			<tr bgcolor="yellow">
				<td>Komentar 	: </td>
				<td><input type="textbox" name="komentar"></td>
			</tr>
			<tr>
				<td><input type="Submit" name="submit" value="Hitung Kata"></td>
			</tr>
		</table>
</body>
</center>
</form>

<?php
	if(isset($_POST['submit'])){
		$komentar = $_POST['komentar'];
		$hasil = str_word_count($komentar);

		echo "<center>Jumlah kata pada komentar adalah : $hasil</center>";
	}

?>
