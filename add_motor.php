<?php include('header.php');?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styletambah.css" rel="stylesheet" type="text/css" />
    <title>Tambah Data Motor</title>
</head> 

<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>

	<form action="add_motor.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Motor</td>
				<td><input type="text" name="id_motor"></td>
			</tr>
			<tr> 
				<td>Nama Motor</td>
				<td><input type="text" name="nama_motor"></td>
			</tr>
			<tr>
				<td>Warna Motor</td>
				<td><input type="text" name="warna_motor"></td>
			</tr>
            <tr>
				<td>Harga Motor</td>
				<td><input type="text" name="harga_motor"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="TAMBAHKAN"></td>
			</tr>
		</table>
	</form>

	<?php


	if(isset($_POST['Submit'])) {
		$id_motor = $_POST['id_motor'];
		$nama_motor = $_POST['nama_motor'];
		$warna_motor = $_POST['warna_motor'];
        $harga_motor = $_POST['harga_motor'];

		include("koneksi.php");

		$result = mysqli_query($conn, "INSERT INTO motor(id_motor,nama_motor,warna_motor,harga_motor) 
		VALUES('$id_motor','$nama_motor','$warna_motor','$harga_motor')");

		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
<?php include('footer.php');?>
</html> 