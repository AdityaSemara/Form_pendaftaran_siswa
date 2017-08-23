<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulir pendftaran siswa</title>
</head>

<body>
	<header>
		<h3>Formulir pendftaran siswa</h3>
	</header>
	<form action="proses-pendaftaran.php" method="POST">
		<table border="0">
			<tr>
				<td><label for="nama">Nama</label></td>
				<td>:</td>
				<td><input type="text" name="nama" placeholder="Nama lengkap"></td>
			</tr>
			<tr>
				<td><label for="alamat">Alamat</label></td>
				<td>:</td>
				<td><textarea name="alamat"></textarea></td>
			</tr>
			<tr>
				<td><label for="jenis_kelamin">Jenis Kelamin</label></td>
				<td>:</td>
				<td>
					<label><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki</label>
					<label><input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</label>
				</td>
			</tr>
			<tr>
				<td><label for="agama">Agama</label></td>
				<td>:</td>
				<td>
					<select name="agama">
						<option>Hindu</option>
						<option>Budha</option>
						<option>Islam</option>
						<option>Kristen</option>
						<option>Katolik</option>
						<option>Atheis</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Asal Sekolah</td>
				<td>:</td>
				<td><input type="text" name="sekolah_asal"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="daftar" name="daftar">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>