<?php include('header.php');?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styletambah.css" rel="stylesheet" type="text/css" />
    <title>Tambah Data Pembeli</title>
</head> 

<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>

	<form action="add_pembeli.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Pembeli</td>
				<td><input type="text" name="id_pembeli"></td>
			</tr>
			<tr> 
				<td>Nama Pembeli</td>
				<td><input type="text" name="nama_pembeli"></td>
			</tr>
			<tr>
				<td>No.Telp</td>
				<td><input type="text" name="no_telp"></td>
			</tr>
            <tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="TAMBAHKAN"></td>
			</tr>
		</table>
	</form>

	<?php


	if(isset($_POST['Submit'])) {
		$id_pembeli = $_POST['id_pembeli'];
		$nama_pembeli = $_POST['nama_pembeli'];
		$no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];

		include("koneksi.php");

		$result = mysqli_query($conn, "INSERT INTO pembeli(id_pembeli,nama_pembeli,no_telp,alamat) 
		VALUES('$id_pembeli','$nama_pembeli','$no_telp','$alamat')");

		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
<?php include('footer.php');?>
</html> 