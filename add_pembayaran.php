<?php include('header.php');?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styletambah.css" rel="stylesheet" type="text/css" />
    <title>Tambah Data Pembayaran</title>
</head> 

<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>

	<form action="add_pembayaran.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Bayar</td>
				<td><input type="text" name="id_bayar"></td>
			</tr>
			<tr> 
				<td>ID Pembeli</td>
				<td><input type="text" name="id_pembeli"></td>
			</tr>
			<tr> 
				<td>ID Motor</td>
				<td><input type="text" name="id_motor"></td>
			</tr>
            <tr> 
				<td>Tanggal Bayar</td>
				<td><input type="text" name="tanggal_bayar"></td>
			</tr>
			<tr>
                <td>Total Bayar</td>
				<td><input type="text" name="total_bayar"></td>
				<td></td>
				<td><input type="submit" name="Submit" value="TAMBAHKAN"></td>
			</tr>
		</table>
	</form>

	<?php

	if(isset($_POST['Submit'])) {
		$id_bayar = $_POST['id_bayar'];
		$id_pembeli = $_POST['id_pembeli'];
		$id_motor = $_POST['id_motor'];
		$tanggal_bayar = $_POST['tanggal_bayar'];
        $total_bayar = $_POST['total_bayar'];

		include("koneksi.php");

		$result = mysqli_query($conn, "INSERT INTO pembayaran(id_bayar,id_pembeli,id_motor,total_bayar) 
        VALUES('$id_bayar','$id_pembeli','$id_motor','$total_bayar')");


		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
<?php include('footer.php');?>
</html> 