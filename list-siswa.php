<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<header>
		<h2>Siswa yang sudah mendaftar</h2>
	</header>
	<br>
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
				<th>Agama</th>
				<th>Sekolah Asal</th>
				<th>Tindakan</th>
			</tr>
		</thead>
		<tbody>

			<?php
			$sql = "SELECT * FROM form_calon_siswa";
			$query = mysqli_query($db, $sql);

			while($siswa = mysqli_fetch_array($query)){
				echo "<tr>";

				echo "<td>".$siswa['id']."</td>";
				echo "<td>".$siswa['Nama']."</td>";
				echo "<td>".$siswa['Alamat']."</td>";
				echo "<td>".$siswa['Jenis_Kelamin']."</td>";
				echo "<td>".$siswa['Agama']."</td>";
				echo "<td>".$siswa['Sekolah_Asal']."</td>";

				echo "<td>";
				echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
				echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
				echo "</td>";

				echo "</tr>";
			}
			?>

		</tbody>
		<table class="tabel">
			<tr>
				<td>
					<p><a href="form-daftar.php">[+] Tambah Baru</a></p>
					<p>Total: <?php echo mysqli_num_rows($query); ?></p>
				</td>
			</tr>
		</table>
	</table>
	</body>
</html>