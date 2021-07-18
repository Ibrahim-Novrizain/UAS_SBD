<?php

include("koneksi.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id_bayar'];

	$id_bayar=$_POST['id_bayar'];
	$id_pembeli=$_POST['id_pembeli'];
	$id_motor=$_POST['id_motor'];
	$tanggal_bayar=$_POST['tanggal_bayar'];

	// update user dataa
	$result = mysqli_query($conn, 
	"UPDATE pembayaran SET id_bayar='$id_bayar', id_pembeli='$id_pembeli',id_motor='$id_motor',tanggal_bayar='$tanggal_bayar' 
	WHERE id_bayar=$id");

    header("Location: index.php");
}
?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styleubah.css" rel="stylesheet" type="text/css" />
    <title>Ubah Data Pembayaran</title>
</head>

<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM pembayaran WHERE id_bayar=$id");

while($user_data = mysqli_fetch_array($result))
{
	$id_bayar = $user_data['id_bayar'];
	$id_pembeli = $user_data['id_pembeli'];
	$id_motor = $user_data['id_motor'];
	$tanggal_bayar = $user_data['tanggal_bayar'];
}
?>
<?php include('header1.php');?>

<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>

	<form name="update_user" method="post" action="edit_pembayaran.php">
		<table border="0">
			<tr> 
				<td>ID Bayar</td>
				<td><input type="text" name="id_bayar" value=<?php echo $id_bayar;?>></td>
			</tr>
			<tr> 
				<td>ID Pembeli</td>
				<td><input type="text" name="id_pembeli" value=<?php echo $id_pembeli;?>></td>
			</tr>
			<tr> 
				<td>ID Motor</td>
				<td><input type="text" name="id_motor" value=<?php echo $id_motor;?>></td>
			</tr>
			<tr> 
				<td>Tanggal Bayar</td>
				<td><input type="text" name="tanggal_bayar" value=<?php echo $tanggal_bayar;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
<?php include('footer.php');?>
</html> 