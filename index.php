<html>
<head>
	<title>Penjualan Motor</title>
	<style>
		body {font-family: tahoma, arial}
		table {border-collapse: collapse;}
		th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color:#303030}
		th {background : #cccccc; font-size: 12px; border-color: #B0B0B0}
	</style>
</head>
<body>
	<center><h1>Table Penjualan Motor</h1></center>
	<h3>Tabel Motor</h3>
	<a href="add_film.php">TAMBAH DATA BARU</a><br/><br/>
	<table>
		<thead>
			<tr>
				<th>Id Motor</th>
				<th>Nama Motor</th>
				<th>Warna</th>
				<th>Harga</th>
			</tr>
		</thead>

		<?php
		include 'koneksi.php';
		$sql = 'SELECT * FROM motor';
		$query = mysqli_query($koneksi, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			?>
			<tbody>
				<tr>
					<td><?php echo $row['id_motor'] ?></td>
					<td><?php echo $row['nama_motor'] ?></td>
					<td><?php echo $row['warna_motor'] ?></td>
					<td><?php echo $row['harga_motor'] ?></td>
					<td><td><a href="edit_motor.php?id=<?= $row['id_motor']; ?>"><button>UBAH</button></a> |
                    <a href="hapus_motor.php?id=<?= $row['id_motor']; ?>"><button>HAPUS</button></a></td>
				</tr>
			</tbody>
			<?php
		}
		?>
	</table>
	<h3>Table Pembeli</h3>
	<a href="add_pembeli.php">TAMBAH DATA BARU</a><br/><br/>
	<table border="1" cellpadding="5" cellspacing="0">
		<thead>
			<tr>
				<th>ID Pembeli</th>
				<th>Nama Pembeli</th>
                <th>No. Telp</th>
                <th>Alamat</th>
			</tr>
		</thead>
		<?php
		include 'koneksi.php';
		$sql = 'SELECT * FROM pembeli';
		$query = mysqli_query($koneksi, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			?>
			<tbody>
				<tr>
					<td><?php echo $row['id_pembeli'] ?></td>
					<td><?php echo $row['nama_pembeli'] ?></td>
                    <td><?php echo $row['no_telp'] ?></td>
                    <td><?php echo $row['alamat'] ?></td>
					<td><a href="edit_pembeli.php?id=<?= $row['id_pembeli']; ?>"><button>UBAH</button></a> |
                    <a href="delete_kategori.php?id=<?= $row['id_pembeli']; ?>"><button>HAPUS</button></a></td>
				</tr>
			</tbody>
			<?php
		}
		?>
	</table>
    <h3>Table Pembayaran</h3>
	<a href="add_pembayaran.php">TAMBAH DATA BARU</a><br/><br/>
	<table>
		<thead>
			<tr>
				<th>ID Bayar</th>
				<th>ID Pembeli</th>
                <th>ID Motor</th>
                <th>Tanggal Bayar</th>
                <th>Total Bayar</th>
			</tr>
		</thead>
		<?php
		include 'koneksi.php';
		$sql = 'SELECT * FROM pembayaran';
		$query = mysqli_query($koneksi, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			?>
			<tbody>
				<tr>
					<td><?php echo $row['id_bayar'] ?></td>
					<td><?php echo $row['id_pembeli'] ?></td>
                    <td><?php echo $row['id_motor'] ?></td>
                    <td><?php echo $row['tanggal_bayar'] ?></td>
                    <td><?php echo $row['total_bayar'] ?></td>
					<td><a href="edit_pembayaran.php?id=<?= $row['id_bayar']; ?>"><button>UBAH</button></a> |
                    <a href="hapus_pembayaran.php?id=<?= $row['id_bayar']; ?>"><button>HAPUS</button></a></td>
				</tr>
			</tbody>
			<?php
		}
		?>
	</table>
	
	<br>
	<br>
	<footer>
		<p>&copy; 2021-Jual Motor Bekas</p>
	</footer>
</body>
</html>