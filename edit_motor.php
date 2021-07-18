<?php

include("koneksi.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id_motor'];

	$id_motor=$_POST['id_motor'];
	$nama_motor=$_POST['nama_motor'];
	$warna_motor=$_POST['warna_motor'];
	$harga_motor=$_POST['harga_motor'];

	// update user dataa
	$result = mysqli_query($conn, 
	"UPDATE motor SET id_motor='$id_motor',nama_motor='$nama_motor',warna_motor='$warna_motor',harga_motor='$harga_motor' 
	WHERE id_motor=$id");

    header("Location: index.php");
}
?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styleubah.css" rel="stylesheet" type="text/css" />
    <title>Ubah Data Motor</title>
</head>

<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM motor WHERE id_motor=$id");

while($user_data = mysqli_fetch_array($result))
{
	$id_motor = $user_data['id_motor'];
	$nama_motor = $user_data['nama_motor'];
	$warna_motor = $user_data['warna_motor'];
	$harga_motor = $user_data['harga_motor'];
}
?>
<?php include('header1.php');?>

<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>

	<form name="update_user" method="post" action="edit_motor.php">
		<table border="0">
			<tr> 
				<td>ID Motor</td>
				<td><input type="text" name="id_motor" value=<?php echo $id_motor;?>></td>
			</tr>
			<tr> 
				<td>Nama Motor</td>
				<td><input type="text" name="nama_motor" value=<?php echo $nama_motor;?>></td>
			</tr>
			<tr> 
				<td>Warna Motor</td>
				<td><input type="text" name="warna_motor" value=<?php echo $warna_motor;?>></td>
			</tr>
			<tr> 
				<td>Harga Motor</td>
				<td><input type="text" name="harga_motor" value=<?php echo $harga_motor;?>></td>
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